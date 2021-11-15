import urllib.request, json
import time
import csv


from scipy import spatial
from numpy import dot
from numpy.linalg import norm



import pandas as pd
import numpy as np
from sklearn import preprocessing


# creates csv from globaldictionary and list of nuts
def createCSV():

    csvfile = open("basicdata.tsv", "w")
    global globaldict
    #thisline=f'code|level|name|nuts0|nuts1|nuts2|pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva|medianage\n'
    thisline=f'code|level|name|nuts0|nuts1|nuts2|pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva\n'
    csvfile.write(thisline)
    fileHandle = open('nutsrelations.psv', 'r')

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
            pass
            try:
                # get dictionaries for this area and its ancestors
                dictionary0 = globaldict[code]

                # data about this nuts
                pop3 = ""
                pop2 = ""
                pop1 = ""
                pop0 = dictionary0.get('population2019','N/A')
                density = dictionary0.get('density2018_nuts3','N/A')
                fertility = dictionary0.get('fertility2018_nuts3', 'N/A')
                popchange = dictionary0.get('populationchange2018_nuts3', 'N/A')
                womenratio = dictionary0.get('womenper100men2019_nuts3', 'N/A')
                gdppps = dictionary0.get('gdpPps2017_nuts3', 'N/A')
                gva = dictionary0.get('gva2017basicprices_nuts3', 'N/A')
                #medianage = dictionary0.get('medianage2019_nuts3', 'N/A')

                # data about containing nuts - no container nuts

                #thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}|{medianage}\n'
                #csvfile.write(thisline)

            except Exception:
                # DO SOMETHING ABOIUT MISSING DATA
                thisline = f'{code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR\n'
                csvfile.write(thisline)

        elif (level == "1"):

            pass

            try:
                # get dictionaries for this area and its ancestors
                dictionary0 = globaldict[nuts0]
                dictionary1 = globaldict[code]




                # data about this nuts
                pop3 = ""
                pop2 = ""
                pop1 = dictionary1.get('population2019_nuts3','N/A')
                density = dictionary1.get('density2018_nuts3','N/A')
                fertility = dictionary1.get('fertility2018_nuts3', 'N/A')
                popchange = dictionary1.get('populationchange2018_nuts3', 'N/A')
                womenratio = dictionary1.get('womenper100men2019_nuts3', 'N/A')
                gdppps = dictionary1.get('gdpPps2017_nuts3', 'N/A')
                gva = dictionary1.get('gva2017basicprices_nuts3', 'N/A')
                #medianage = dictionary1.get('medianage2019_nuts3', 'N/A')

                # data about containing nuts
                pop0 = dictionary0.get('population2019','N/A')

                #thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}|{medianage}\n'
                #csvfile.write(thisline)

            except Exception:
                # DO SOMETHING ABOIUT MISSING DATA
                thisline = f'{code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR\n'
                csvfile.write(thisline)

        elif (level == "2"):
            pass
            try:
                # get dictionaries for this area and its ancestors
                dictionary0 = globaldict[nuts0]
                dictionary1 = globaldict[nuts1]
                dictionary2 = globaldict[code]




                # data about this nuts
                pop3 = ""
                pop2 = dictionary2.get('population2019_nuts3','N/A')
                density = dictionary2.get('density2018_nuts3','N/A')
                fertility = dictionary2.get('fertility2018_nuts3', 'N/A')
                popchange = dictionary2.get('populationchange2018_nuts3', 'N/A')
                womenratio = dictionary2.get('womenper100men2019_nuts3', 'N/A')
                gdppps = dictionary2.get('gdpPps2017_nuts3', 'N/A')
                gva = dictionary2.get('gva2017basicprices_nuts3', 'N/A')



                #medianage = dictionary2.get('medianage2019_nuts3', 'N/A')

                # data about containing nuts
                pop1 = dictionary1.get('population2019', 'N/A')
                pop0 = dictionary0.get('population2019','N/A')

                #thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}|{medianage}\n'
                #csvfile.write(thisline)

            except Exception:
                # DO SOMETHING ABOIUT MISSING DATA
                thisline = f'{code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR\n'
                csvfile.write(thisline)

        elif (level=="3"):
            try:
                # get dictionaries for this area and its ancestors
                dictionary3 = globaldict[code]
                dictionary0 = globaldict[nuts0]
                dictionary1 = globaldict[nuts1]
                dictionary2 = globaldict[nuts2]

                # data about this nuts
                pop3 = dictionary3.get('population2019_nuts3','N/A')
                density = dictionary3.get('density2018_nuts3','N/A')
                fertility = dictionary3.get('fertility2018_nuts3', 'N/A')
                popchange = dictionary3.get('populationchange2018_nuts3', 'N/A')
                womenratio = dictionary3.get('womenper100men2019_nuts3', 'N/A')
                gdppps = dictionary3.get('gdpPps2017_nuts3', 'N/A')
                gva = dictionary3.get('gva2017basicprices_nuts3', 'N/A')
                #medianage = dictionary3.get('medianage2019_nuts3', 'N/A')


                # data about containing nuts
                pop2 = dictionary2.get('population2019', 'N/A')
                pop1 = dictionary1.get('population2019', 'N/A')
                pop0 = dictionary0.get('population2019','N/A')

                #thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}|{medianage}\n'
                thisline = f'{code}|{level}|"{name}"|{nuts0}|{nuts1}|{nuts2}|{pop3}|{pop2}|{pop1}|{pop0}|{density}|{fertility}|{popchange}|{womenratio}|{gdppps}|{gva}\n'
                csvfile.write(thisline)

            except Exception:
                # DO SOMETHING ABOIUT MISSING DATA
                thisline = f'{code}|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR|ERROR\n'
                print(thisline)
                # csvfile.write(thisline)
        else:
            # Error?
            print("Level does not exist")


    fileHandle.close()
    csvfile.close()

