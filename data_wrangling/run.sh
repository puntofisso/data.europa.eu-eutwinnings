#!/bin/sh
# Assuming your nuts0123.csv is available
echo "1. Converting shapefile to nuts0123.csv"
rm -f nuts0123.csv
ogr2ogr -f "CSV" -lco SEPARATOR=SEMICOLON -lco STRING_QUOTING=ALWAYS nuts0123.csv NUTS_RG_20M_2021_3035.shp/NUTS_RG_20M_2021_3035.shp

# TODO move to python
echo "2. Linking NUTS and generating nutsrelations.psv"
# generates nutsrelations.psv
./parseAndLinkNUTS.sh

echo "3. Creting nuts.json for website with csv2json.py"
# generates nuts.json, used for the lookup function
python csv2json.py > nuts.json

# TODO download directly to DB
echo "4. Downloading data from API to globaldict.json"
# generates globaldict.json
rm -f globaldict.json
python download.py

# TODO to DB?
echo "5. Creating basicdata.tsv and basicdataNORM.tsv from globaldict.json"
rm -f basicdata.tsv
rm -f basicdataNORM.tsv
python createcsv.py # generates basicdata.tsv and basicdataNORM.tsv from globaldict.json

# TODO it's tidier to create the DB structure at the beginning?
echo "6. Creating DB"
# generates nuts.db and imports basic data (not similarity)
rm -f nuts.db
./createdb.sh

echo "7. Calculate similarity"
python similarity-db.py # populates nuts.db with similarity data
