
import geopandas as gpd
import csv
import re
from shapely.wkt import loads

# for download()
import urllib.request, json
import time
import csv
from scipy import spatial
from numpy import dot
from numpy.linalg import norm

# for createBasicDataFiles()
import pandas as pd
import numpy as np
from sklearn import preprocessing
import logger

# for createDB
import sqlite3
from sqlite3 import Error

import os


def shapefileToCSVMaster(shp_file, csv_file):
    # Read in data
    gdf = gpd.read_file(shp_file)
    # Print to csv
    gdf.to_csv(csv_file, sep=';', encoding='utf-8', index=False, quoting=csv.QUOTE_ALL, columns=["NUTS_ID","LEVL_CODE","CNTR_CODE","NAME_LATN","NUTS_NAME","MOUNT_TYPE","URBN_TYPE","COAST_TYPE","FID"])

def parseAndLinkNUTS(year, input_file, output_file):
    #"NUTS_ID";"LEVL_CODE";"CNTR_CODE";"NAME_LATN";"NUTS_NAME";"MOUNT_TYPE";"URBN_TYPE";"COAST_TYPE";"FID"
    csv.register_dialect('semicolonsep', delimiter=';')
    with open(input_file, "rt", encoding='utf8') as csvfile:
        fh=open(output_file,'w')
        fh.write('code|name|level|nuts0|nuts1|nuts2|nuts3\n')
        for row in csv.DictReader(csvfile, dialect='semicolonsep'):
            level = row['LEVL_CODE']
            country = row['CNTR_CODE']
            code = row['NUTS_ID']
            name = row['NUTS_NAME']

            nuts0="NONE"
            nuts1="NONE"
            nuts2="NONE"
            nuts3="NONE"

            if (level == "0") :
                nuts0=country
                nuts1=""
                nuts2=""
                nuts3=""
            elif (level == "1"):
                nuts0=country
                nuts1=code
                nuts2=""
                nuts3=""
            elif (level == "2"):
                nuts0=country
                nuts1=code[0:3]
                nuts2=code
                nuts3=""
            elif (level == "3"):
                nuts0=country
                nuts1=code[0:3]
                nuts2=code[0:4]
                nuts3=code
            else:
                raise Exception("LEVEL value not recognised")

            # print to file
            fh.write('{}|{}|{}|{}|{}|{}|{}\n'.format(code,name,level,nuts0,nuts1,nuts2,nuts3))
        fh.close()


def generateNUTS3list(year):
    output_file='data/nuts3list-'+str(year)+'.csv'
    #"NUTS_ID";"LEVL_CODE";"CNTR_CODE";"NAME_LATN";"NUTS_NAME";"MOUNT_TYPE";"URBN_TYPE";"COAST_TYPE";"FID"
    myfile = 'nuts0123-' + str(year) + '.csv'
    csv.register_dialect('semicolonsep', delimiter=';')
    with open(myfile, "rt", encoding='utf8') as csvfile:
        fh=open(output_file,'w')
        fh.write('id,n,r,q\n')
        for row in csv.DictReader(csvfile, dialect='semicolonsep'):
            level = row['LEVL_CODE']
            country = row['CNTR_CODE']
            code = row['NUTS_ID']
            name = row['NUTS_NAME']
            # print to file
            if (level == "0"):
                fh.write('"{}","{}"\n'.format(code,name))
            else:
                pass
        fh.close()


def generate_select_dropdown(db_file,out_file):
    # initialise select file
    fh = open(out_file, 'w')
    fh.write('<select id="select_Nuts" class="js-example-basic-single" name="state">\n')
    fh.write('<option></option>\n')

    # connect to DB
    conn = None
    try:
        conn = sqlite3.connect(db_file)
        cur = conn.cursor()
        cur.execute("SELECT code,name FROM nuts where level='0' ORDER by name ASC")
        rows = cur.fetchall()
        for row in rows:
            codenuts0 = row[0]
            namenuts0 = row[1]

            fh.write('<optgroup label="{}">\n'.format(namenuts0))
            cur2 = conn.cursor()
            cur2.execute("SELECT code,name FROM nuts where level='3' and nuts0='" + codenuts0 + "' ORDER by name ASC")
            rows2 = cur2.fetchall()
            for row2 in rows2:

                code = row2[0]
                name = row2[1]
                fh.write('<option value="{}">{}</option>\n'.format(code, name))

    except Error as e:
        print(e)
    fh.write('</select>')
    fh.close()

def generate_select_dropdown_with_nuts2(db_file,out_file):
    # initialise select file
    fh = open(out_file, 'w')
    fh.write('<select id="select_Nuts" class="js-example-basic-single" name="state">\n')
    fh.write('<option></option>\n')

    # connect to DB
    conn = None
    try:
        conn = sqlite3.connect(db_file)
        cur = conn.cursor()
        cur.execute("SELECT code,name FROM nuts where level='0' ORDER by name ASC")
        rows = cur.fetchall()
        for row in rows:
            codenuts0 = row[0]
            namenuts0 = row[1]

            fh.write('<optgroup label="{}">\n'.format(namenuts0))
            cur2 = conn.cursor()
            cur2.execute("SELECT code,name FROM nuts where level='2' and nuts0='" + codenuts0 + "' ORDER by name ASC")

            rows2 = cur2.fetchall()
            for row2 in rows2:

                codenuts2 = row2[0]
                namenuts2 = "NUTS2 – " + row2[1]
                fh.write('<option value="{}">{}</option>\n'.format(codenuts2, namenuts2))

                cur3 = conn.cursor()
                cur3.execute("SELECT code,name FROM nuts where level='3' and nuts0='" + codenuts0 + "' and nuts2='"+codenuts2 + "' ORDER by name ASC")
                rows3 = cur3.fetchall()
                for row3 in rows3:

                    code = row3[0]
                    name = row3[1]
                    fh.write('<option value="{}">{}</option>\n'.format(code, name))


    except Error as e:
        print(e)
    fh.write('</select>')
    fh.close()


def mround(match):
    return "{:.2f}".format(float(match.group()))

# gets dataset and puts it in global dictionary
def getDataSet(table, filter, prefix):
    global globaldict

    euroUrl = 'http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/'
    euroUrl = euroUrl+""+table
    euroUrl = euroUrl+"?"+filter

    data = []
    try:
        headers={
            'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.47 Safari/537.36'
        }
        req = urllib.request.Request(url=euroUrl,headers=headers)
        url = urllib.request.urlopen(req)
        data = json.loads(url.read().decode())

    except Exception as e:
        return "HTTPERROR"

    index = data['dimension']['geo']['category']['index']
    values = data['value']

    for indexCode in index:
        indexCode = indexCode
        indexToFollow = index[indexCode]

        try:
            val = values[str(indexToFollow)]
        except Exception as e:
            val = "NONE"

        if str(indexCode) not in globaldict:
            globaldict[str(indexCode)] = dict()
        globaldict[str(indexCode)][prefix] = str(val)

