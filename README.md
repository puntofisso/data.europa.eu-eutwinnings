# data.europa.eu-eutwinnings
Porting EU Twinnings to data.europa.eu.  
*The documentation below relates to the old version and is not current*.  

This project was originally created for the EU Datathon 2020 as a MVP, currently online at [eu-twinnings.site](http://eu-twinnings.site). The project collects data from Eurostat and calculates a similarity matrix between all the NUTS3 regions of Europe. For more information on NUTS3 and to explore the database, see the [Eurostat](https://ec.europa.eu/eurostat/data/database) website. This README explains how to regenerate the data and set up the website.

The NUTS area are roughly as follows:

- NUTS0 - National
- NUTS1 - Macroregions (e.g. North-East of Italy)
- NUTS2 - Regions
- NUTS3 - Province/Local Authority/Metropolitan area (e.g. Berlin, BAT provincia)

The maps were generated using the QGIS Atlas function. The shapefiles can be found on the [EU Website](https://ec.europa.eu/eurostat/web/gisco/geodata/reference-data/administrative-units-statistical-units/nuts).

![Image](https://github.com/puntofisso/EUTwinnings/blob/master/2.png)

## Related information
Using Eurostat data with D3 [http://geoexamples.blogspot.com/2013/10/using-eurostats-data-with-d3js.html]

## Understanding EU Twinnings
The goal of this app is to bring Eurostat data to a wider, non-specialist audience.
It does so by calculating similarity matrices of Eurostat statistics between NUTS3 regions, allowing the user to find which area is the "twin" of their area, i.e. the area with the most similar statistic. The app also shows similarity maps, and allows the user to deep dive into the similarities, exploring the statistical values in a user-friendly, playful way.
Ultimately, the user is also able to choose a different area or pair of areas, and compare the similarities between them, as well as selecting one or more statistics and display what areas are most similar considering the statistics selected.

# 1 - Data download

Data download and creation scripts are in the `data_wrangling` directory.

## Basic data required
**TODO NUTS file, extract structure, maps NUTS2016-2021**
This is the data required to start everything else, such as the list of NUTS regions and the relationships between them. It would normally only needed to be run once.
1. Once you've downloaded the shapefile, use QGIS to create a single layer with all the NUTS and their level. This is because the shapefile has separate layers for each NUTS level. Then extract attribute table as a spreadsheet (in this case, I called it `nuts0123.csv`).
2. Run `parseAndLinkNUTS.sh` to create `nutsrelations.psv`
3. Generate or regenerate `nuts.json`, which you'll need to make available to the autocomplete script by running `cvs2json.py` which needs `nuts0123.csv`

## Download Eurostat data
1. Run `download.py` to create `globaldict.json`, a file that contains all of the stats we need.
2. Run `createcsv.py`, which uses `globaldict.json` and `nutsrelations.psv` in order to create `basicdata.tsv` and `basicdataNORM.tsv` (the latter is a normalised version of the data we need).

## Generate the similarity metric
This process will create the similarity metric. By default, the script adds the data into a sqlite3 database (see below what you need to do to create the DB), but you can edit this to create a csv file or whatever you prefer.
1. Make sure you have generated `nutsrelations.psv` and `basicdataNORM.tsv`
2. Then in `similarity-db.py`
  a. adjust the  variable `fieldlist` to match your own idea of similarity metric. By default, `fieldlist = ['pop3','pop0','density','fertility','popchange','womenratio','gdppps','gva']`.
  b. you can either run `similarity-db.py` on all the NUTS3 by uncommenting `generateallsimilarities(fieldlist)` or a specific one, by uncommenting `allsimilaritiesForRegion("UKI31", fieldlist)`. Either way this will produce a sqlite3 db containing all the similarities.

## Creating the Sqlite3 DB

### Import NUTS
In order to import data in sqlite, replace ERROR, N/A, NONE with "" and remove header from `basicdata.tsv`. Then in sqlite opened with the db (e.g. running `sqlite3 nuts.db`):

```
create table nuts (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);
.separator "|"
.import basicdata.tsv nuts
```
### Import Relations
Import also all nuts relations (as `basicdata.tsv` only contains NUTS3!):

```
"DE113|Esslingen|3|DE|DE1|DE11|DE113"
create table relations(code text PRIMARY KEY, name text, level text, nuts0 text, nuts1 text, nuts2 text, nuts3 text);
.separator "|"
.import nutsrelations.psv relations
```

### Create the similarity table

```
CREATE TABLE similarity (
  code1 text,
  code2 text,
  similarity real,
  PRIMARY KEY (code1, code2)
);
```

# 2 - How to install on a server
Ideally, transfer sqlite to mysql, or (even better!) turn this into a nosql key/value store.
Use the `createMySql.sql` together with a DB `.dump` from sqlite - you will need to remove the `CREATE` statements.
Other issues you might encounted:
- make sure db and columns are `utf8mb4_bin` (and change all columns)
- check types and data e.g. `ALTER TABLE nuts MODIFY gva DECIMAL(50,30)`
- check default data is not `0`, or run `UPDATE nuts SET name='' WHERE CODE IN ('UKN10','UKN11','UKN12','UKN13','UKN14','UKN15','UKN16')`

The web site is all contained in the `web` folder. It's basic bootstrap together with the template [Material Kit](https://www.creative-tim.com/product/material-kit) by Creative Tim (see credits.php and LICENSE.md).
