import urllib.request, json
import time
import csv
import sys

from scipy import spatial
from numpy import dot
from numpy.linalg import norm

import pandas as pd
import numpy as np
from sklearn import preprocessing

import logger

# creates csv from globaldictionary and list of nuts
def createCSV(year):

    filename="basicdata-" + str(year) + ".tsv"
    csvfile = open(filename, "w")

    global globaldict
    #thisline=f'code|level|name|nuts0|nuts1|nuts2|pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva|medianage\n'
    thisline=f'code|level|name|nuts0|nuts1|nuts2|pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva\n'
    csvfile.write(thisline)
    relationsfilename = "nutsrelations-" + str(year) + ".psv"
    fileHandle = open(relationsfilename, 'r')

    for line in fileHandle:

        fields = line.split('|')

        # RS|REPUBLIKA SRBIJA /РЕПУБЛИКА СРБИЈА|0|RS|NUTS1|NUTS2|NUTS3
        code=fields[0]
        name=fields[1]
        level=fields[2]
        nuts0=fields[3]
        nuts1=fields[4]
        nuts2=fields[5]

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
                print(thisline)
                logger.error('Failed : '+ str(e))

            csvfile.write(thisline)
            print(thisline)
            print(dictionary0)
            print(pop1)

        elif (level == "1"):
            pass
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
                print(thisline)
                logger.error('Failed : '+ str(e))

            csvfile.write(thisline)

        elif (level == "2"):
            pass
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
                print(thisline)
                logger.error('Failed : '+ str(e))

            csvfile.write(thisline)

        elif (level=="3"):
            pass
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
                print(thisline)
                logger.error('Failed : '+ str(e))

            csvfile.write(thisline)
        else:
            # Error - probably title row
            print("Level does not exist for line" + str(line))

    fileHandle.close()
    csvfile.close()


def fixData(year):
    # data fixes
    filename = "basicdata-" + str(year) + ".tsv"
    df = pd.read_csv(filename, sep='|', header='infer')
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
    df.to_csv(filename, sep='|', index=False)


    #for columnname in ['pop3','pop2','pop1', 'pop0', 'density', 'fertility', 'popchange', 'womenratio', 'gdppps', 'gva', 'medianage']:
    for columnname in ['pop3','pop2','pop1', 'pop0', 'density', 'fertility', 'popchange', 'womenratio', 'gdppps', 'gva']:
        df[columnname] = pd.to_numeric(df[columnname], errors='coerce')
        x = df[[columnname]].values.astype(float)
        min_max_scaler = preprocessing.MinMaxScaler()
        x_scaled = min_max_scaler.fit_transform(x)
        df[columnname] = x_scaled

    # Save normalised data
    normfilename = "basicdataNORM-" + str(year) + ".tsv"
    df.to_csv(normfilename, sep='|', index=False)

    #x.to_csv('test.csv')


year = sys.argv[1]
with open("globaldict.json", "r") as read_file: globaldict = json.load(read_file)
createCSV(year)
fixData(year)
