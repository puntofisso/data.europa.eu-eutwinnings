<?php
$nutsid=null;
if (isset($_GET['nutsid'])) {
  $nutsid = $_GET['nutsid'];
} else {
  $nutsid='NO081';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">

  <!--link rel="icon" href="">
  <link rel="icon" href="" type="image/svg+xml">
  <link rel="apple-touch-icon" href=""-->

  <!--link rel="stylesheet" href="css/styles.css?v=1.0"-->

  <script src="../js/external/jquery/jquery.js"></script>

  <script src="../js/d3.v4.js"></script>
  <script src="../js/d3-scale-chromatic.v1.min.js"></script>
  <script src="../js/d3-geo-projection.v2.min.js"></script>


  <style>

@import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
  h1 { font-family: 'Ubuntu'; font-size: 20px; color: #001d85; margin-bottom:1px;}



  body {
    padding: 0px;
    margin: 0px;
    background-color: #f0f2f5;
  }

  .maincontent {
      width: 334px;
      height: 278px;
      border-style:  solid;
      border-width: 1px;
      font-family: 'Ubuntu'; font-size: 15px; color: #333;
        }


        .badge {
          display: inline-block;
          padding: 0.55em 0.9em;
          font-size: 0.75em;
          font-weight: 700;
          line-height: 0.5;
          color: #fff;
          text-align: center;
          white-space: nowrap;
          vertical-align: baseline;
          border-radius: 0.45rem; }

          .bg-danger {
            background: #F44335; }
            .bg-success {
              background-color: #4CAF50 !important; }
    #hexmap2 { height: 100px; width: 100%; animation-duration: 0.3s; }
    #hexmap2 .hex-cell { stroke: white; stroke-width: 2; transition: fill 0.3s ease-in, stroke 0.3s ease-in, stroke-width 0.3s ease-in; }
    /* Make the hexagon larger when hovered */
    /* #hexmap2 .hex-cell.hover { stroke-width: 4px; transform: scale(1.75); } */
    /* Set the on and off styles for the text labels */
    #hexmap2 .hex-label tspan.on { display: none; }
    #hexmap2 .hex-label tspan.off { display: block; }
    #hexmap2 .hex-label tspan.big { font-weight: bold; font-size: 1.2em; }
    #hexmap2 .hex-label.hover tspan.on { display: block; }
    #hexmap2 .hex-label.hover tspan.off { display: none; }

  </style>
</head>

<body>
  <div class="maincontent">

    <h1 id="areaname"></h1>

    <div><span  class="badge bg-success">Most similar</span><span id="mostsimilar"></span></div>
    <div><span  class="badge bg-danger">Least similar</span><span id="leastsimilar"></span></div>

    <div id="my_dataviz" class=""></div>




    <!--script src="../../web/js/d3.min.js"></script-->



  </div>

<script>


function generate_d3_map() {

    d3
    .select("#my_dataviz")
    .attr("width", "100%");

    const svg = d3
    .select("#my_dataviz")
    .append("svg")
    .attr("width", "100%");

    width = svg.style("width").replace(/px/g,'');
    height = svg.style("height").replace(/px/g,'');;

    var projection = d3.geoMercator()
      .translate([width / 2, height  ])
      .scale((width - 1) / 2 / Math.PI);

    const path = d3.geoPath()
      .projection(projection);

    const zoom = d3.zoom()
      .on('zoom', zoomed);

    const g = svg.append('g');

    svg.call(zoom);
    var d3data = d3.map();

    var colorScale = d3.scaleThreshold()
      .domain([0.0, 0.3, 0.6, 0.7, 0.8, 0.9, 0.95, 0.99, 1])
      .range(d3.schemeBlues[8]);
    jQuery.each(window.similarity.similarity_all, function(key, value) {
        mykey = value['code'];
        d3data.set(mykey, value['similarity']);
      });

    // Choose NUTS3/NUTS2
    if (window.similarity.level == '3') {
      geojsonfile = '../data/nuts3.geojson';
    } else if (window.similarity.level == '2') {
      geojsonfile = '../data/nuts2.geojson';
    }
    // d3.json('../data/nuts3.geojson',
    d3.json(geojsonfile,

    function (error,data) {
      g
        .selectAll("path")
        .data(data.features)
        .enter()
        .append("path")
          // draw each country
          .attr("d", d3.geoPath()
            .projection(projection)
          )
          // set the color of each country
          .attr("fill", function (d) {
            if (window.similarity['code'] != d.properties.NUTS_ID) {
              d.similarity = d3data.get(d.properties.NUTS_ID) || 0;
              return colorScale(d.similarity);
            } else {
              return '#ff0000';
            }
          })
          .style("stroke", "transparent")
          .style("opacity", .8)
          .on("click", function (d) {
             nutsid=(d.properties.NUTS_ID).trim();
             window.location.href="region.php?nutsid="+nutsid;
          })
          .on("mouseover", function (d) {

              var NUTS_ID = (d.properties.NUTS_ID).trim();

              var similarity = 1;
              if (d.hasOwnProperty('similarity')) {
                similarity = Math.round( (Number(d.similarity)+Number.EPSILON) * 100) /100 ;
              }

              if (!NUTS_ID) {
                alert(d);
                            }

              //               var div = d3.select("body").append("div")
              //               .attr("class", "tooltip")
              //               .attr("id", "tooltipdiv")
              //               .style("opacity", 0);
              //
              // div.transition()
              //   .duration(100)
              //   .style("opacity", .9);
              //
              //   div.html(d.properties.NUTS_NAME + "<br/>" + similarity*100   + "%")
              //     .style("left", (d3.event.pageX) + "px")
              //     .style("top", (d3.event.pageY - 28) + "px");
          })
          .on("mouseleave", function(d) {

              var div = d3.select("#tooltipdiv");
              div.remove();

          });
       });

    function zoomed() {
      g
        .selectAll('path') // To prevent stroke width from scaling
        .attr('transform', d3.event.transform);
    }

    d3.select('#zoom-in').on('click', function() {
      // Ordinal zooming
      zoom.scaleBy(svg,  1.3);
    });

    d3.select('#zoom-out').on('click', function() {
      // Ordinal zooming
      zoom.scaleBy(svg, 1 / 1.3);
    });



}





    $(document).ready( function() {
      $.getJSON("widget-getdata.php?code=<?php echo $nutsid;?>", function(data){
          window.similarity = data;
          $('#areaname').html(data.name + " " + "(" + data.nuts0name + ")");

          $('#mostsimilar').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_all_top[0].code + "'>" +(data.similarity_all_top[0]).name + "</a> (" + (data.similarity_all_top[0]).country + ")" + " " + ((data.similarity_all_top[0]).similarity*100).toFixed(0) + "%");
          $('#leastsimilar').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_all_bottom[0].code + "'>" + (data.similarity_all_bottom[0]).name + "</a> (" + (data.similarity_all_bottom[0]).country + ")" + " " + ((data.similarity_all_bottom[0]).similarity*100).toFixed(0) + "%");
          generate_d3_map();
      }).fail(function(){
          alert("Sorry, an error has occurred. Please try again later.");
      });



    } );
</script>
</body>
</html>
