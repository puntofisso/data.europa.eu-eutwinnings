import geopandas as gpd
# GeoDataFrame creation
file = 'NUTS_RG_20M_2021_3035.shp/NUTS_RG_20M_2021_3035.shp'
poly = gpd.read_file(file)



# copy poly to new GeoDataFrame
points = poly.copy()

# change the geometry
points.geometry = points['geometry'].centroid
points.to_crs(epsg=4326, inplace=True)
# same crs #points.crs =poly.crs
# print(points['geometry'])
#print(points.head())
print("nuts_id|nuts_name|longitude|latitude")
for index, row in points.iterrows():
    nutsid = row['NUTS_ID']
    name = row['NUTS_NAME']
    centroid_lat = row['geometry'].x
    centroid_lon = row['geometry'].y
    print(nutsid + "|" + name + "|" + str(centroid_lat) + "|" + str(centroid_lon))
