import csv
import json
import sys

filename = "nutsmap.csv"
globalmap = dict()
with open(filename, mode="r", encoding="utf-8") as csv_file:

    csv_reader = csv.DictReader(csv_file, delimiter=',', quotechar='"', fieldnames=['Code2016','Code2021'])

    next(csv_reader, None)

    for row in csv_reader:
        # if (row['level']=='3'):
        #x=dict()
        #x['code2021'] = row['Code2021']
        #x['code2016'] = row['Code2016']
        #globalmap.append(x)
        globalmap[row['Code2021']] = row['Code2016']

print(json.dumps(globalmap))
