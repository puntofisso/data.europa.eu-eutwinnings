import csv
import json
import sys

year = sys.argv[1]
filename = "nuts0123-" + str(year) + ".csv"
globallist = []
with open(filename, mode="r", encoding="utf-8") as csv_file:

    csv_reader = csv.DictReader(csv_file, delimiter=';', quotechar='"', fieldnames=['code','level','country','label','nuts0','nuts1','nuts2','nuts3'])

    next(csv_reader, None)

    for row in csv_reader:
        # if (row['level']=='3'):
        x=dict()
        x['label'] = row['label']
        x['code'] = row['code']
        globallist.append(x)

print(json.dumps(globallist))
