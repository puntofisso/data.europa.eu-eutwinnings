import sqlite3
from sqlite3 import Error
import json
startpos = {'FR':[6,2],'IT':[8,5]}
# r,q
# "FR","France",6,2
# "HR","Hrvatska",7,2
# "HU","Magyarország",8,5
# "AL","Shqipëria",8,4
# "AT","Österreich",6,2
# "BE","Belgique/België",4,1
# "BG","България",8,7
# "CH","Schweiz/Suisse/Svizzera",6,5
# "CY","Κύπρος",12,10
# "CZ","Česko",6,6
# "DE","Deutschland",6,4
# "DK","Danmark",3,4
# "EE","Eesti",3,5
# "EL","Ελλάδα",9,10
# "IE","Éire/Ireland",3,1
# "ES","España",9,3
# "FI","Suomi/Finland",1,7
# "IS","Ísland",1,1
# "PT","Portugal",10,3
# "RO","România",7,7
# "RS","Srbija/Сpбија",8,
# "SE","Sverige",1,4
# "SI","Slovenija",8,1
# "SK","Slovensko",6,7
# "TR","Türkiye",11,10
# "UK","United Kingdom",3,2
# "NO","Norge",1,2
# "IT","Italia",8,5
# "LI","Liechtenstein",6,5
# "LT","Lietuva",3,4
# "LU","Luxembourg",5,2
# "LV","Latvija",3,3
# "ME","Црна Гора",8,2
# "MK","Северна Македонија",8,3
# "MT","Malta",12,5
# "NL","Nederland",4,2
# "PL","Polska",4,7

hexjsonobject = {}
hexjsonobject['layout'] = "odd-r"
hexjsonobject['hexes'] = {}

# connect to DB
conn = None
db_file='../data/nuts.db'
try:
    conn = sqlite3.connect(db_file)
    conn.row_factory = sqlite3.Row
    cur = conn.cursor()
    cur.execute("SELECT * FROM nuts where code in ('FR','IT')")
    rows = cur.fetchall()

    for row in rows:
        codenuts0 = row['code']
        namenuts0 = row['name']
        myr = startpos[codenuts0][0]
        myq = startpos[codenuts0][1]


        cur2 = conn.cursor()
        cur2.execute("SELECT code,name FROM nuts where level='3' and nuts0='" + codenuts0 + "' ORDER by name ASC")
        rows2 = cur2.fetchall()
        counter = 0
        for row2 in rows2:
            code = row2[0]
            name = row2[1]
            myr = myr
            myq = myq+1
            if (counter >= 10):
                myr = myr+1
                counter = 0
            counter = counter + 1
            hexjsonobject['hexes'][code] = {}
            hexjsonobject['hexes'][code]['name'] = name
            hexjsonobject['hexes'][code]['q'] = myq
            hexjsonobject['hexes'][code]['r'] = myr
            #print('{}|{}|{}|{}'.format(code,name,myq,myr))

except Error as e:
    print(e)
# fh.write('</select>')
# fh.close()
print(hexjsonobject)
