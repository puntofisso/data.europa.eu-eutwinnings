

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
    # TODO interesting data on split 2/3 here: https://ec.europa.eu/eurostat/cache/metadata/en/demo_r_gind3_esms.htm
    # [] means "presented only in"

    getDataSet('demo_r_pjanaggr3', 'precision=1&sex=T&unit=NR&time=2019&age=TOTAL', 'population2019_nuts3')
    getDataSet('demo_r_d2jan','time=2019&precision=1&sex=T&unit=NR&age=TOTAL','population2019')
    getDataSet('demo_r_d3dens', 'unit=PER_KM2&precision=1&time=2018','density2018_nuts3')
    getDataSet('demo_r_find3','indic_de=TOTFERRT&precision=1&unit=NR&time=2018', 'fertility2018_nuts3')
    getDataSet('demo_r_gind3','indic_de=GROW&precision=1&time=2018','populationchange2018_nuts3')
    getDataSet('demo_r_pjanind3','indic_de=PC_FM&precision=1&unit=PC&time=2019','womenper100men2019_nuts3')
    getDataSet('nama_10r_3gdp','unit=EUR_HAB_EU27_2020&precision=1&time=2017','gdpPps2017_nuts3')
    getDataSet('nama_10r_3gva','precision=1&currency=MIO_EUR&time=2017&nace_r2=TOTAL','gva2017basicprices_nuts3')


    #getDataSet('demo_r_mlifexp', 'precision=1&sex=T&time=2018&unit=YR&age=Y_LT1','lifeexpectancy2018') # NUTS1 NUTS2
    #getDataSet('lfst_r_lfe2emprt', 'precision=1&sex=T&unit=PC&time=2019&age=Y_GE15', 'employment2019') # NUTS1 [NUTS2]
    #getDataSet('lfst_r_lfu3rt', 'precision=1&sex=T&unit=PC&time=2019&age=Y_GE15','unemployment2019') # NUTS1 NUTS2
    # 03.10 this no longer works
    #getDataSet('edat_lfse_12', 'precision=1&sex=T&unit=PC&isced11=ED5-8&time=2019&age=Y30-34','tertiaryeducation2019') # NUTS1 NUTS2
    #getDataSet('isoc_r_iuse_i', 'precision=1&unit=PC_IND_IU3&indic_is=I_IDAY&time=2019', 'internetusers2019') # NUTS1 NUTS2
    #getDataSet('isoc_r_broad_h', 'precision=1&unit=PC_HH_IACC&time=2019', 'broadbandhouseholds2019') # NUTS1 NUTS2
    # 01.08 this no longer works
    #getDataSet('nama_10r_2gdp', 'precision=1&unit=PPS_HAB_EU&time=2018', 'gdpPps2018') # NUTS1 NUTS2
    #getDataSet('rd_e_gerdreg', 'precision=1&sectperf=TOTAL&unit=PC_GDP&time=2017', 'RDexpenditure2017') # NUTS1 NUTS2
    #getDataSet('tour_occ_nin2', 'c_resid=TOTAL&precision=1&unit=NR&time=2019&nace_r2=I551', 'nigthsTourism2019') # NUTS1 NUTS2
    #getDataSet('tran_r_vehst','precision=1&vehicle=CAR&unit=P_THAB&time=2018','passengerCars2018') # NUTS1 NUTS2
    #getDataSet('tran_r_acci', 'precision=1&unit=P_MHAB&victim=KIL&time=2018', 'accidents2018') # NUTS1 [NUTS2]

    ## NUTS 3



    #getDataSet('demo_r_pjanind3','indic_de=MEDAGEPOP&precision=1&unit=YR&time=2019','medianage2019_nuts3')
    # 01.08 this no longer works



    # to file, do this to get proper JSON
    app_json = json.dumps(globaldict, indent=4)
    globaldictfile = open("globaldict.json", "w")
    globaldictfile.write(app_json)
    globaldictfile.close()


globaldict = dict()
initData()
