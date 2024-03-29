<?php
?>
<html>
<head>
<style>
#vis {
	margin: 0;
	padding: 0;
	text-align: center;
	font-family: sans-serif;
	font-size: 10pt;
}
</style>
</head>
<body>
<div id="vis"></div>
<!--script src="../../web/js/d3.min.js"></script-->
<script src="../../web/js/d3.v4.js"></script>
<script src="d3-hexjson.min.js"></script>
<script>

d3.json("nuts3-bycountry.hexjson", function(error, hexjson) {

	// Set the size and margins of the svg
	var margin = {top: 10, right: 10, bottom: 10, left: 10},
		width = 500 - margin.left - margin.right,
		height = 420 - margin.top - margin.bottom;

	// Create the svg element
	var svg = d3
		.select("#vis")
		.append("svg")
		.attr("width", width + margin.left + margin.right)
		.attr("height", height + margin.top + margin.bottom)
		.append("g")
		.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	// Render the hexes
	var hexes = d3.renderHexJSON(hexjson, width, height);

	// Bind the hexes to g elements of the svg and position them
	var hexmap = svg
		.selectAll("g")
		.data(hexes)
		.enter()
		.append("g")
		.attr("transform", function(hex) {
			return "translate(" + hex.x + "," + hex.y + ")";
		});

	// Draw the polygons around each hex's centre
	hexmap
		.append("polygon")
		.attr("points", function(hex) {return hex.points;})
		.attr("stroke", "white")
		.attr("stroke-width", "2")
		.attr("fill", "#b0e8f0");

	// Add the hex codes as labels
	hexmap
		.append("text")
		.append("tspan")
		.attr("text-anchor", "middle")
		.text(function(hex) {return "";});
		// .text(function(hex) {return hex.key;});
});

</script>
</body>
</html>
