
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
    output_file='nuts3list-'+str(year)+'.csv'
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


def generate_select_dropdown():
    pass

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
    # to file, do this to get proper JSON
    app_json = json.dumps(globaldict, indent=4)
    globaldictfile = open(file_json, "w")
    globaldictfile.write(app_json)
    globaldictfile.close()

def download(file_json):
    global globaldict
    globaldict = dict()
    initData(file_json)

def generate_geojson(shp_file, json_file):
    # Read in data
    gdf = gpd.read_file(shp_file)

    # Filter out any NUTS area that isn't level 3
    gdf.drop(gdf[gdf.LEVL_CODE != 3].index, inplace = True)

    # Reproject to Lat/Long: http://epsg.io/4326
    gdf_4326 = gdf.to_crs(epsg='4326')

    # reduce decimals
    simpledec = re.compile(r"\d*\.\d+")
    gdf_4326.geometry = gdf_4326.geometry.apply(lambda x: loads(re.sub(simpledec, mround, x.wkt)))
    gdf_simplified = gdf_4326.copy()
    gdf_simplified["geometry"] = gdf_4326.geometry.simplify(tolerance=5000/43200,preserve_topology=True)

    # Write to file
    gdf_simplified.to_file(json_file, driver="GeoJSON")

#
# def calculate_centroids():
#     # GeoDataFrame creation
#     file = 'NUTS_RG_20M_2021_3035.shp/NUTS_RG_20M_2021_3035.shp'
#     poly = gpd.read_file(file)
#     # copy poly to new GeoDataFrame
#     points = poly.copy()
#
#     # change the geometry
#     points.geometry = points['geometry'].centroid
#     points.to_crs(epsg=4326, inplace=True)
#     # same crs #points.crs =poly.crs
#     # print(points['geometry'])
#     #print(points.head())
#     print("nuts_id|nuts_name|longitude|latitude|level")
#     for index, row in points.iterrows():
#         nutsid = row['NUTS_ID']
#         name = row['NUTS_NAME']
#         level = row['LEVL_CODE']
#         centroid_lat = row['geometry'].x
#         centroid_lon = row['geometry'].y
#         print(nutsid + "|" + name + "|" + str(centroid_lat) + "|" + str(centroid_lon) + "|" + str(level))
#
#

def createCSV(year, file_tsv, file_normalised_tsv, relations_filename):

    csvfile = open(file_tsv, "w")

    global globaldict
    #thisline=f'code|level|name|nuts0|nuts1|nuts2|pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva|medianage\n'
    thisline=f'code|level|name|nuts0|nuts1|nuts2|pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva\n'
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


                thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'

            except Exception:
                thisline = f'{code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR\n'
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

                thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'


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

                thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'

            except Exception as e:
                thisline = f'{code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR\n'
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
                #thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}|{medianage}\n'
                thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'
            except Exception as e:
                thisline = f'ISSUE > {code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR'
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

    # TODO this is wrong - needs fixing in createCSV because population should be an average of the container
    df['pop2'] = pd.to_numeric(df['pop2'], errors='coerce')
    df['pop2'] = df['pop2'].fillna(df['womenratio'].mean())
    df['pop1'] = pd.to_numeric(df['womenratio'], errors='coerce')
    df['pop1'] = df['pop1'].fillna(df['womenratio'].mean())

    # DON'T NORMALISE THESE COLUMNS
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

def createBasicDataFiles(year, globaldict_file, file_tsv, file_normalised_tsv, relations_filename):
    with open(globaldict_file, "r") as read_file: globaldict = json.load(read_file)
    createCSV(year, file_tsv, file_normalised_tsv, relations_filename)
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
        create_sql1 = "create table nuts (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
        create_sql2 = "create table nutsNORM (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
        create_sql3 = "create table nuts2016 (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
        create_sql4 = "create table nutsNORM2016 (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
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

        basicdata2021 = pd.read_csv(nuts_file, delimiter='|')
        basicdata2021.to_sql('nuts', conn, if_exists='replace', index = False)

        basicdata2021norm = pd.read_csv(nutsNORM_file, delimiter='|')
        basicdata2021norm.to_sql('nutsNORM', conn, if_exists='replace', index = False)

        basicdata2016 = pd.read_csv(nuts2016_file, delimiter='|')
        basicdata2016.to_sql('nuts2016', conn, if_exists='replace', index = False)

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

# calculates the similarity according to a set of features between two areas
def similarity(code1, code2, fieldlist):

    global curCALCSIM, conCALCSIM

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
    with open('nutsmap.json') as json_file:
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

