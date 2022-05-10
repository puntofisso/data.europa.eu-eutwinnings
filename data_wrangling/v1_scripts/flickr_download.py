import os
import urllib.request, json
import csv
import string
from urllib.parse import urlparse

MAXDOWNLOADS=6000
SKIP=1

def main():
    global MAXDOWNLOADS
    global SKIP

    fileHandle = open("nuts_centroids.tsv", 'r')
    counter = 0
    for line in fileHandle:
        counter = counter + 1
        fields = line.split('|')

        #nuts_id|nuts_name|longitude|latitude
        nuts_id = fields[0]
        nuts_name = fields[1]
        longitude = fields[2]
        latitude = fields[3]
        level = fields[4]


        if counter <= SKIP:
            continue
        elif counter >= MAXDOWNLOADS:
            return 0

        # Only collect photos for level 3
        if level.strip() == "3":



            # 1. create folder for download if it does not exist
            foldername="photos/"+nuts_id
            if not os.path.exists(foldername):
                os.makedirs(foldername)

            # 2. API call
            # https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=470e1d07ca700f26a970310f468006e9&format=json&nojsoncallback=1&lat=41.17050930352396&lon=16.17671879841855&radius=10&extras=license,url_c,owner&license=4,5,6,7,8,9,10&privacy_filter=1&content_type=1&geo_context=2
            url="https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=470e1d07ca700f26a970310f468006e9&format=json&nojsoncallback=1&lat="+latitude+"&lon="+longitude+"&radius=10&extras=license,url_c,owner,owner_name,description&license=4,5,6,7,8,9,10&privacy_filter=1&content_type=1&geo_context=2&per_page=15"
            print (nuts_id + " " + nuts_name + " " + url)
            exception=False
            try:
                headers={
                    'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.47 Safari/537.36'
                }
                req = urllib.request.Request(url=url,headers=headers)
                urlopen = urllib.request.urlopen(req)
                data = json.loads(urlopen.read().decode())

            except Exception as e:
                exception=True
                print("HTTPERROR on " + url)

            if not exception:
                photos = data['photos']
                for photo in photos['photo']:

                    license=photo['license']
                    owner=photo['owner']
                    photoid=photo['id']
                    flickrurl="https://flickr.com/photos/"+owner+"/"+photoid
                    ownername=photo['ownername']
                    title=photo['title']
                    description=photo['description']['_content']
                    licensestring=makeLicenseString(license)

                    urlphotosfound = False
                    try:
                        url_c=photo['url_c']
                        urlphotosfound = True
                        filename=os.path.basename(urlparse(url_c).path)
                    except Exception as e:
                        url_c="not found"


                    # Set up dictionary with all info
                    if urlphotosfound:
                        #print('{0}|{1}|{2}|{3}|{4}|{5}|{6}|{7}|{8}|{9}'.format(photoid,owner,filename,url_c,flickrurl,license,licensestring,ownername,title,description))
                        with open(foldername+"/"+filename+".txt", 'w') as d:
                            d.write("%s|%s|%s|%s|%s|%s|%s|%s|%s|%s" %(photoid,owner,filename,url_c,flickrurl,license,licensestring,ownername,title,description))
                        d.close()
                        # Download photo
                        f = open(foldername+"/"+filename,'wb')
                        f.write(urllib.request.urlopen(url_c).read())
                        f.close()



def makeLicenseString(license):
    if license == "0":
        return "All Rights Reserved"
    elif license == "1":
        return "CC BY-NC-SA 2.0"
    elif license == "2":
        return "CC BY-NC 2.0"
    elif license == "3":
        return "CC BY-NC-ND 2.0"
    elif license == "4":
        return "CC BY 2.0"
    elif license == "5":
        return "CC BY-SA 2.0"
    elif license == "6":
        return "CC BY-ND 2.0"
    elif license == "7":
        return "No known copyright restrictions"
    elif license == "8":
        return "US Government Work"
    elif license == "9":
        return "CC0 (Public Domain Dedication)"
    elif license == "10":
        return "Public Domain Mark"
    else:
        return "ERROR"

if __name__ == "__main__":
    main()
