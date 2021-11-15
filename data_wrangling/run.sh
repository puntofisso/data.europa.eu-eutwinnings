#!/bin/sh
# Assuming your nuts0123.csv is available
parseAndLinkNUTS.sh # generates nutsrelations.psv
python csv2json.py > nuts.json
rm -f globaldict.json
python download.py # generates globaldict.json
rm -f basicdata.tsv
rm -f basicdataNORM.tsv
python createcsv.py # generates basicdata.tsv and basicdataNORM.tsv
createdb.sh
python similarity-db.py
