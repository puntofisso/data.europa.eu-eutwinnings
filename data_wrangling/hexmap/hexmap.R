#https://github.com/jbaileyh/geogrid

library(geogrid)
library(sf)
library(tmap)

original_shapes <- st_read('test.json') %>% st_set_crs(4326)
original_shapes$SHORTNAME <- substr(original_shapes$NUTS_NAME, 1, 4)

# Fix shapes - not sure this should be done, you shoul fix the shapefile
tmap_options(check.and.fix = TRUE)
sf_use_s2(FALSE)
fixed_shapes <- st_make_valid(original_shapes)

# rawplot <- tm_shape(fixed_shapes) + tm_polygons(col="MAP_COLORS") + tm_text("SHORTNAME")
rawplot <- tm_shape(fixed_shapes) + tm_polygons(col="MAP_COLORS") 
rawplot

# hex grid
# par(mfrow = c(2, 3), mar = c(0, 0, 2, 0))
#for (i in 1:6) {
  new_cells <- calculate_grid(shape = original_shapes, grid_type = "regular", seed = 42)
  plot(new_cells)
#}

#new_cells_hex <- calculate_grid(shape = original_shapes, grid_type = "hexagonal", seed = 3)
#resulthex <- assign_polygons(original_shapes, new_cells_hex)

#hexplot <- tm_shape(resulthex) + 
#  tm_polygons("HECTARES", palette = "viridis") +
#  tm_text("SNAME")



# regular grid
#par(mfrow = c(2, 3), mar = c(0, 0, 2, 0))
#for (i in 1:6) {
#  new_cells <- calculate_grid(shape = original_shapes, grid_type = "regular", seed = i)
#  plot(new_cells, main = paste("Seed", i, sep = " "))
#}

#new_cells_reg <- calculate_grid(shape = original_shapes, grid_type = "regular", seed = 3)
#resultreg <- assign_polygons(original_shapes, new_cells_reg)

#regplot <- tm_shape(resultreg) + 
#  tm_polygons("HECTARES", palette = "viridis") +
#  tm_text("SNAME")

# display the three plots
# tmap_arrange(rawplot, hexplot, regplot, nrow = 3)