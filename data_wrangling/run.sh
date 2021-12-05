#!/bin/sh
# Assuming your nuts0123.csv is available
rm -f nuts0123-qgis-export-as.csv
ogr2ogr -f "CSV" -lco SEPARATOR=SEMICOLON -lco STRING_QUOTING=ALWAYS nuts0123-qgis-export-as.csv NUTS_RG_20M_2021_3035.shp/NUTS_RG_20M_2021_3035.shp
./parseAndLinkNUTS.sh # generates nutsrelations.psv
python csv2json.py > nuts.json
rm -f globaldict.json
python download.py # generates globaldict.json - it takes about a minute until here
rm -f basicdata.tsv
rm -f basicdataNORM.tsv
python createcsv.py # generates basicdata.tsv and basicdataNORM.tsv
./createdb.sh # generates nuts.db and imports basic data (not similarity)- 1'30'' up to here
python similarity-db-new.py # populates nuts.db with similarity data