def initData(file_json):
    global globaldict
    getDataSet('demo_r_pjanaggr3', 'precision=1&sex=T&unit=NR&time=2019&age=TOTAL', 'population2019_nuts3')
    getDataSet('demo_r_d2jan','time=2019&precision=1&sex=T&unit=NR&age=TOTAL','population2019')
    getDataSet('demo_r_d3dens', 'unit=PER_KM2&precision=1&time=2018','density2018_nuts3')
    getDataSet('demo_r_find3','indic_de=TOTFERRT&precision=1&unit=NR&time=2018', 'fertility2018_nuts3')
    getDataSet('demo_r_gind3','indic_de=GROW&precision=1&time=2018','populationchange2018_nuts3')
    getDataSet('demo_r_pjanind3','indic_de=PC_FM&precision=1&unit=PC&time=2019','womenper100men2019_nuts3')
    getDataSet('nama_10r_3gdp','unit=EUR_HAB_EU27_2020&precision=1&time=2017','gdpPps2017_nuts3')
    getDataSet('nama_10r_3gva','precision=1&currency=MIO_EUR&time=2017&nace_r2=TOTAL','gva2017basicprices_nuts3')

    ## New datasets added 15/6

    ## CENSUS, age ranges
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/cens_11ag_r3?filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y_LT15
    getDataSet('cens_11ag_r3', 'filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y_LT15', 'census_age_Y_LT15_2011_nuts3')
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/cens_11ag_r3?filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y15-29
    getDataSet('cens_11ag_r3', 'filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y15-29', 'census_age_Y15-29_2011_nuts3')
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/cens_11ag_r3?filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y30-49
    getDataSet('cens_11ag_r3', 'filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y30-49', 'census_age_Y30-49_2011_nuts3')
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/cens_11ag_r3?filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y50-64
    getDataSet('cens_11ag_r3', 'filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y50-64', 'census_age_Y50-64_2011_nuts3')
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/cens_11ag_r3?filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y65-84
    getDataSet('cens_11ag_r3', 'filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y65-84', 'census_age_Y65-84_2011_nuts3')
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/cens_11ag_r3?filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y_GE85
    getDataSet('cens_11ag_r3', 'filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=Y_GE85', 'census_age_Y_GE85_2011_nuts3')
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/cens_11ag_r3?filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=TOTAL
    getDataSet('cens_11ag_r3', 'filterNonGeo=1&precision=1&sex=T&unit=NR&unitLabel=code&shortLabel=1&time=2011&age=TOTAL', 'census_age_TOTAL_2011_nuts3')


    ## TOURISM, number of establishments
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/tour_cap_nuts3?filterNonGeo=1&precision=1&unit=NR&unitLabel=code&accommod=ESTBL&time=2011&nace_r2=I551-I553
    getDataSet('tour_cap_nuts3', 'filterNonGeo=1&precision=1&unit=NR&unitLabel=code&accommod=ESTBL&time=2011&nace_r2=I551-I553', 'tourism_establishments_2011_nuts3')

    ## ENERGY, Cooling and Heating Degree-days
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/nrg_chddr2_a?filterNonGeo=1&precision=1&unit=NR&unitLabel=code&time=2011&indic_nrg=CDD
    getDataSet('nrg_chddr2_a', 'filterNonGeo=1&precision=1&unit=NR&unitLabel=code&time=2011&indic_nrg=CDD', 'energy_cooling_degdays_2011_nuts3')
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/nrg_chddr2_a?filterNonGeo=1&precision=1&unit=NR&unitLabel=code&time=2011&indic_nrg=HDD
    getDataSet('nrg_chddr2_a', 'filterNonGeo=1&precision=1&unit=NR&unitLabel=code&time=2011&indic_nrg=HDD', 'energy_heating_degdays_2011_nuts3')

    ## CRIME, burglary only
    # - http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/crim_gen_reg?filterNonGeo=1&precision=1&unit=NR&unitLabel=code&time=2010&iccs=ICCS050211
    getDataSet('crim_gen_reg', 'filterNonGeo=1&precision=1&unit=NR&unitLabel=code&time=2010&iccs=ICCS050211', 'crime_burglaries_2010_nuts3')

    # to file, do this to get proper JSON
    app_json = json.dumps(globaldict, indent=4)
    globaldictfile = open(file_json, "w")
    globaldictfile.write(app_json)
    globaldictfile.close()

def download(file_json):
    global globaldict
    globaldict = dict()
    initData(file_json)

def createBasicDataFiles(year, globaldict_file, file_tsv, file_normalised_tsv, relations_filename):
    with open(globaldict_file, "r") as read_file: globaldict = json.load(read_file)
    createCSV(year, file_tsv, relations_filename)
    fixData(year, file_tsv, file_normalised_tsv, relations_filename)


def createDB(db_file_name, nuts_file, nutsNORM_file, nuts2016_file, nutsNORM2016_file, relations_file, relations2016_file, nutsextra_file):
    """ create a database connection to a SQLite database """
    conn = None
    try:
        conn = sqlite3.connect(db_file_name)

        # Drop all tables
        drop_sql1 = "DROP table nuts;"
        drop_sql2 = "DROP table nutsNORM;"
        drop_sql3 = "DROP table nuts2016;"
        drop_sql4 = "DROP table nutsNORM2016;"
        drop_sql5 = "DROP table similarity;"
        drop_sql6 = "DROP table relations;"
        drop_sql7 = "DROP table relations2016;"
        drop_sql8 = "DROP table nutsextra;"
        try:
            c = conn.cursor()
            c.executescript(drop_sql1)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(drop_sql2)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(drop_sql3)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(drop_sql4)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(drop_sql5)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(drop_sql6)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(drop_sql7)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(drop_sql8)
        except Error as e:
            print(e)

        # CREATE all tables
        create_sql1 = "create table nuts (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real, census_age_Y_LT15_2011_nuts3 real, census_age_Y1529_2011_nuts3 real, census_age_Y3049_2011_nuts3 real, census_age_Y5064_2011_nuts3 real, census_age_Y6584_2011_nuts3 real, census_age_Y_GE85_2011_nuts3 real, census_age_TOTAL_2011_nuts3 real, tourism_establishments_2011_nuts3 real, energy_cooling_degdays_2011_nuts3 real, energy_heating_degdays_2011_nuts3 real, crime_burglaries_2010_nuts3 real);"
        create_sql2 = "create table nutsNORM (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real, census_age_Y_LT15_2011_nuts3 real, census_age_Y1529_2011_nuts3 real, census_age_Y3049_2011_nuts3 real, census_age_Y5064_2011_nuts3 real, census_age_Y6584_2011_nuts3 real, census_age_Y_GE85_2011_nuts3 real, census_age_TOTAL_2011_nuts3 real, tourism_establishments_2011_nuts3 real, energy_cooling_degdays_2011_nuts3 real, energy_heating_degdays_2011_nuts3 real, crime_burglaries_2010_nuts3 real);"
        create_sql3 = "create table nuts2016 (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real, census_age_Y_LT15_2011_nuts3 real, census_age_Y1529_2011_nuts3 real, census_age_Y3049_2011_nuts3 real, census_age_Y5064_2011_nuts3 real, census_age_Y6584_2011_nuts3 real, census_age_Y_GE85_2011_nuts3 real, census_age_TOTAL_2011_nuts3 real, tourism_establishments_2011_nuts3 real, energy_cooling_degdays_2011_nuts3 real, energy_heating_degdays_2011_nuts3 real, crime_burglaries_2010_nuts3 real);"
        create_sql4 = "create table nutsNORM2016 (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real, census_age_Y_LT15_2011_nuts3 real, census_age_Y1529_2011_nuts3 real, census_age_Y3049_2011_nuts3 real, census_age_Y5064_2011_nuts3 real, census_age_Y6584_2011_nuts3 real, census_age_Y_GE85_2011_nuts3 real, census_age_TOTAL_2011_nuts3 real, tourism_establishments_2011_nuts3 real, energy_cooling_degdays_2011_nuts3 real, energy_heating_degdays_2011_nuts3 real, crime_burglaries_2010_nuts3 real);"
        create_sql5 = "CREATE TABLE similarity (code1 text, code2 text, similarity real, PRIMARY KEY (code1, code2));"
        create_sql6 = "create table relations(code text PRIMARY KEY, name text, level text, nuts0 text, nuts1 text, nuts2 text, nuts3 text);"
        create_sql7 = "create table relations2016(code text PRIMARY KEY, name text, level text, nuts0 text, nuts1 text, nuts2 text, nuts3 text);"
        create_sql8 = "create table nutsextra (code text PRIMARY KEY, urbanrural text, metropolitan text, coastal text, mountain text, border text, island text, remoteness text);"

        try:
            c = conn.cursor()
            c.executescript(create_sql1)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(create_sql2)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(create_sql3)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(create_sql4)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(create_sql5)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(create_sql6)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(create_sql7)
        except Error as e:
            print(e)
        try:
            c = conn.cursor()
            c.executescript(create_sql8)
        except Error as e:
            print(e)

        # Populate DB
        ## Basic tables
        basicdata2021 = pd.read_csv(nuts_file, delimiter='|')
        basicdata2021.to_sql('nuts', conn, if_exists='replace', index = False)

        basicdata2016 = pd.read_csv(nuts2016_file, delimiter='|')
        basicdata2016.to_sql('nuts2016', conn, if_exists='replace', index = False)

        ## Normalised tables
        basicdata2021norm = pd.read_csv(nutsNORM_file, delimiter='|')
        basicdata2021norm.to_sql('nutsNORM', conn, if_exists='replace', index = False)

        basicdata2016norm = pd.read_csv(nutsNORM2016_file, delimiter='|')
        basicdata2016norm.to_sql('nutsNORM2016', conn, if_exists='replace', index = False)

        relations2021 = pd.read_csv(relations_file, delimiter='|')
        relations2021.to_sql('relations', conn, if_exists='replace', index = False)

        relations2016 = pd.read_csv(relations2016_file, delimiter='|')
        relations2016.to_sql('relations2016', conn, if_exists='replace', index = False)

        nutsextra = pd.read_csv(nutsextra_file, delimiter='|')
        nutsextra.to_sql('nutsextra', conn, if_exists='replace', index = False)

    except Error as e:
        print(e)
    finally:
        if conn:
            conn.close()

