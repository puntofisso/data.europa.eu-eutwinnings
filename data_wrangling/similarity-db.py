

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

def generateallsimilarities():
    global conn, cur
    global fieldlist3, fieldlist2, fieldlist1, fieldlist0
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

generateallsimilarities()
# TODO to check new areas -> start with this
#print(similarity('BE32B','HR064',fieldlist3))
#print(similarity('BG34','DE25',fieldlist2))
#print(similarity('BG3','DE2',fieldlist1))
#print(similarity('BG','DE',fieldlist0))

curCALCSIM.close()
conCALCSIM.close()
cur.close()
conn.close()
