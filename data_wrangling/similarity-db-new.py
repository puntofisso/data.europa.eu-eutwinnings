

import urllib.request, json
import time
import csv


from scipy import spatial
from numpy import dot
from numpy.linalg import norm

import sqlite3

# calculates the similarity according to a set of features between two areas
def similarity(code1, code2, fieldlist):

    global curCALCSIM, conCALCSIM

    # Get the data for the two NUTS entities
    line1 = curCALCSIM.execute("SELECT * FROM nutsNORM WHERE code == :codeinput", {"codeinput": code1})
    row1 = curCALCSIM.fetchone()
    line2 = curCALCSIM.execute("SELECT * FROM nutsNORM WHERE code == :codeinput", {"codeinput": code2})
    row2 = curCALCSIM.fetchone()

    # Create array for cosine distance
    arr1 = []
    arr2 = []
    for feature in fieldlist:
            try:
                val1=float(row1[feature])
            except Exception:
                val1= float(1)
            try:
                val2=float(row2[feature])
            except Exception:
                val2= float(1)

            # print(feature + " | " + str(val1) + " | " + str(val2))

            arr1.append(val1)
            arr2.append(val2)


    # Calculate cosine distance
    # with SCIPY
    result = 1 - spatial.distance.cosine(arr1, arr2)
    ## with NUMPY, if needed
    ## cos_sim = dot(arr1, arr2)/(norm(arr1)*norm(arr2))

    # print("Similarity: " + str(result))
    return result

def generateallsimilarities(fieldlist):
    global conn, cur
    conWRITE = sqlite3.connect('nuts.db')
    conWRITE.isolation_level = None
    curWRITE = conWRITE.cursor()


    # General Idea
    # Loop over nutsrelations
    #     if level = 1, second loop through level = 1
    #     if level = 2, second loop through level = 2
    #     if level = 3, second loop through level = 3
    # For now, do only level 3, as similarity is only defined for level 3

    # TODO this select does (code1,code2) and (code2,code1), which results in key error as the PK is no-ordcer if inserting without replacing
    #      in other words, you need to only do each pairwise (code1, code2) (code2, code1) once
    all_nuts3_query = cur.execute("SELECT r1.code as code1, r2.code as code2 FROM relations r1 JOIN relations r2 WHERE r1.level == 3 AND r2.level == 3 AND r1.code <> r2.code ORDER BY r1.code, r2.code")
    all_nuts3 = cur.fetchall()


    curWRITE.execute("begin")
    try:
        for nuts in all_nuts3:
            code1 = nuts['code1']
            code2 = nuts['code2']
            simresult = similarity(code1, code2, fieldlist)
            print(nuts['code1'] + " " + nuts['code2'] + " >>>>> " + str(simresult))
            # Insert similarity into DB

            curWRITE.execute("insert or replace into similarity (code1, code2, similarity) values (?, ?, ?)", (code1, code2, simresult))
            conWRITE.commit()
    except sqlite3.Error:
        print("failed insert!")
        c.execute("rollback")
    conWRITE.close()
    curWRITE.close()

# General connection for outer generateallsimilarities
conn = sqlite3.connect('nuts.db')
conn.row_factory = sqlite3.Row
cur = conn.cursor()

# Connection for similarity generation
conCALCSIM = sqlite3.connect('nuts.db')
conCALCSIM.row_factory = sqlite3.Row
curCALCSIM = conCALCSIM.cursor()



fieldlist = ['pop3','pop0','density','fertility','popchange','womenratio','gdppps','gva']
generateallsimilarities(fieldlist)

#similarity('BG343','DE255',fieldlist)

conCALCSIM.close()
curCALCSIM.close()
conn.close()
curCALCSIM.close()