def generate_geojson(shp_file, json_file, level):
    # Delete existing
    if os.path.exists(json_file):
        os.remove(json_file)

    # Read in data
    gdf = gpd.read_file(shp_file)

    # Filter out any NUTS area that isn't level 3
    gdf.drop(gdf[gdf.LEVL_CODE != level].index, inplace = True)

    # Reproject to Lat/Long: http://epsg.io/4326
    gdf_4326 = gdf.to_crs(epsg='4326')

    # reduce decimals
    simpledec = re.compile(r"\d*\.\d+")
    gdf_4326.geometry = gdf_4326.geometry.apply(lambda x: loads(re.sub(simpledec, mround, x.wkt)))
    gdf_simplified = gdf_4326.copy()
    gdf_simplified["geometry"] = gdf_4326.geometry.simplify(tolerance=5000/43200,preserve_topology=True)

    # Write to file
    gdf_simplified.to_file(json_file, driver="GeoJSON")

def createCSV(year, file_tsv, file_normalised_tsv, relations_filename):

    csvfile = open(file_tsv, "w")

    global globaldict

    #thisline=f'code|level|name|nuts0|nuts1|nuts2|pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva\n'
    thisline=f'code|level|name|nuts0|nuts1|nuts2|pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva|census_age_Y_LT15_2011_nuts3|census_age_Y15-29_2011_nuts3|census_age_Y30-49_2011_nuts3|census_age_Y50-64_2011_nuts3|census_age_Y65-84_2011_nuts3|census_age_Y_GE85_2011_nuts3|census_age_TOTAL_2011_nuts3|tourism_establishments_2011_nuts3|energy_cooling_degdays_2011_nuts3|energy_heating_degdays_2011_nuts3|crime_burglaries_2010_nuts3\n'
    csvfile.write(thisline)

    fileHandle = open(relations_filename, 'r')

    for line in fileHandle:

        fields = line.split('|')

        # RS|REPUBLIKA SRBIJA /РЕПУБЛИКА СРБИЈА|0|RS|NUTS1|NUTS2|NUTS3
        code=fields[0]
        name=fields[1]
        level=fields[2]
        nuts0=fields[3]
        nuts1=fields[4]
        nuts2=fields[5]

        if (code == "code"):
            continue
        if (level == "0"):
            try:
                # get dictionaries for this area and its ancestors
                try:
                    dictionary0 = globaldict[code]
                except Exception:
                    dictionary0 = dict()

                # data about this nuts
                pop3 = -1
                pop2 = -1
                pop1 = -1

                try:
                    pop0 = dictionary0.get('population2019','N/A')
                except Exception:
                    pop0 = -1

                try:
                    density = dictionary0.get('density2018_nuts3','N/A')
                except Exception:
                    density = -1

                try:
                    fertility = dictionary0.get('fertility2018_nuts3', 'N/A')
                except Exception:
                    fertility = -1

                try:
                    popchange = dictionary0.get('populationchange2018_nuts3', 'N/A')
                except Exception:
                    popchange = -1

                try:
                    womenratio = dictionary0.get('womenper100men2019_nuts3', 'N/A')
                except Exception:
                    womenratio = -1

                try:
                    gdppps = dictionary0.get('gdpPps2017_nuts3', 'N/A')
                except Exception:
                    gdppps = -1

                try:
                    gva = dictionary0.get('gva2017basicprices_nuts3', 'N/A')
                except Exception:
                    gva = -1


                #thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'
                ## NEW FIELDS
                try:
                    census_age_Y_LT15_2011_nuts3 = dictionary0.get('census_age_Y_LT15_2011_nuts3','N/A')
                except Exception:
                    census_age_Y_LT15_2011_nuts3 = -1
                try:
                    census_age_Y1529_2011_nuts3 = dictionary0.get('census_age_Y15-29_2011_nuts3','N/A')
                except Exception:
                    census_age_Y1529_2011_nuts3 = -1
                try:
                    census_age_Y3049_2011_nuts3 = dictionary0.get('census_age_Y30-49_2011_nuts3','N/A')
                except Exception:
                    census_age_Y3049_2011_nuts3 = -1
                try:
                    census_age_Y5064_2011_nuts3 = dictionary0.get('census_age_Y50-64_2011_nuts3','N/A')
                except Exception:
                    census_age_Y5064_2011_nuts3 = -1
                try:
                    census_age_Y6584_2011_nuts3 = dictionary0.get('census_age_Y65-84_2011_nuts3','N/A')
                except Exception:
                    census_age_Y6584_2011_nuts3 = -1
                try:
                    census_age_Y_GE85_2011_nuts3 = dictionary0.get('census_age_Y_GE85_2011_nuts3','N/A')
                except Exception:
                    census_age_Y_GE85_2011_nuts3 = -1
                try:
                    census_age_TOTAL_2011_nuts3 = dictionary0.get('census_age_TOTAL_2011_nuts3','N/A')
                except Exception:
                    census_age_TOTAL_2011_nuts3 = -1
                try:
                    tourism_establishments_2011_nuts3 = dictionary0.get('tourism_establishments_2011_nuts3','N/A')
                except Exception:
                    tourism_establishments_2011_nuts3 = -1
                try:
                    energy_cooling_degdays_2011_nuts3 = dictionary0.get('energy_cooling_degdays_2011_nuts3','N/A')
                except Exception:
                    energy_cooling_degdays_2011_nuts3 = -1
                try:
                    energy_heating_degdays_2011_nuts3 = dictionary0.get('energy_heating_degdays_2011_nuts3','N/A')
                except Exception:
                    energy_heating_degdays_2011_nuts3 = -1
                try:
                    crime_burglaries_2010_nuts3 = dictionary0.get('crime_burglaries_2010_nuts3','N/A')
                except Exception:
                    crime_burglaries_2010_nuts3 = -1

                # thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'
                thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}|{census_age_Y_LT15_2011_nuts3}|{census_age_Y1529_2011_nuts3}|{census_age_Y3049_2011_nuts3}|{census_age_Y5064_2011_nuts3}|{census_age_Y6584_2011_nuts3}|{census_age_Y_GE85_2011_nuts3}|{census_age_TOTAL_2011_nuts3}|{tourism_establishments_2011_nuts3}|{energy_cooling_degdays_2011_nuts3}|{energy_heating_degdays_2011_nuts3}|{crime_burglaries_2010_nuts3}\n'
            except Exception:
                #thisline = f'{code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR\n'
                #print(thisline)
                logger.error('Failed : '+ str(e))

            csvfile.write(thisline)
            #print(thisline)
            #print(dictionary0)
            #print(pop1)

        elif (level == "1"):
            try:
                # get dictionaries for this area and its ancestors
                try:
                    dictionary0 = globaldict[nuts0]
                except Exception:
                    dictionary0 = dict()
                try:
                    dictionary1 = globaldict[code]
                except Exception:
                    dictionary1 = dict()

                # data about this nuts
                pop3 = -1
                pop2 = -1

                try:
                    pop1 = dictionary1.get('population2019_nuts3','N/A')
                except Exception:
                    pop1 = -1

                try:
                    density = dictionary1.get('density2018_nuts3','N/A')
                except Exception:
                    density = -1

                try:
                    fertility = dictionary1.get('fertility2018_nuts3', 'N/A')
                except Exception:
                    fertility = -1

                try:
                    popchange = dictionary1.get('populationchange2018_nuts3', 'N/A')
                except Exception:
                    popchange = -1

                try:
                    womenratio = dictionary1.get('womenper100men2019_nuts3', 'N/A')
                except Exception:
                    womenratio = -1

                try:
                    gdppps = dictionary1.get('gdpPps2017_nuts3', 'N/A')
                except Exception:
                    gdppps = -1

                try:
                    gva = dictionary1.get('gva2017basicprices_nuts3', 'N/A')
                except Exception:
                    gva = -1

                # data about containing nuts
                try:
                    pop0 = dictionary0.get('population2019','N/A')
                except Exception:
                    pop0 -1

                ## NEW FIELDS
                try:
                    census_age_Y_LT15_2011_nuts3 = dictionary1.get('census_age_Y_LT15_2011_nuts3','N/A')
                except Exception:
                    census_age_Y_LT15_2011_nuts3 = -1
                try:
                    census_age_Y1529_2011_nuts3 = dictionary1.get('census_age_Y15-29_2011_nuts3','N/A')
                except Exception:
                    census_age_Y1529_2011_nuts3 = -1
                try:
                    census_age_Y3049_2011_nuts3 = dictionary1.get('census_age_Y30-49_2011_nuts3','N/A')
                except Exception:
                    census_age_Y3049_2011_nuts3 = -1
                try:
                    census_age_Y5064_2011_nuts3 = dictionary1.get('census_age_Y50-64_2011_nuts3','N/A')
                except Exception:
                    census_age_Y5064_2011_nuts3 = -1
                try:
                    census_age_Y6584_2011_nuts3 = dictionary1.get('census_age_Y65-84_2011_nuts3','N/A')
                except Exception:
                    census_age_Y6584_2011_nuts3 = -1
                try:
                    census_age_Y_GE85_2011_nuts3 = dictionary1.get('census_age_Y_GE85_2011_nuts3','N/A')
                except Exception:
                    census_age_Y_GE85_2011_nuts3 = -1
                try:
                    census_age_TOTAL_2011_nuts3 = dictionary1.get('census_age_TOTAL_2011_nuts3','N/A')
                except Exception:
                    census_age_TOTAL_2011_nuts3 = -1
                try:
                    tourism_establishments_2011_nuts3 = dictionary1.get('tourism_establishments_2011_nuts3','N/A')
                except Exception:
                    tourism_establishments_2011_nuts3 = -1
                try:
                    energy_cooling_degdays_2011_nuts3 = dictionary1.get('energy_cooling_degdays_2011_nuts3','N/A')
                except Exception:
                    energy_cooling_degdays_2011_nuts3 = -1
                try:
                    energy_heating_degdays_2011_nuts3 = dictionary1.get('energy_heating_degdays_2011_nuts3','N/A')
                except Exception:
                    energy_heating_degdays_2011_nuts3 = -1
                try:
                    crime_burglaries_2010_nuts3 = dictionary1.get('crime_burglaries_2010_nuts3','N/A')
                except Exception:
                    crime_burglaries_2010_nuts3 = -1


                thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}|{census_age_Y_LT15_2011_nuts3}|{census_age_Y1529_2011_nuts3}|{census_age_Y3049_2011_nuts3}|{census_age_Y5064_2011_nuts3}|{census_age_Y6584_2011_nuts3}|{census_age_Y_GE85_2011_nuts3}|{census_age_TOTAL_2011_nuts3}|{tourism_establishments_2011_nuts3}|{energy_cooling_degdays_2011_nuts3}|{energy_heating_degdays_2011_nuts3}|{crime_burglaries_2010_nuts3}\n'

                #thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'


            except Exception as e:
                thisline = f'{code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR\n'
                #print(thisline)
                logger.error('Failed : '+ str(e))

            csvfile.write(thisline)

        elif (level == "2"):
            try:
                # get dictionaries for this area and its ancestors
                try:
                    dictionary0 = globaldict[nuts0]
                except Exception:
                    dictionary0 = dict()

                try:
                    dictionary1 = globaldict[nuts1]
                except Exception:
                    dictionary1 = dict()

                try:
                    dictionary2 = globaldict[code]
                except Exception:
                    dictionary2 = dict()

                # data about this nuts
                pop3 = -1

                try:
                    pop2 = dictionary2.get('population2019_nuts3','N/A')
                except Exception:
                    pop2 = -1

                try:
                    density = dictionary2.get('density2018_nuts3','N/A')
                except Exception:
                    density = -1

                try:
                    fertility = dictionary2.get('fertility2018_nuts3', 'N/A')
                except Exception:
                    fertility = -1

                try:
                    popchange = dictionary2.get('populationchange2018_nuts3', 'N/A')
                except Exception:
                    popchange = -1

                try:
                    womenratio = dictionary2.get('womenper100men2019_nuts3', 'N/A')
                except Exception:
                    womenratio = -1

                try:
                    gdppps = dictionary2.get('gdpPps2017_nuts3', 'N/A')
                except Exception:
                    gdpps = -1

                try:
                    gva = dictionary2.get('gva2017basicprices_nuts3', 'N/A')
                except Exception:
                    gva = -1

                try:
                    pop1 = dictionary1.get('population2019', 'N/A')
                except Exception:
                    pop1 = -1

                try:
                    pop0 = dictionary0.get('population2019','N/A')
                except Exception:
                    pop0 = -1
                ## NEW FIELDS
                try:
                    census_age_Y_LT15_2011_nuts3 = dictionary2.get('census_age_Y_LT15_2011_nuts3','N/A')
                except Exception:
                    census_age_Y_LT15_2011_nuts3 = -1
                try:
                    census_age_Y1529_2011_nuts3 = dictionary2.get('census_age_Y15-29_2011_nuts3','N/A')
                except Exception:
                    census_age_Y1529_2011_nuts3 = -1
                try:
                    census_age_Y3049_2011_nuts3 = dictionary2.get('census_age_Y30-49_2011_nuts3','N/A')
                except Exception:
                    census_age_Y3049_2011_nuts3 = -1
                try:
                    census_age_Y5064_2011_nuts3 = dictionary2.get('census_age_Y50-64_2011_nuts3','N/A')
                except Exception:
                    census_age_Y5064_2011_nuts3 = -1
                try:
                    census_age_Y6584_2011_nuts3 = dictionary2.get('census_age_Y65-84_2011_nuts3','N/A')
                except Exception:
                    census_age_Y6584_2011_nuts3 = -1
                try:
                    census_age_Y_GE85_2011_nuts3 = dictionary2.get('census_age_Y_GE85_2011_nuts3','N/A')
                except Exception:
                    census_age_Y_GE85_2011_nuts3 = -1
                try:
                    census_age_TOTAL_2011_nuts3 = dictionary2.get('census_age_TOTAL_2011_nuts3','N/A')
                except Exception:
                    census_age_TOTAL_2011_nuts3 = -1
                try:
                    tourism_establishments_2011_nuts3 = dictionary2.get('tourism_establishments_2011_nuts3','N/A')
                except Exception:
                    tourism_establishments_2011_nuts3 = -1
                try:
                    energy_cooling_degdays_2011_nuts3 = dictionary2.get('energy_cooling_degdays_2011_nuts3','N/A')
                except Exception:
                    energy_cooling_degdays_2011_nuts3 = -1
                try:
                    energy_heating_degdays_2011_nuts3 = dictionary2.get('energy_heating_degdays_2011_nuts3','N/A')
                except Exception:
                    energy_heating_degdays_2011_nuts3 = -1
                try:
                    crime_burglaries_2010_nuts3 = dictionary2.get('crime_burglaries_2010_nuts3','N/A')
                except Exception:
                    crime_burglaries_2010_nuts3 = -1

                # thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'
                thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}|{census_age_Y_LT15_2011_nuts3}|{census_age_Y1529_2011_nuts3}|{census_age_Y3049_2011_nuts3}|{census_age_Y5064_2011_nuts3}|{census_age_Y6584_2011_nuts3}|{census_age_Y_GE85_2011_nuts3}|{census_age_TOTAL_2011_nuts3}|{tourism_establishments_2011_nuts3}|{energy_cooling_degdays_2011_nuts3}|{energy_heating_degdays_2011_nuts3}|{crime_burglaries_2010_nuts3}\n'
            except Exception as e:
                # thisline = f'{code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR\n'
                # thisline = f'ISSUE > {code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR'
                #print(thisline)
                logger.error('Failed : '+ str(e))

            csvfile.write(thisline)

        elif (level=="3"):
            try:
                # get dictionaries for this area and its ancestors, if available
                try:
                    dictionary3 = globaldict[code]
                except Exception:
                    dictionary3 = dict()

                try:
                    dictionary0 = globaldict[nuts0]
                except Exception:
                    dictionary0 = dict()

                try:
                    dictionary1 = globaldict[nuts1]
                except Exception:
                    dictionary1 = dict()

                try:
                    dictionary2 = globaldict[nuts2]
                except Exception:
                    dictionary2 = dict()

                # data about this nuts
                try:
                    pop3 = dictionary3.get('population2019_nuts3','N/A')
                except Exception:
                    pop3 = -1
                try:
                    density = dictionary3.get('density2018_nuts3','N/A')
                except Exception:
                    density = -1
                try:
                    fertility = dictionary3.get('fertility2018_nuts3', 'N/A')
                except Exception:
                    fertility = -1
                try:
                    popchange = dictionary3.get('populationchange2018_nuts3', 'N/A')
                except Exception:
                    popchange = -1
                try:
                    womenratio = dictionary3.get('womenper100men2019_nuts3', 'N/A')
                except Exception:
                    womenration = -1
                try:
                    gdppps = dictionary3.get('gdpPps2017_nuts3', 'N/A')
                except Exception:
                    gdppps = -1
                try:
                    gva = dictionary3.get('gva2017basicprices_nuts3', 'N/A')
                except Exception:
                    gva = -1
                # data about containing nuts
                try:
                    pop2 = dictionary2.get('population2019', 'N/A')
                except Exception:
                    pop2 = -1
                try:
                    pop1 = dictionary1.get('population2019', 'N/A')
                except Exception:
                    pop1 = -1
                try:
                    pop0 = dictionary0.get('population2019','N/A')
                except Exception:
                    pop0 = -1

                ## NEW FIELDS
                try:
                    census_age_Y_LT15_2011_nuts3 = dictionary3.get('census_age_Y_LT15_2011_nuts3','N/A')
                except Exception:
                    census_age_Y_LT15_2011_nuts3 = -1
                try:
                    census_age_Y1529_2011_nuts3 = dictionary3.get('census_age_Y15-29_2011_nuts3','N/A')
                except Exception:
                    census_age_Y1529_2011_nuts3 = -1
                try:
                    census_age_Y3049_2011_nuts3 = dictionary3.get('census_age_Y30-49_2011_nuts3','N/A')
                except Exception:
                    census_age_Y3049_2011_nuts3 = -1
                try:
                    census_age_Y5064_2011_nuts3 = dictionary3.get('census_age_Y50-64_2011_nuts3','N/A')
                except Exception:
                    census_age_Y5064_2011_nuts3 = -1
                try:
                    census_age_Y6584_2011_nuts3 = dictionary3.get('census_age_Y65-84_2011_nuts3','N/A')
                except Exception:
                    census_age_Y6584_2011_nuts3 = -1
                try:
                    census_age_Y_GE85_2011_nuts3 = dictionary3.get('census_age_Y_GE85_2011_nuts3','N/A')
                except Exception:
                    census_age_Y_GE85_2011_nuts3 = -1
                try:
                    census_age_TOTAL_2011_nuts3 = dictionary3.get('census_age_TOTAL_2011_nuts3','N/A')
                except Exception:
                    census_age_TOTAL_2011_nuts3 = -1
                try:
                    tourism_establishments_2011_nuts3 = dictionary3.get('tourism_establishments_2011_nuts3','N/A')
                except Exception:
                    tourism_establishments_2011_nuts3 = -1
                try:
                    energy_cooling_degdays_2011_nuts3 = dictionary3.get('energy_cooling_degdays_2011_nuts3','N/A')
                except Exception:
                    energy_cooling_degdays_2011_nuts3 = -1
                try:
                    energy_heating_degdays_2011_nuts3 = dictionary3.get('energy_heating_degdays_2011_nuts3','N/A')
                except Exception:
                    energy_heating_degdays_2011_nuts3 = -1
                try:
                    crime_burglaries_2010_nuts3 = dictionary3.get('crime_burglaries_2010_nuts3','N/A')
                except Exception:
                    crime_burglaries_2010_nuts3 = -1

                # thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'
                thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}|{census_age_Y_LT15_2011_nuts3}|{census_age_Y1529_2011_nuts3}|{census_age_Y3049_2011_nuts3}|{census_age_Y5064_2011_nuts3}|{census_age_Y6584_2011_nuts3}|{census_age_Y_GE85_2011_nuts3}|{census_age_TOTAL_2011_nuts3}|{tourism_establishments_2011_nuts3}|{energy_cooling_degdays_2011_nuts3}|{energy_heating_degdays_2011_nuts3}|{crime_burglaries_2010_nuts3}\n'
            except Exception as e:
                # thisline = f'ISSUE > {code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR'
                thisline = f'ISSUE > {code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR'
                #print(thisline)
                logger.error('Failed : '+ str(e))

            csvfile.write(thisline)
        else:
            # Error - probably title row
            print("Warning: level does not exist for line " + str(line))

    fileHandle.close()
    csvfile.close()

