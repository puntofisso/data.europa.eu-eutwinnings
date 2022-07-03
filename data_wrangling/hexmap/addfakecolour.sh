#!/bin/bash
startingcountry="NONE"


red=0
green=0
blue=0

while read line
do
  country=`echo $line | cut -c -2`


  if [[ $country != $startingcountry ]]
  then
    red=`expr $red + 53`
    green=`expr $green + 30`
    if [[ $green -gt 254 ]]
    then
      green=0
    fi
    blue=`expr $blue + 30`
    if [[ $blue -gt 254 ]]
    then
      blue=0
    fi
    if [[ $red -gt 254 ]]
    then
      red=0
    fi
    startingcountry=$country
  fi


  echo "$line,\"rgb($red,$green,$blue)\""
done < nuts3-hexjson.csv