def getOrCalculate(valuename, dictionary, dictionary3, dictionary2, dictionary1, dictionary0, method):
     # try and get it from level-3 dictionary

    try:
         val = dictionary[valuename]
         return val
    except Exception:
        if (method=='globalmean'):
            # calculate average from entire column
            df[valuename] = pd.to_numeric(df[valuename], errors='coerce')
            return df[valuename].mean()
        elif (method=='copy'):
            pass
        else:
            print("in else")
            pass


def fixData():
    # data fixes
    df = pd.read_csv('basicdata.tsv', sep='|', header='infer')
    # df = df.replace('N/A',np.NaN)
    # df = df.replace('NONE',np.NaN)
    df['gdppps'] = pd.to_numeric(df['gdppps'], errors='coerce')
    df['gdppps'] = df['gdppps'].fillna(df['gdppps'].mean())
    df['gva'] = pd.to_numeric(df['gva'], errors='coerce')
    df['gva'] = df['gva'].fillna(df['gva'].mean())
    #df['medianage'] = pd.to_numeric(df['medianage'], errors='coerce')
    #df['medianage'] = df['medianage'].fillna(df['medianage'].mean())

    df['womenratio'] = pd.to_numeric(df['womenratio'], errors='coerce')
    df['womenratio'] = df['womenratio'].fillna(df['womenratio'].mean())

    # TODO this is wrong - needs fixing in createCSV because population should be an average of the container
    df['pop2'] = pd.to_numeric(df['pop2'], errors='coerce')
    df['pop2'] = df['pop2'].fillna(df['womenratio'].mean())
    df['pop1'] = pd.to_numeric(df['womenratio'], errors='coerce')
    df['pop1'] = df['womenratio'].fillna(df['womenratio'].mean())

    # DON'T NORMALISE THESE COLUMNS
    # code|level|name|nuts0|nuts1|nuts2|
    # NORMALISE THESE COLUMNS
    # pop3|pop2|pop1|pop0|density|fertility|popchange|womenratio|gdppps|gva|medianage

    # Save non-normalised data
    df.to_csv('basicdata.tsv', sep='|', index=False)


    #for columnname in ['pop3','pop2','pop1', 'pop0', 'density', 'fertility', 'popchange', 'womenratio', 'gdppps', 'gva', 'medianage']:
    for columnname in ['pop3','pop2','pop1', 'pop0', 'density', 'fertility', 'popchange', 'womenratio', 'gdppps', 'gva']:
        df[columnname] = pd.to_numeric(df[columnname], errors='coerce')
        x = df[[columnname]].values.astype(float)
        min_max_scaler = preprocessing.MinMaxScaler()
        x_scaled = min_max_scaler.fit_transform(x)
        df[columnname] = x_scaled


    # Save normalised data
    df.to_csv('basicdataNORM.tsv', sep='|', index=False)

    #x.to_csv('test.csv')

with open("globaldict.json", "r") as read_file: globaldict = json.load(read_file)
createCSV()
fixData()