def fixData(year, file_tsv, file_normalised_tsv, relations_filename):
    df = pd.read_csv(file_tsv, sep='|', header='infer')
    # df = df.replace('N/A',np.NaN)
    # df = df.replace('NONE',np.NaN)
    df['gdppps'] = pd.to_numeric(df['gdppps'], errors='coerce')
    df['gdppps'] = df['gdppps'].fillna(df['gdppps'].mean())
    df['gva'] = pd.to_numeric(df['gva'], errors='coerce')
    df['gva'] = df['gva'].fillna(df['gva'].mean())
    df['womenratio'] = pd.to_numeric(df['womenratio'], errors='coerce')
    df['womenratio'] = df['womenratio'].fillna(df['womenratio'].mean())
    df['pop2'] = pd.to_numeric(df['pop2'], errors='coerce')
    df['pop2'] = df['pop2'].fillna(df['pop2'].mean())
    df['pop1'] = pd.to_numeric(df['womenratio'], errors='coerce')
    df['pop1'] = df['pop1'].fillna(df['womenratio'].mean())

    # Note: DON'T NORMALISE THESE COLUMNS
    # code|level|name|nuts0|nuts1|nuts2|
    # NORMALISE THESE COLUMNS
    # pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva|medianage

    # Save non-normalised data
    df.to_csv(file_tsv, sep='|', index=False)

    #for columnname in ['pop3','pop2','pop1', 'pop0', 'density', 'fertility', 'popchange', 'womenratio', 'gdppps', 'gva', 'medianage']:
    for columnname in ['pop3','pop2','pop1', 'pop0', 'density', 'fertility', 'popchange', 'womenratio', 'gdppps', 'gva']:
        df[columnname] = pd.to_numeric(df[columnname], errors='coerce')
        x = df[[columnname]].values.astype(float)
        min_max_scaler = preprocessing.MinMaxScaler()
        x_scaled = min_max_scaler.fit_transform(x)
        df[columnname] = x_scaled

    # Save normalised data
    df.to_csv(file_normalised_tsv, sep='|', index=False)



