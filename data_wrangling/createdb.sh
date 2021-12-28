#!/bin/sh

# Create
sqlite3 -batch nuts.db "create table nuts (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
sqlite3 -batch nuts.db "create table nutsNORM (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
sqlite3 -batch nuts.db "create table nuts2016 (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
sqlite3 -batch nuts.db "create table nutsNORM2016 (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
sqlite3 -batch nuts.db "CREATE TABLE similarity (code1 text, code2 text, similarity real, PRIMARY KEY (code1, code2));"
sqlite3 -batch nuts.db "create table relations(code text PRIMARY KEY, name text, level text, nuts0 text, nuts1 text, nuts2 text, nuts3 text);"
sqlite3 -batch nuts.db "create table relations2016(code text PRIMARY KEY, name text, level text, nuts0 text, nuts1 text, nuts2 text, nuts3 text);"

# Populate
sqlite3 -batch nuts.db <<EOF
.separator "|"
.import --skip 1 basicdata-2021.tsv nuts
EOF

sqlite3 -batch nuts.db <<EOF
.separator "|"
.import --skip 1 basicdataNORM-2021.tsv nutsNORM
EOF

sqlite3 -batch nuts.db <<EOF
.separator "|"
.import --skip 1 basicdata-2016.tsv nuts2016
EOF

sqlite3 -batch nuts.db <<EOF
.separator "|"
.import --skip 1 basicdataNORM-2016.tsv nutsNORM2016
EOF

sqlite3 -batch nuts.db<<EOF
.separator "|"
.import --skip 1 nutsrelations-2021.psv relations
EOF

sqlite3 -batch nuts.db<<EOF
.separator "|"
.import --skip 1 nutsrelations-2016.psv relations2016
EOF
