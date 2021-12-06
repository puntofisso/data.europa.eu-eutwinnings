#!/bin/sh

# Create
sqlite3 -batch nuts.db "create table nuts (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
sqlite3 -batch nuts.db "create table nutsNORM (code text PRIMARY KEY, level text, name text, nuts0 text, nuts1 text, nuts2 text, pop3 real, pop2 real, pop1 real, pop0 real, density real, fertility real, popchange real, womenratio real, gdppps real, gva real);"
sqlite3 -batch nuts.db "CREATE TABLE similarity (code1 text, code2 text, similarity real, PRIMARY KEY (code1, code2));"

# Populate
sqlite3 -batch nuts.db <<EOF
.separator "|"
.import basicdata.tsv nuts
EOF

sqlite3 -batch nuts.db <<EOF
.separator "|"
.import basicdataNORM.tsv nutsNORM
EOF

sqlite3 -batch nuts.db<<EOF
create table relations(code text PRIMARY KEY, name text, level text, nuts0 text, nuts1 text, nuts2 text, nuts3 text);
.separator "|"
.import nutsrelations.psv relations
EOF