# calculates the similarity according to a set of features between two areas
def similarity(code1, code2, fieldlist, curCALCSIM):


    # Create array for cosine distance
    arr1 = []
    arr2 = []

    # Get the data for the two NUTS entities 2021
    line1 = curCALCSIM.execute("SELECT * FROM nutsNORM WHERE code == :codeinput", {"codeinput": code1})
    row1 = curCALCSIM.fetchone()
    line2 = curCALCSIM.execute("SELECT * FROM nutsNORM WHERE code == :codeinput", {"codeinput": code2})
    row2 = curCALCSIM.fetchone()

    # check if you need mapped values
    # TODO this is the simple version with 1-2-1 mapping
    with open('data/nutsmap.json') as json_file:
        mapNuts = json.load(json_file)

    try:
        code1_mapped = mapNuts[code1]
    except Exception:
        code1_mapped = 'NONE'

    try:
        code2_mapped = mapNuts[code2]
    except Exception:
        code2_mapped = 'NONE'

    # print("Mapped " + code1 + " to " + code1_mapped)
    # print("Mapped " + code2 + " to " + code2_mapped)

    line1_mapped = curCALCSIM.execute("SELECT * FROM nutsNORM2016 WHERE code == :codeinput", {"codeinput": code1_mapped})
    row1_mapped = curCALCSIM.fetchone()
    line2_mapped = curCALCSIM.execute("SELECT * FROM nutsNORM2016 WHERE code == :codeinput", {"codeinput": code2_mapped})
    row2_mapped = curCALCSIM.fetchone()

    for feature in fieldlist:
            try:
                val1=float(row1[feature])
            except Exception:
                # check map
                try:
                    val1=float(row1_mapped[feature])
                except Exception:
                    # print("Exception for " + code1 + " in " + feature)
                    val1 = float(0.1)

            try:
                val2=float(row2[feature])
            except Exception:
                # check map
                try:
                    val2=float(row2_mapped[feature])
                except Exception:
                    # print("Exception for " + code2 + " in " + feature)
                    val2 = float(0.1)

            arr1.append(val1)
            arr2.append(val2)

    # Calculate cosine distance
    # with SCIPY
    result = 1 - spatial.distance.cosine(arr1, arr2)
    ## with NUMPY, if needed
    ## cos_sim = dot(arr1, arr2)/(norm(arr1)*norm(arr2))

    # print("Similarity: " + str(result))
    return result

