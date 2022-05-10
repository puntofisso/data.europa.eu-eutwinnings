import os
import urllib.request, json
import csv
import string
from urllib.parse import urlparse

global finalarray

def main():

    counter = 0
    fileHandle = open("nutsrelations-2021.psv", 'r')

    global finalarray
    finalarray = { }

    for line in fileHandle:
        counter = counter + 1
        fields = line.split('|')

        #      NUTS_ID|NAME_LATN|LEVL_CODE|NONE|NONE|NONE|NONE
        # e.g. DE254|Nürnberg, Kreisfreie Stadt|3|DE|DE2|DE25|DE254
        if counter == 1:
            continue
        nuts_id = fields[0]
        nuts_name = fields[1]
        level = fields[2]
        nuts0 = fields[3]
        nuts1 = fields[4]
        nuts2 = fields[5]
        nuts3 = fields[6]

        if level == "0":
            finalarray[nuts_id] = { 'id':nuts_id, 'name':nuts_name, 'level':level, 'nuts1' : {} }

        if level == "1":
            if not nuts0 in finalarray:
                finalarray[nuts0] = { 'nuts1': {}, 'level': '0' }
            finalarray[nuts0]['nuts1'][nuts_id] = { 'id':nuts_id, 'name':nuts_name, 'level':level, 'nuts2':{} }

        if level == "2":
            if not nuts0 in finalarray:
                finalarray[nuts0] = { 'nuts1': {} }

            if not nuts1 in finalarray[nuts0]['nuts1']:
                finalarray[nuts0]['nuts1'][nuts1] = { 'nuts2' : {} }

            finalarray[nuts0]['nuts1'][nuts1]['nuts2'][nuts_id] = { 'id':nuts_id, 'name':nuts_name, 'level':level, 'nuts3':{} }

        if level == "3":
            if not nuts0 in finalarray:
                finalarray[nuts0] = { 'nuts1': {} }

            if not nuts1 in finalarray[nuts0]['nuts1']:
                finalarray[nuts0]['nuts1'][nuts1] = { 'nuts2' : {} }

            if not nuts2 in finalarray[nuts0]['nuts1'][nuts1]['nuts2']:
                finalarray[nuts0]['nuts1'][nuts1]['nuts2'][nuts2] = { 'nuts3': {} }

            finalarray[nuts0]['nuts1'][nuts1]['nuts2'][nuts2]['nuts3'][nuts_id] = { 'id':nuts_id, 'name':nuts_name, 'level':level }


def printSelect():
    global finalarray
    print("<select>")



    for key0, value0 in finalarray.items():

        print('---------')
        print(key0)
        print(value0)

        if value0['level'] == "0":
            print('<optgroup label="' + value0['name'] +  '">')

            for key1, value1 in value0['nuts1'].items():
                if 'nuts2' in value1:
                    for key2, value2 in value1['nuts2'].items():
                        if 'nuts3' in value2:
                            for key3, value3 in value2['nuts3'].items():
                                print('<option value="'+ value3['id']+ '">' + value3['name'] + '</option>')
            print('</optgroup>')
    print("</select>")


def printButton():
#     <div class="dropdown-menu">
#   <h6 class="dropdown-header">Dropdown header</h6>
#   <a class="dropdown-item" href="#">Action</a>
#   <a class="dropdown-item" href="#">Another action</a>
# </div>
    global finalarray
    print('<div class="dropdown-menu">')

    for key0, value0 in finalarray.items():

        if value0['level'] == "0":
            print('<h6 class="dropdown-header">' + value0['name'] +  '</h6>')

            for key1, value1 in value0['nuts1'].items():
                if 'nuts2' in value1:
                    for key2, value2 in value1['nuts2'].items():
                        if 'nuts3' in value2:
                            for key3, value3 in value2['nuts3'].items():
                                print('<a class="dropdown-item" href="#" data-code="'+ value3['id']+ '">' + value3['name'] + '</a>')

    print("</div>")

if __name__ == "__main__":
    main()
    global finalarray
    # print(json.dumps(finalarray))
    # print(json.dumps(finalarray, indent=4, sort_keys=True))
    printSelect()
