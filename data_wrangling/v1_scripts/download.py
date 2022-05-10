

import urllib.request, json
import time
import csv


from scipy import spatial
from numpy import dot
from numpy.linalg import norm



# gets dataset and puts it in global dictionary
def getDataSet(table, filter, prefix):
    global globaldict

    euroUrl = 'http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/'
    euroUrl = euroUrl+""+table
    euroUrl = euroUrl+"?"+filter

    print(euroUrl)
    #return euroUrl

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
        #print(str(indexCode),str(indexToFollow))
        #print(str(indexCode) , str(val))

        if str(indexCode) not in globaldict:
            globaldict[str(indexCode)] = dict()
        globaldict[str(indexCode)][prefix] = str(val)

    #print(values[str(0)])

def initData():
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
    globaldictfile = open("globaldict.json", "w")
    globaldictfile.write(app_json)
    globaldictfile.close()


globaldict = dict()
initData()