def generateallsimilarities(db_file_name, fieldlist3, fieldlist2, fieldlist1, fieldlist0):

    # General connection for outer generateallsimilarities
    conn = sqlite3.connect(db_file_name)
    conn.row_factory = sqlite3.Row
    cur = conn.cursor()

    # Connection for similarity generation
    conCALCSIM = sqlite3.connect(db_file_name)
    conCALCSIM.row_factory = sqlite3.Row
    curCALCSIM = conCALCSIM.cursor()



    conWRITE = sqlite3.connect(db_file_name)
    conWRITE.isolation_level = None
    curWRITE = conWRITE.cursor()

    # General Idea
    # Loop over nutsrelations
    #     if level = 1, second loop through level = 1
    #     if level = 2, second loop through level = 2
    #     if level = 3, second loop through level = 3
    # For now, do only level 3, as similarity is only defined for level 3

    # NUTS 3
    all_nuts3_query = cur.execute("SELECT r1.code as code1, r2.code as code2 FROM relations r1 JOIN relations r2 WHERE  r1.level == 3 AND r2.level == 3 AND r1.code < r2.code ORDER BY r1.code, r2.code")
    all_nuts3 = cur.fetchall()
    curWRITE.execute("begin")
    try:
        for nuts in all_nuts3:
            code1 = nuts['code1']
            code2 = nuts['code2']
            simresult = similarity(code1, code2, fieldlist3, curCALCSIM)

            # Insert similarity into DB
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code1, code2, simresult))
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code2, code1, simresult))
            conWRITE.commit()
    except sqlite3.Error:
        print("failed insert!")
        c.execute("rollback")

    # NUTS 2
    all_nuts2_query = cur.execute("SELECT r1.code as code1, r2.code as code2 FROM relations r1 JOIN relations r2 WHERE r1.level == 2 AND r2.level == 2 AND r1.code < r2.code ORDER BY r1.code, r2.code")
    all_nuts2 = cur.fetchall()
    curWRITE.execute("begin")
    try:
        for nuts in all_nuts2:
            code1 = nuts['code1']
            code2 = nuts['code2']
            simresult = similarity(code1, code2, fieldlist2, curCALCSIM)

            # Insert similarity into DB
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code1, code2, simresult))
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code2, code1, simresult))
            conWRITE.commit()
    except sqlite3.Error:
        print("failed insert!")
        c.execute("rollback")

    # NUTS 1
    all_nuts1_query = cur.execute("SELECT r1.code as code1, r2.code as code2 FROM relations r1 JOIN relations r2 WHERE r1.level == 1 AND r2.level == 1 AND r1.code < r2.code ORDER BY r1.code, r2.code")
    all_nuts1 = cur.fetchall()
    curWRITE.execute("begin")
    try:
        for nuts in all_nuts1:
            code1 = nuts['code1']
            code2 = nuts['code2']
            simresult = similarity(code1, code2, fieldlist1, curCALCSIM)

            # Insert similarity into DB
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code1, code2, simresult))
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code2, code1, simresult))
            conWRITE.commit()
    except sqlite3.Error:
        print("failed insert!")
        c.execute("rollback")

    # NUTS 0
    all_nuts0_query = cur.execute("SELECT r1.code as code1, r2.code as code2 FROM relations r1 JOIN relations r2 WHERE r1.level == 0 AND r2.level == 0 AND r1.code < r2.code ORDER BY r1.code, r2.code")
    all_nuts0 = cur.fetchall()
    curWRITE.execute("begin")
    try:
        for nuts in all_nuts0:
            code1 = nuts['code1']
            code2 = nuts['code2']
            simresult = similarity(code1, code2, fieldlist0, curCALCSIM)

            # Insert similarity into DB
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code1, code2, simresult))
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code2, code1, simresult))
            conWRITE.commit()
    except sqlite3.Error:
        print("failed insert!")
        c.execute("rollback")


    curWRITE.close()
    conWRITE.close()
    curCALCSIM.close()
    conCALCSIM.close()
    cur.close()
    conn.close()

def similarity_calculate(db_file_name):


    # Field list for similarity formula
    # fieldlist3 = ['pop3','pop0','density','fertility','popchange','womenratio','gdppps','gva', 'census_age_TOTAL_2011_nuts3', 'census_age_Y1529_2011_nuts3', 'census_age_Y3049_2011_nuts3']
    fieldlist3 = ['pop3','pop0','density','fertility','popchange','womenratio','gdppps','gva']
    # fieldlist2 = ['pop0','density','fertility']
    fieldlist2 = ['pop0','density','fertility','popchange','womenratio','gdppps','gva']
    fieldlist1 = ['pop0','density','fertility']
    fieldlist0 = ['pop0','density']

    generateallsimilarities(db_file_name, fieldlist3, fieldlist2, fieldlist1, fieldlist0)


def dict_factory(cursor, row):
    d = {}
    for idx, col in enumerate(cursor.description):
        d[col[0]] = row[idx]
        
    
    return d
    

