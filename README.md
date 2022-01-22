# data.europa.eu-eutwinnings
Porting EU Twinnings to be used by data.europa.eu.  

## History and General Information
This project was originally created for the EU Datathon 2020 as a MVP, currently online at [eu-twinnings.site](http://eu-twinnings.site). The project collects data from Eurostat and calculates a similarity matrix between all the NUTS3 regions of Europe. For more information on NUTS3 and to explore the database, see the [Eurostat](https://ec.europa.eu/eurostat/data/database) website. This README explains how to regenerate the data and set up the website.

The NUTS area are roughly as follows:

- NUTS0 - National
- NUTS1 - Macroregions (e.g. North-East of Italy)
- NUTS2 - Regions
- NUTS3 - Province/Local Authority/Metropolitan area (e.g. Berlin, BAT provincia)

At the moment, the app only calculates the similarity between NUTS3 areas.

## Data in use
There are three main datasets in use:
- the official NUTS shapefiles (for 2021 and 2016, the latter used to fill in missing data), which can be found on the [EU Website](https://ec.europa.eu/eurostat/web/gisco/geodata/reference-data/administrative-units-statistical-units/nuts); the history of changes in the data can be found at https://ec.europa.eu/eurostat/web/nuts/history; note that there are only a handful of areas with "missing data"
- the same website also has a NUTS2021.xls file with all changes and lookup, which is used to generate the data in the `nutsextra` table, which is then presented in the "Other info" box; this file is processed manually to create a CSV/TSV file that matches the table schema for a variety of data fields available in the file itself; the `createdb.sh` script has detail of the table schema
- Eurostat API calls which populate automatically the data that will then be found in table `nuts`, `nutsNORM` (for 2021 and 2016)

The area maps are generated using the QGIS Atlas function, while the "similarity at a glance" map is generated on the fly using D3 and a geojson file that is created during the file collection process.

## Understanding EU Twinnings
The goal of this app is to bring Eurostat data to a wider, non-specialist audience.
It does so by calculating similarity matrices of Eurostat statistics between NUTS3 regions, allowing the user to find which area is the "twin" of their area, i.e. the area with the most similar statistic. The app also shows similarity maps, and allows the user to deep dive into the similarities, exploring the statistical values in a user-friendly, playful way.
Ultimately, the user is also able to choose a different area or pair of areas, and compare the similarities between them, as well as selecting one or more statistics and display what areas are most similar considering the statistics selected.

### 1 - Data download
Data download and creation scripts are in the `data_wrangling` directory. The script `run.sh` will automatically extract the data from the shapefiles, create the database, and call the Eurostat API in order to populate it. The similarity will be then calculated.

Basic data files required:
- NUTS_RG_20M_2021_3035.shp
- NUTS_RG_20M_2016_3035.shp
- NUTS2021-extra.csv, which should be generated from NUTS2021.xls according to the following schema: `create table nutsextra (code text PRIMARY KEY, urbanrural text, metropolitan text, coastal text, mountain text, border text, island text, remoteness text);`

What happens when your execute `run.sh`:
1. the shapefiles are converted to CSV format `nuts0123-2021.csv` and `nuts0123-2016.csv`
2. the shapefile 2021 is converted into GeoJson format, to create the `nuts3.geojson` file that needs to be moved into the `web/data` folder, to be then used by D3 to display the "similarity at a glance" map
3. `nuts0123-2021.csv` and `nuts0123-2016.csv` are used to calculate the matrix of relationships between NUTS, so that each NUTS area has the upstream NUTS area (e.g. every NUTS3 is linked to its NUTS2, NUTS1, and NUTS0, with their names in the table). This generates the two files `nutsrelations-2021.psv` and `nutsrelations-2016.psv`
4. the `nuts-autocomplete.json` is created; this file needs to be moved into `web/data`
5. the API download happens via `download.py`, which creates a JSON dictionary file with all data `globaldict.json`
6. `globaldict.json` is turned into `basicdata-2021.tsv` and `basicdata-2016.tsv` and their normalised counterparts by `createcsv.py`
7. `createdb.sh` is then called to create the database and its tables, using the following relationships:

|       File               |       Table       |
| ------------------------ | ----------------- |
|    `basicdata-2021.tsv`  |       `nuts`      |  
| `basicdataNORM-2021.tsv` |     `nutsNORM`    |
|    `basicdata-2016.tsv`  |     `nuts2016`    |
| `basicdataNORM-2016.tsv` |   `nutsNORM2016`  |
| `nutsrelations-2021.psv` |     `relations`   |
| `nutsrelations-2016.psv` |   `relations2016` |
|    `NUTS2021-extra.csv`  |     `nutsextra`   |

8. The similarity metric is then calculated by `similarity-db.py`. Note that this is a time-consuming and computationally intensive step which might last hours according to which browser you use. You can adjust the variable `fieldlist` to match your own idea of similarity metric. By default, `fieldlist = ['pop3','pop0','density','fertility','popchange','womenratio','gdppps','gva']`. Note that `similarity-db.py` has options to run and test the similarity on a smaller number of NUTS3 regions.
9. Move `nuts.db` into `web/data`. At this point, the `web/data` folder should contain three files:

|        File list          |
| ------------------------- |
|  `nuts-autocomplete.json` |
|         `nuts.db`         |
|       `nuts.geojson`      |


### Install on a server
The app is intended to be run from a sqlite3 in order to limit the dependencies. The data can easily be imported into mySQL, in which case it is important that the db and columns use the `utf8mb4_bin` encoding on all columns.

The web site is all contained in the `web` folder. It's basic bootstrap together with the template [Material Kit](https://www.creative-tim.com/product/material-kit) by Creative Tim (see credits.php and LICENSE.md).
