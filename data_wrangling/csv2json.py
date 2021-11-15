import csv
import json


#jsonfile = open('nuts.json', 'w')
#
#
#
#
#
# reader = csv.DictReader(csvfile, delimiter='|', quotechar='"')
# for row in reader:
#     json.dump(row, jsonfile)
#     jsonfile.write('\n')
#jsonfile.write('[')

#with open('nuts3-qgis.csv', mode="r", encoding="utf-8") as csv_file:
globallist = []
with open('nuts0123.csv', mode="r", encoding="utf-8") as csv_file:

    csv_reader = csv.DictReader(csv_file, delimiter='|', quotechar='"', fieldnames=['level','code','country','label','nuts0','nuts1','nuts2','nuts3'])

    for row in csv_reader:
        if (row['level']=='3'):
            x=dict()
            x['label'] = row['label']
            x['code'] = row['code']
            globallist.append(x)


print(json.dumps(globallist))