def fixInDb(db_file_name):

    # General connection, to use as look-up table for code->average 
    conn = sqlite3.connect(db_file_name)
    conn.row_factory = dict_factory
    cur = conn.cursor()
    
    # I - if pop3 is NULL or 'NONE' for nuts3, replace with average pop3 of each nuts3 within same nuts2; if n/a same nuts1; if n/a same nuts0
    # to clarify, this query is just at nuts3 level myquery = cur.execute("SELECT n1.code, n1.nuts2, t1.average FROM nuts n1 INNER JOIN (SELECT n2.nuts2, avg(n2.pop3) as average FROM nuts n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2 WHERE n1.level=3")
    
    find_higher_order_average_query = """SELECT n1.code, n1.pop3, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.pop3) as average3 FROM nuts n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.pop3) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.pop3) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.pop3 is NULL or n1.pop3 = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    

    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=3 and (pop3 = 'NONE' or pop3 is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 > 0:
            avgtouse = avg3
        elif avg2 > 0:
            avgtouse = avg2
        elif avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET pop3=? WHERE code=?", (avgtouse, code))
        conn.commit()


    # II - if density is NULL or NONE for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.density, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.density) as average3 FROM nuts n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.density) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.density) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.density is NULL or n1.density = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=3 and (density = 'NONE' or density is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET density=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # III - if density is NULL or NONE for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.density, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.density) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.density) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.density is NULL or n1.density = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=2 and (density = 'NONE' or density is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET density=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # IV - fertility is NULL or NONE for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.fertility, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.fertility) as average3 FROM nuts n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.fertility) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.fertility) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.fertility is NULL or n1.fertility = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=3 and (fertility = 'NONE' or fertility is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET fertility=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # V - fertility is NULL for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.fertility, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.fertility) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.fertility) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.fertility is NULL or n1.fertility = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=2 and (fertility = 'NONE' or fertility is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET fertility=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # VI - popchange is NULL or 'NONE' for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.womenratio, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.womenratio) as average3 FROM nuts n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.womenratio) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.womenratio) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.womenratio is NULL or n1.womenratio = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=3 and (womenratio = 'NONE' or womenratio is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET womenratio=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # VII - popchange is NULL or 'NONE' for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.popchange, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.popchange) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.popchange) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.popchange is NULL or n1.popchange = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=2 and (popchange = 'NONE' or popchange is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET popchange=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # VIII - womenratio is NULL or 'NONE' for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.popchange, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.popchange) as average3 FROM nuts n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.popchange) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.popchange) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.popchange is NULL or n1.popchange = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=3 and (popchange = 'NONE' or popchange is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET popchange=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # IX - womenratio for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.womenratio, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.womenratio) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.womenratio) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.womenratio is NULL or n1.womenratio = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=2 and (womenratio = 'NONE' or womenratio is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET womenratio=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # X - gva for nuts3
    find_higher_order_average_query = """SELECT n1.code, n1.gva, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.gva) as average3 FROM nuts n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.gva) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gva) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.gva is NULL or n1.gva = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=3 and (gva = 'NONE' or gva is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET gva=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XI - gva for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.gva, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.gva) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gva) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.gva is NULL or n1.gva = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=2 and (gva = 'NONE' or gva is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET gva=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XII - gdppps for nuts3
    find_higher_order_average_query = """SELECT n1.code, n1.gdppps, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.gdppps) as average3 FROM nuts n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.gdppps) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gdppps) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.gdppps is NULL or n1.gdppps = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=3 and (gdppps = 'NONE' or gdppps is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET gdppps=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XIII - gdppps for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.gdppps, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.gdppps) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gdppps) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.gdppps is NULL or n1.gdppps = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=2 and (gdppps = 'NONE' or gdppps is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET gdppps=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XIV - pop2 for NUTS2
    find_higher_order_average_query = """SELECT n1.code, n1.pop2, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.pop2) as average2 FROM nuts n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.pop2) as average1 FROM nuts n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.pop2 is NULL or n1.pop2 = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts WHERE level=2 and (pop2 = 'NONE' or pop2 is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts SET pop2=? WHERE code=?", (avgtouse, code))
        conn.commit()


    conn.close()

def fixInDbNorm(db_file_name):

    # General connection, to use as look-up table for code->average 
    conn = sqlite3.connect(db_file_name)
    conn.row_factory = dict_factory
    cur = conn.cursor()
    
    # I - if pop3 is NULL or 'NONE' for nuts3, replace with average pop3 of each nuts3 within same nuts2; if n/a same nuts1; if n/a same nuts0
    # to clarify, this query is just at nuts3 level myquery = cur.execute("SELECT n1.code, n1.nuts2, t1.average FROM nutsNORM n1 INNER JOIN (SELECT n2.nuts2, avg(n2.pop3) as average FROM nutsNORM n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2 WHERE n1.level=3")
    
    find_higher_order_average_query = """SELECT n1.code, n1.pop3, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.pop3) as average3 FROM nutsNORM n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.pop3) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.pop3) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.pop3 is NULL or n1.pop3 = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    

    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=3 and (pop3 = 'NONE' or pop3 is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 > 0:
            avgtouse = avg3
        elif avg2 > 0:
            avgtouse = avg2
        elif avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET pop3=? WHERE code=?", (avgtouse, code))
        conn.commit()


    # II - if density is NULL or NONE for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.density, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.density) as average3 FROM nutsNORM n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.density) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.density) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.density is NULL or n1.density = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=3 and (density = 'NONE' or density is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET density=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # III - if density is NULL or NONE for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.density, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.density) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.density) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.density is NULL or n1.density = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=2 and (density = 'NONE' or density is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET density=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # IV - fertility is NULL or NONE for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.fertility, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.fertility) as average3 FROM nutsNORM n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.fertility) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.fertility) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.fertility is NULL or n1.fertility = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=3 and (fertility = 'NONE' or fertility is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET fertility=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # V - fertility is NULL for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.fertility, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.fertility) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.fertility) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.fertility is NULL or n1.fertility = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=2 and (fertility = 'NONE' or fertility is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET fertility=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # VI - popchange is NULL or 'NONE' for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.womenratio, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.womenratio) as average3 FROM nutsNORM n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.womenratio) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.womenratio) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.womenratio is NULL or n1.womenratio = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=3 and (womenratio = 'NONE' or womenratio is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET womenratio=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # VII - popchange is NULL or 'NONE' for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.popchange, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.popchange) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.popchange) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.popchange is NULL or n1.popchange = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=2 and (popchange = 'NONE' or popchange is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET popchange=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # VIII - womenratio is NULL or 'NONE' for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.popchange, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.popchange) as average3 FROM nutsNORM n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.popchange) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.popchange) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.popchange is NULL or n1.popchange = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=3 and (popchange = 'NONE' or popchange is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET popchange=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # IX - womenratio for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.womenratio, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.womenratio) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.womenratio) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.womenratio is NULL or n1.womenratio = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=2 and (womenratio = 'NONE' or womenratio is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET womenratio=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # X - gva for nuts3
    find_higher_order_average_query = """SELECT n1.code, n1.gva, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.gva) as average3 FROM nutsNORM n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.gva) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gva) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.gva is NULL or n1.gva = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=3 and (gva = 'NONE' or gva is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET gva=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XI - gva for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.gva, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.gva) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gva) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.gva is NULL or n1.gva = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=2 and (gva = 'NONE' or gva is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET gva=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XII - gdppps for nuts3
    find_higher_order_average_query = """SELECT n1.code, n1.gdppps, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.gdppps) as average3 FROM nutsNORM n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.gdppps) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gdppps) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.gdppps is NULL or n1.gdppps = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=3 and (gdppps = 'NONE' or gdppps is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET gdppps=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XIII - gdppps for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.gdppps, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.gdppps) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gdppps) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.gdppps is NULL or n1.gdppps = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=2 and (gdppps = 'NONE' or gdppps is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET gdppps=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XIV - pop2 for NUTS2
    find_higher_order_average_query = """SELECT n1.code, n1.pop2, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.pop2) as average2 FROM nutsNORM n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.pop2) as average1 FROM nutsNORM n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.pop2 is NULL or n1.pop2 = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM WHERE level=2 and (pop2 = 'NONE' or pop2 is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM SET pop2=? WHERE code=?", (avgtouse, code))
        conn.commit()


    conn.close()

def fixInDb2016(db_file_name):

    # General connection, to use as look-up table for code->average 
    conn = sqlite3.connect(db_file_name)
    conn.row_factory = dict_factory
    cur = conn.cursor()
    
    # I - if pop3 is NULL or 'NONE' for nuts3, replace with average pop3 of each nuts3 within same nuts2; if n/a same nuts1; if n/a same nuts0
    # to clarify, this query is just at nuts3 level myquery = cur.execute("SELECT n1.code, n1.nuts2, t1.average FROM nuts2016 n1 INNER JOIN (SELECT n2.nuts2, avg(n2.pop3) as average FROM nuts2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2 WHERE n1.level=3")
    
    find_higher_order_average_query = """SELECT n1.code, n1.pop3, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.pop3) as average3 FROM nuts2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.pop3) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.pop3) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.pop3 is NULL or n1.pop3 = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    

    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=3 and (pop3 = 'NONE' or pop3 is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 > 0:
            avgtouse = avg3
        elif avg2 > 0:
            avgtouse = avg2
        elif avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET pop3=? WHERE code=?", (avgtouse, code))
        conn.commit()


    # II - if density is NULL or NONE for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.density, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.density) as average3 FROM nuts2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.density) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.density) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.density is NULL or n1.density = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=3 and (density = 'NONE' or density is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET density=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # III - if density is NULL or NONE for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.density, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.density) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.density) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.density is NULL or n1.density = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=2 and (density = 'NONE' or density is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET density=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # IV - fertility is NULL or NONE for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.fertility, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.fertility) as average3 FROM nuts2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.fertility) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.fertility) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.fertility is NULL or n1.fertility = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=3 and (fertility = 'NONE' or fertility is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET fertility=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # V - fertility is NULL for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.fertility, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.fertility) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.fertility) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.fertility is NULL or n1.fertility = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=2 and (fertility = 'NONE' or fertility is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET fertility=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # VI - popchange is NULL or 'NONE' for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.womenratio, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.womenratio) as average3 FROM nuts2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.womenratio) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.womenratio) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.womenratio is NULL or n1.womenratio = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=3 and (womenratio = 'NONE' or womenratio is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET womenratio=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # VII - popchange is NULL or 'NONE' for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.popchange, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.popchange) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.popchange) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.popchange is NULL or n1.popchange = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=2 and (popchange = 'NONE' or popchange is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET popchange=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # VIII - womenratio is NULL or 'NONE' for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.popchange, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.popchange) as average3 FROM nuts2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.popchange) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.popchange) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.popchange is NULL or n1.popchange = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=3 and (popchange = 'NONE' or popchange is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET popchange=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # IX - womenratio for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.womenratio, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.womenratio) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.womenratio) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.womenratio is NULL or n1.womenratio = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=2 and (womenratio = 'NONE' or womenratio is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET womenratio=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # X - gva for nuts3
    find_higher_order_average_query = """SELECT n1.code, n1.gva, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.gva) as average3 FROM nuts2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.gva) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gva) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.gva is NULL or n1.gva = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=3 and (gva = 'NONE' or gva is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET gva=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XI - gva for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.gva, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.gva) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gva) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.gva is NULL or n1.gva = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=2 and (gva = 'NONE' or gva is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET gva=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XII - gdppps for nuts3
    find_higher_order_average_query = """SELECT n1.code, n1.gdppps, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.gdppps) as average3 FROM nuts2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.gdppps) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gdppps) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.gdppps is NULL or n1.gdppps = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=3 and (gdppps = 'NONE' or gdppps is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET gdppps=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XIII - gdppps for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.gdppps, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.gdppps) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gdppps) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.gdppps is NULL or n1.gdppps = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=2 and (gdppps = 'NONE' or gdppps is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET gdppps=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XIV - pop2 for NUTS2
    find_higher_order_average_query = """SELECT n1.code, n1.pop2, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nuts2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.pop2) as average2 FROM nuts2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.pop2) as average1 FROM nuts2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.pop2 is NULL or n1.pop2 = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nuts2016 WHERE level=2 and (pop2 = 'NONE' or pop2 is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nuts2016 SET pop2=? WHERE code=?", (avgtouse, code))
        conn.commit()


    conn.close()

def fixInDbNorm2016(db_file_name):

    # General connection, to use as look-up table for code->average 
    conn = sqlite3.connect(db_file_name)
    conn.row_factory = dict_factory
    cur = conn.cursor()
    
    # I - if pop3 is NULL or 'NONE' for nuts3, replace with average pop3 of each nuts3 within same nuts2; if n/a same nuts1; if n/a same nuts0
    # to clarify, this query is just at nuts3 level myquery = cur.execute("SELECT n1.code, n1.nuts2, t1.average FROM nutsNORM2016 n1 INNER JOIN (SELECT n2.nuts2, avg(n2.pop3) as average FROM nutsNORM2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2 WHERE n1.level=3")
    
    find_higher_order_average_query = """SELECT n1.code, n1.pop3, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.pop3) as average3 FROM nutsNORM2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.pop3) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.pop3) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.pop3 is NULL or n1.pop3 = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    

    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=3 and (pop3 = 'NONE' or pop3 is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 > 0:
            avgtouse = avg3
        elif avg2 > 0:
            avgtouse = avg2
        elif avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET pop3=? WHERE code=?", (avgtouse, code))
        conn.commit()


    # II - if density is NULL or NONE for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.density, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.density) as average3 FROM nutsNORM2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.density) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.density) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.density is NULL or n1.density = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=3 and (density = 'NONE' or density is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET density=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # III - if density is NULL or NONE for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.density, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.density) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.density) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.density is NULL or n1.density = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=2 and (density = 'NONE' or density is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET density=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # IV - fertility is NULL or NONE for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.fertility, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.fertility) as average3 FROM nutsNORM2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.fertility) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.fertility) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.fertility is NULL or n1.fertility = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=3 and (fertility = 'NONE' or fertility is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET fertility=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # V - fertility is NULL for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.fertility, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.fertility) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.fertility) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.fertility is NULL or n1.fertility = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=2 and (fertility = 'NONE' or fertility is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET fertility=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # VI - popchange is NULL or 'NONE' for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.womenratio, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.womenratio) as average3 FROM nutsNORM2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.womenratio) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.womenratio) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.womenratio is NULL or n1.womenratio = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=3 and (womenratio = 'NONE' or womenratio is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET womenratio=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # VII - popchange is NULL or 'NONE' for nuts2, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.popchange, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.popchange) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.popchange) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.popchange is NULL or n1.popchange = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=2 and (popchange = 'NONE' or popchange is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET popchange=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # VIII - womenratio is NULL or 'NONE' for nuts3, replace with...
    find_higher_order_average_query = """SELECT n1.code, n1.popchange, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.popchange) as average3 FROM nutsNORM2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.popchange) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.popchange) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.popchange is NULL or n1.popchange = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=3 and (popchange = 'NONE' or popchange is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET popchange=? WHERE code=?", (avgtouse, code))
        conn.commit()
    
    # IX - womenratio for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.womenratio, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.womenratio) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.womenratio) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.womenratio is NULL or n1.womenratio = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=2 and (womenratio = 'NONE' or womenratio is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET womenratio=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # X - gva for nuts3
    find_higher_order_average_query = """SELECT n1.code, n1.gva, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.gva) as average3 FROM nutsNORM2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.gva) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gva) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.gva is NULL or n1.gva = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=3 and (gva = 'NONE' or gva is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET gva=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XI - gva for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.gva, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.gva) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gva) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.gva is NULL or n1.gva = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=2 and (gva = 'NONE' or gva is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET gva=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XII - gdppps for nuts3
    find_higher_order_average_query = """SELECT n1.code, n1.gdppps, n1.nuts2, t1.average3, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n2.nuts2, avg(n2.gdppps) as average3 FROM nutsNORM2016 n2 group by n2.nuts2 ) as t1 ON n1.nuts2 = t1.nuts2
    INNER JOIN (SELECT n3.nuts1, avg(n3.gdppps) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gdppps) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=3 and (n1.gdppps is NULL or n1.gdppps = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=3 and (gdppps = 'NONE' or gdppps is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg3 = mydatatable[code]['average3']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg3 is not None and avg3 > 0:
            avgtouse = avg3
        elif avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET gdppps=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XIII - gdppps for nuts2
    find_higher_order_average_query = """SELECT n1.code, n1.gdppps, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.gdppps) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.gdppps) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.gdppps is NULL or n1.gdppps = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=2 and (gdppps = 'NONE' or gdppps is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET gdppps=? WHERE code=?", (avgtouse, code))
        conn.commit()

    # XIV - pop2 for NUTS2
    find_higher_order_average_query = """SELECT n1.code, n1.pop2, n1.nuts2, n1.nuts1, t2.average2, n1.nuts0, t3.average1 FROM nutsNORM2016 n1 
    INNER JOIN (SELECT n3.nuts1, avg(n3.pop2) as average2 FROM nutsNORM2016 n3 group by n3.nuts1 ) as t2 ON n1.nuts1 = t2.nuts1
    INNER JOIN (SELECT n4.nuts0, avg(n4.pop2) as average1 FROM nutsNORM2016 n4 group by n4.nuts0 ) as t3 ON n1.nuts0 = t3.nuts0
    WHERE n1.level=2 and (n1.pop2 is NULL or n1.pop2 = 'NONE')"""
    
    # build a lookup table    
    cur.execute(find_higher_order_average_query)
    mydatatable_temp = cur.fetchall()
    mydatatable = {}
    for elem in mydatatable_temp:
        mydatatable[elem['code']] = elem
    
    # find the NONE/NULL
    query="SELECT code FROM nutsNORM2016 WHERE level=2 and (pop2 = 'NONE' or pop2 is NULL);"
    cur = conn.cursor()
    cur.execute(query)

    curW = conn.cursor()
    for row in cur:
        code = row['code']
        avg2 = mydatatable[code]['average2']
        avg1 = mydatatable[code]['average1']

        avgtouse = -1

        if avg2 is not None and avg2 > 0:
            avgtouse = avg2
        elif avg1 is not None and avg1 > 0:
            avgtouse = avg1
        else:
            avgtouse = 999999999
        
        curW.execute("UPDATE nutsNORM2016 SET pop2=? WHERE code=?", (avgtouse, code))
        conn.commit()


    conn.close()

def main():

    # # STEP 1a: From shapefile extract the CSV master nuts0123-$year.csv
    print("Extracting nuts0123-2021.csv from shapefile")
    file2021 = 'NUTS_RG_20M_2021_3035.shp/NUTS_RG_20M_2021_3035.shp'
    file2016 = 'NUTS_RG_20M_2016_3035.shp/NUTS_RG_20M_2016_3035.shp'
    print("Extracting nuts0123-2021.csv from shapefile\n")
    shapefileToCSVMaster(file2021, 'data/nuts0123-2021.csv')
    print("Extracting nuts0123-2016.csv from shapefile\n")
    shapefileToCSVMaster(file2016, 'data/nuts0123-2016.csv')
    #
    # # STEP 1b: Generate GeoJson nuts3 to display the "similarity at a glance" map
    print("Generating nuts3.geojson\n")
    generate_geojson(file2021, 'data/nuts3.geojson', 3)

    # # STEP 1c: Generate GeoJson nuts2 to display the "similarity at a glance" map
    print("Generating nuts2.geojson\n")
    generate_geojson(file2021, 'data/nuts2.geojson', 2)

    # STEP 2: Link NUTS of all levels to generate nutsrelations-$year.psv
    print("Generating nutsrelations-2021.psv\n")
    parseAndLinkNUTS(2021, 'data/nuts0123-2021.csv', 'data/nutsrelations-2021.psv')
    print("Generating nutsrelations-2016.psv\n")
    parseAndLinkNUTS(2016, 'data/nuts0123-2016.csv', 'data/nutsrelations-2016.psv')

    # STEP 3: Download data via API to globaldict.json
    print("Downloading Eurostat data into globaldict.json\n")
    download('data/globaldict.json')

    # STEP 4: Create basic data Files - basicdata-$year.tsv and basicdataNORM-$year.tsv
    print("Creating basicdata-2021.tsv and basicdataNORM-2021.tsv\n")
    createBasicDataFiles(2021, 'data/globaldict.json', 'data/basicdata-2021.tsv', 'data/basicdataNORM-2021.tsv', 'data/nutsrelations-2021.psv')
    print("Creating basicdata-2021.tsv and basicdataNORM-2016.tsv\n")
    createBasicDataFiles(2016, 'data/globaldict.json', 'data/basicdata-2016.tsv', 'data/basicdataNORM-2016.tsv', 'data/nutsrelations-2016.psv')

    # STEP 5: Create and populate DB
    print("Creating nuts.db\n")
    createDB('data/nuts.db', 'data/basicdata-2021.tsv', 'data/basicdataNORM-2021.tsv', 'data/basicdata-2016.tsv', 'data/basicdataNORM-2016.tsv', 'data/nutsrelations-2021.psv', 'data/nutsrelations-2016.psv', 'data/NUTS2021-extra.csv')

    # STEP 6: Calculate similarity
    print("Calculating similarity\n")
    similarity_calculate('data/nuts.db')

    # STEP 7: Generate select
    print("Generating select.html\n")
    generate_select_dropdown('data/nuts.db','data/select-nuts3.html')
    generate_select_dropdown_with_nuts2('data/nuts.db','data/select-nuts2-nuts3.html')
    #
    print("All files have been generated in data/.\n")
    print("Move nuts.db, nuts3.geojson to web/data.\n")
    print("The contents of the <select> for NUTS selection and autocomplete are in data/select.html.\n")
    

if __name__ == "__main__":
    # main()
    fixInDb('data/nuts.db')
    fixInDbNorm('data/nuts.db')
    fixInDb2016('data/nuts.db')
    fixInDbNorm2016('data/nuts.db')