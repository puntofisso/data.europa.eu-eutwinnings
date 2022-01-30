#!/bin/sh

date

echo "1a. Converting shapefile to nuts0123.csv"
# 2021
rm -f nuts0123-2021.csv
ogr2ogr -f "CSV" -lco SEPARATOR=SEMICOLON -lco STRING_QUOTING=ALWAYS nuts0123-2021.csv NUTS_RG_20M_2021_3035.shp/NUTS_RG_20M_2021_3035.shp
#2016
rm -f nuts0123-2016.csv
ogr2ogr -f "CSV" -lco SEPARATOR=SEMICOLON -lco STRING_QUOTING=ALWAYS nuts0123-2016.csv NUTS_RG_20M_2016_3035.shp/NUTS_RG_20M_2016_3035.shp

echo "1b. Converting 2021 shapefile (NUTS3) to nuts3.geojson"

rm -f forgeojson.shp
ogr2ogr -where LEVL_CODE="3" forgeojson.shp NUTS_RG_20M_2021_3035.shp/NUTS_RG_20M_2021_3035.shp
rm -f nuts3.geojson
ogr2ogr -f "GeoJSON" -lco COORDINATE_PRECISION=2 -t_srs crs:84 nuts3.geojson-temp forgeojson.shp
rm -f forgeojson.*
jq -c . < nuts3.geojson-temp > nuts3.geojson
rm -f nuts3.geojson-temp

echo "1c. Creating centroids file"

rm -f nuts_centroids.tsv
python centroids.py > nuts_centroids.tsv

date


# TODO move to python
echo "2. Linking NUTS and generating nutsrelations.psv"
rm -f nutsrelations-2021.psv
rm -f nutsrelations-2016.psv
# generates nutsrelations-2021.psv
./parseAndLinkNUTS.sh 2021
# generates nutsrelations-2016.psv
./parseAndLinkNUTS.sh 2016

date

echo "3. Creting nuts.json for website with csv2json.py"
# generates nuts.json, used for the lookup function; only needed for current year
python csv2json.py 2021 > nuts-autocomplete.json

date

# TODO download directly to DB
echo "4. Downloading data from API to globaldict.json"
# generates globaldict.json with all data in the relevant eurostat tables
# as a consequence, there is only one global dict because it downloads all available data
# at whatever NUTS year they refer to
rm -f globaldict.json
python download.py

date

# TODO to python and DB?
echo "5. Creating basicdata.tsv and basicdataNORM.tsv from globaldict.json"
rm -f basicdata-2021.tsv
rm -f basicdataNORM-2021.tsv
rm -f basicdata-2016.tsv
rm -f basicdataNORM-2016.tsv
# generates basicdata.tsv and basicdataNORM.tsv from globaldict.json
python createcsv.py 2021
python createcsv.py 2016

date

# TODO it's tidier to create the DB structure at the beginning?
echo "6. Creating DB"
# generates nuts.db and imports basic data (not similarity)
rm -f nuts.db
./createdb.sh

date

echo "7. Calculate similarity"
python similarity-db.py # populates nuts.db with similarity data

date