def generateallsimilarities(conn, cur, fieldlist3, fieldlist2, fieldlist1, fieldlist0):


    conWRITE = sqlite3.connect('nuts.db')
    conWRITE.isolation_level = None
    curWRITE = conWRITE.cursor()

    # General Idea
    # Loop over nutsrelations
    #     if level = 1, second loop through level = 1
    #     if level = 2, second loop through level = 2
    #     if level = 3, second loop through level = 3
    # For now, do only level 3, as similarity is only defined for level 3

    # NUTS 3
    all_nuts3_query = cur.execute("SELECT r1.code as code1, r2.code as code2 FROM relations r1 JOIN relations r2 WHERE r1.level == 3 AND r2.level == 3 AND r1.code < r2.code ORDER BY r1.code, r2.code")
    all_nuts3 = cur.fetchall()
    curWRITE.execute("begin")
    try:
        for nuts in all_nuts3:
            code1 = nuts['code1']
            code2 = nuts['code2']
            simresult = similarity(code1, code2, fieldlist3)

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
            simresult = similarity(code1, code2, fieldlist2)

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
            simresult = similarity(code1, code2, fieldlist1)

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
            simresult = similarity(code1, code2, fieldlist0)

            # Insert similarity into DB
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code1, code2, simresult))
            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code2, code1, simresult))
            conWRITE.commit()
    except sqlite3.Error:
        print("failed insert!")
        c.execute("rollback")


    curWRITE.close()
    conWRITE.close()

def similarity_calculate(db_file_name):
    # General connection for outer generateallsimilarities
    conn = sqlite3.connect('nuts.db')
    conn.row_factory = sqlite3.Row
    cur = conn.cursor()

    # Connection for similarity generation
    conCALCSIM = sqlite3.connect('nuts.db')
    conCALCSIM.row_factory = sqlite3.Row
    curCALCSIM = conCALCSIM.cursor()

    # Field list for similarity formula
    fieldlist3 = ['pop3','pop0','density','fertility','popchange','womenratio','gdppps','gva']
    fieldlist2 = ['pop0','density','fertility']
    fieldlist1 = ['pop0','density','fertility']
    fieldlist0 = ['pop0','density']

    generateallsimilarities(conn, cur, fieldlist3, fieldlist2, fieldlist1, fieldlist0)
    # TODO to check new areas -> start with this
    #print(similarity('BE32B','HR064',fieldlist3))
    #print(similarity('BG34','DE25',fieldlist2))
    #print(similarity('BG3','DE2',fieldlist1))
    #print(similarity('BG','DE',fieldlist0))

    curCALCSIM.close()
    conCALCSIM.close()
    cur.close()
    conn.close()

def main():

    # STEP 1a: From shapefile extract the CSV master nuts0123-$year.csv
    file2021 = 'NUTS_RG_20M_2021_3035.shp/NUTS_RG_20M_2021_3035.shp'
    file2016 = 'NUTS_RG_20M_2016_3035.shp/NUTS_RG_20M_2016_3035.shp'
    shapefileToCSVMaster(file2021, 'data/nuts0123-2021.csv')
    shapefileToCSVMaster(file2016, 'data/nuts0123-2016.csv')

    # STEP 1b: Generate GeoJson to display the "similarity at a glance" map
    #TODO generate_geojson(file, 'nuts3-TESTING.geojson')

    # STEP 2: Link NUTS of all levels to generate nutsrelations-$year.psv
    parseAndLinkNUTS(2021, 'data/nuts0123-2021.csv', 'data/nutsrelations-2021.psv')
    parseAndLinkNUTS(2016, 'data/nuts0123-2016.csv', 'data/nutsrelations-2016.psv')

    # STEP 3: Download data via API to globaldict.json
    download('data/globaldict.json')

    # STEP 4: Create basic data Files - basicdata-$year.tsv and basicdataNORM-$year.tsv
    createBasicDataFiles(2021, 'data/globaldict.json', 'data/basicdata-2021.tsv', 'data/basicdataNORM-2021.tsv', 'data/nutsrelations-2021.psv')
    createBasicDataFiles(2016, 'data/globaldict.json', 'data/basicdata-2016.tsv', 'data/basicdataNORM-2016.tsv', 'data/nutsrelations-2016.psv')

    # STEP 5: Create and populate DB
    createDB('data/nuts.db', 'data/basicdata-2021.tsv', 'data/basicdataNORM-2021.tsv', 'data/basicdata-2016.tsv', 'data/basicdataNORM-2016.tsv', 'data/nutsrelations-2021.psv', 'data/nutsrelations-2016.psv', 'data/NUTS2021-extra.csv')

    # STEP 6: Calculate similarity
    # similarity_calculate('nuts.db')

    # TODO
    # generate_select_dropdown() for autocomplete
    # TODO print instructions on which files to move; QGIS ATLAS Generation

if __name__ == "__main__":
    main()
