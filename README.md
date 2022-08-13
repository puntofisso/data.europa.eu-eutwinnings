# data.europa.eu-eutwinnings
Porting EU Twinnings to be used by data.europa.eu.  

## History and General Information
This project was originally created for the EU Datathon 2020 as a MVP, currently online at [eu-twinnings.site](http://eu-twinnings.site). The project collects data from Eurostat and calculates a similarity matrix between all the NUTS regions of Europe. Initially, the app focussed on NUTS3 region, but it now also displays similarity for NUTS2 region. Beyond that, the similarity loses some meaningfulness, so it's not currently used. For more information on NUTS and to explore the database, see the [Eurostat](https://ec.europa.eu/eurostat/data/database) website. This README explains how to regenerate the data and set up the website.

The NUTS area are roughly as follows:

- NUTS0 - National
- NUTS1 - Macroregions (e.g. North-East of Italy)
- NUTS2 - Regions
- NUTS3 - Province/Local Authority/Metropolitan area (e.g. Berlin, BAT provincia)

## Data in use
There are three main datasets in use:
- the official NUTS shapefiles (for 2021 and 2016; the latter is used as a reference whenever there is missing data and it is necessary to fill in with the predecessor NUTS region), which can be found on the [EU Website](https://ec.europa.eu/eurostat/web/gisco/geodata/reference-data/administrative-units-statistical-units/nuts); the history of changes in the data can be found at https://ec.europa.eu/eurostat/web/nuts/history; note that there are only a handful of areas with "missing data"
- the same website also has a NUTS2021.xls file with all changes and lookup, which is used to generate the data in the `nutsextra` table, which is then presented in the "Other info" box; this file is processed manually to create a CSV/TSV file that matches the table schema for a variety of data fields available in the file itself; the `createdb.sh` script has detail of the table schema
- Eurostat API calls which populate automatically the data that will then be found in table `nuts`, `nutsNORM` (for 2021 and 2016)

The area maps are generated using the QGIS Atlas function, while the "similarity at a glance" map is generated on the fly using D3 and a geojson file that is created during the file collection process. The geojson file is created twice: once for NUTS3 similarities and once for NUTS2 similarities.

### IMPORTANT: Data mapping between 2016 and 2021
This is a manual process. A mapping, produced from the NUTS2021.xsl file, is produced manually into the `nutsmap.csv` file, then converted into `nutsmap.json` by the `nutsmap_csv2json.py`. Availability of the JSON map file under `data/nutsmap.json`, even if empty, is a prerequisite for running the `run-python.py` script.

## Understanding EU Twinnings
The goal of this app is to bring Eurostat data to a wider, non-specialist audience.
It does so by calculating similarity matrices of Eurostat statistics between NUTS regions, at NUTS2 and NUTS3 level, allowing the user to find which area is the "twin" of their area, i.e. the area with the most similar statistic. The app also shows similarity maps, and allows the user to deep dive into the similarities, exploring the statistical values in a user-friendly, playful way.
Ultimately, the user is also able to choose a different area or pair of areas, and compare the similarities between them, as well as selecting one or more statistics and display what areas are most similar considering the statistics selected.

### Data download and processing
Data download and creation scripts are in the `data_wrangling` directory. The script `run-python.py` will automatically extract the NUTS area indices from the shapefiles, create the database, and call the Eurostat API in order to populate it. The similarity will be then calculated. It is necessary to use the libraries required in `requirements.txt`, ideally by creating a conda environment.

Basic data files required:
- NUTS_RG_20M_2021_3035.shp
- NUTS_RG_20M_2016_3035.shp
- NUTS2021-extra.csv, which should be generated from NUTS2021.xls according to the following schema: `create table nutsextra (code text PRIMARY KEY, urbanrural text, metropolitan text, coastal text, mountain text, border text, island text, remoteness text);`

The `run-phython.py` is commented and should be self-explanatory, however here follows a walkthrough of what happens when it is launched. Note that all generated files can be renamed in the functions, so the names suggested below are for illustration purposes only.


1. from the shapefiles, the essential information is extracted into CSV files; in the script, these are called `nuts0123-2021.csv` and `nuts0123-2016.csv` (but, as discussed above, the names of files and folders are fully configurable).

2. the shapefile 2021 is converted into the GeoJson format, creating the `nuts3.geojson` and `nuts2.geojson` files; these two files will have to be moved (manually) into the `web/data` folder, to be then used by D3 to display the "similarity at a glance" map

3. `nuts0123-2021.csv` and `nuts0123-2016.csv` are used, in turn, to calculate the matrix of relationships between NUTS, so that each NUTS area has a link to its upstream NUTS area (e.g. every NUTS3 is linked to its NUTS2, NUTS1, and NUTS0). This generates the two files `nutsrelations-2021.psv` and `nutsrelations-2016.psv`

4. the download of Eurostat data is performed via the JSONAPI; this process creates a JSON dictionary file with all data, in the defaults called `globaldict.json`

5. `globaldict.json` is turned into `basicdata-2021.tsv` and `basicdata-2016.tsv`, basic tab-separated tables that will be imported into the SQLite database in the next process; their normalised counterparts, `basicdataNORM-2021.tsv` and `basicdataNORM-2016.tsv` are also created

6. the SQLite database is created and populated, using the following list of files to produce the relevant table

|       File               |       Table       |
| ------------------------ | ----------------- |
|    `basicdata-2021.tsv`  |       `nuts`      |  
| `basicdataNORM-2021.tsv` |     `nutsNORM`    |
|    `basicdata-2016.tsv`  |     `nuts2016`    |
| `basicdataNORM-2016.tsv` |   `nutsNORM2016`  |
| `nutsrelations-2021.psv` |     `relations`   |
| `nutsrelations-2016.psv` |   `relations2016` |
|    `NUTS2021-extra.csv`  |     `nutsextra`   |


7. The similarity metric is calculated and inserted into the database.  
Note that this is a time-consuming and computationally intensive step which might last hours according to which browser you use. You can adjust the variable `fieldlist` to match your own region "DNA" and similarity metric. By default, `fieldlist = ['pop3','pop0','density','fertility','popchange','womenratio','gdppps','gva']`. If you wish to test the similarity generation on a smaller subset, you should act on the `SELECT` statement, for example:

`SELECT r1.code as code1, r2.code as code2 FROM relations r1 JOIN relations r2 WHERE  r1.level == 3 AND r2.level == 3 AND r1.code < r2.code ORDER BY r1.code, r2.code`
can be restricted by adding a `WHERE` condition, for example by selecting only the NUST regions of Germany:
`SELECT r1.code as code1, r2.code as code2 FROM relations r1 JOIN relations r2 WHERE  r1.level == 3 AND r2.level == 3 AND r1.code < r2.code ORDER BY r1.code, r2.code AND r1.code LIKE 'DE%'`

8. Generation of the `<select>` list of regions, just for ease, so that it can be copied and pasted into the website in `index.html` and `region.php`. There are two versions of this function can generate NUTS3 only, or nested NUTS2 and NUTS3, `select-nuts3.html` and `select-nuts2-nuts3.html`.



The process of generation is now complete. In order to use these files:
- move `nuts.db`, `nuts3.geojson`, `nuts2.geojson` to `web/data`
- copy and paste the contents of the relevant `<select>` file into `index.html` and `select-nuts2-nuts3.html`

### Install on a server
The app is intended to be run from a sqlite3 in order to limit the dependencies required to run. However, in case a SQL database needs to be used, the data follows standard datatypes that can easily be imported into it, by making sure to select the right encoding to use all the alphabets used in the original naming of EU regions. For example, in mySQL this means that the db and all columns must use the `utf8mb4_bin`.

The web site is all contained in the `web` folder. It's basic bootstrap template using [Material Kit](https://www.creative-tim.com/product/material-kit) by Creative Tim (see credits.php and LICENSE.md).

### Unit testing
Standard unit testing is available in the `unit_tests.py` file. This ensures consistency in the table, making sure that the numbers of NUTS3/2/1/0 regions is correct, that the number of similarity pairs is correct, and that similarity is reflexive (i.e. `similarity(A,B) == similarity(B,A)`). Further unit tests may be developed.  
Ideally, the unit tests should be run after the `fixInDB()` function has been called - at which point the similarities have not been calculated, with the unit testing having 1 distinct failure; then called again with similarities in the DB, by which time all tests should pass.

## Embeddable widgets
EU Twinnings similarity data can be embedded using ready iframe widgets. A few examples are available in the [widget-examples.php](https://eu-twinnings.site/widget-examples.php) file on the main server and under `web`. For example, this is a common way to embed a hexmap for the Prov. Oost-Vlaanderen (Belgique/België) region:

```
<iframe src="https://eu-twinnings.site/widget/widget336x280-hexeample.php?nutsid=BE23"
  scrolling="no" style="width: 336px; height: 280px; margin: 0; padding: 0; border: none;">
</iframe>
```  

The full list of embeddable widgets in the `web/widget` folder.
