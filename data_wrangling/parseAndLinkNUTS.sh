#!/bin/bash
#"LEVEL"|"NUTS_ID"|"CNTR_CODE"|"NUTS_NAME"|"MOUNT_TYPE"|"URBN_TYPE"|"COAST_TYPE"|"FID"
rm -f nutsrelations.psv
while read line
do

  level=`echo $line|awk -F";" {'print $2'} | sed s/\\"//g  `
  code=`echo $line|awk -F";" {'print $1'} | sed s/\\"//g  `
  country=`echo $line|awk -F";" {'print $3'} | sed s/\\"//g  `
  name=`echo $line|awk -F";" {'print $4'} | sed s/\\"//g  `


  nuts0="NONE"
  nuts1="NONE"
  nuts2="NONE"
  nuts3="NONE"


  if [[ "$level" == "0" ]]
  then
    nuts0=$country
    nuts1=""
    nuts2=""
    nuts3=""
  fi

  if [[ "$level" == "1" ]]
  then
    nuts0=$country
    nuts1=$code
    nuts2=""
    nuts3=""
  fi

  if [[ $level == "2" ]]
  then
    nuts0=$country
    nuts1=`echo $code | head -c 3`
    nuts2=$code
    nuts3=""
  fi

  if [[ $level == "3" ]]
  then
    nuts0=$country
    nuts1=`echo $code | head -c 3`
    nuts2=`echo $code | head -c 4`
    nuts3=$code
  fi


  echo "$code|$name|$level|$nuts0|$nuts1|$nuts2|$nuts3"
done < nuts0123-qgis-export-as.csv > nutsrelations.psv
