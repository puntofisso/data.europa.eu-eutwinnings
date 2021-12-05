

import urllib.request, json
import time
import csv


from scipy import spatial
from numpy import dot
from numpy.linalg import norm

import sqlite3

# calculates the similarity according to a set of features between two areas
def similarity(code1, code2, fieldlist):

    a = csv.DictReader(open('basicdataNORM.tsv'), delimiter='|')

    linecode1 = None
    linecode2 = None

    for line in a:
        if (line['code'] == code1):
            linecode1=line
        if (line['code'] == code2):
            linecode2=line


    arr1 = []
    arr2 = []

    for feature in fieldlist:
        val1 = 1
        val2 = 1


        try:
            if ((linecode1[feature] != "NONE") and (linecode1[feature] != "N/A") and (linecode1[feature] != "ERROR")):
                val1 = float(linecode1[feature])
        except Exception:
                val1 = float(1)

        try:
            if ((linecode2[feature] != "NONE") and (linecode2[feature] != "N/A") and (linecode2[feature] != "ERROR")):
                val2 = float(linecode2[feature])
        except Exception:
                val2 = float(1)

        arr1.append(val1)
        arr2.append(val2)


    #print(dict1)
    # to test 1 - with SCIPY
    result = 1 - spatial.distance.cosine(arr1, arr2)

    # to test 2 - with NUMPY
    # cos_sim = dot(arr1, arr2)/(norm(arr1)*norm(arr2))

    return result
    #print(f'{code1},{code2},{result}')



def allsimilaritiesForRegion(mycode, fieldlist):
    global conn


    fileHandle = open('nutsrelations.psv', 'r')

    for line in fileHandle:
        fields = line.split('|')
        code1=fields[0]
        name=fields[1]
        level=fields[2]
        country=fields[3]

        if ((level == "3") and (mycode != code1)):

            simresult = similarity(mycode, code1, fieldlist)


            # SQLite3

            # Insert a row of data
            c = conn.cursor()
            c.execute("insert into similarity (code1, code2, similarity) values (?, ?, ?)", (mycode, code1, simresult))
            conn.commit()




    fileHandle.close()


def generateallsimilarities(fieldlist):

    fileHandle1 = open('nutsrelations.psv', 'r')

    for line in fileHandle1:


        fields = line.split('|')
        code1=fields[0]
        name1=fields[1]
        level1=fields[2]
        country1=fields[3]
        if (level1 == "3"):
            print(code1)
            allsimilaritiesForRegion(code1, fieldlist)




conn = sqlite3.connect('nuts.db')
conn.isolation_level = None
fieldlist = ['pop3','pop0','density','fertility','popchange','womenratio','gdppps','gva']
#allsimilaritiesForRegion("UKI31", fieldlist)
generateallsimilarities(fieldlist)
conn.close()
