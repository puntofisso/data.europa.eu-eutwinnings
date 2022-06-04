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



  <style>

@import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
  h1 { font-family: 'Ubuntu'; font-size: 30px; color: #001d85; margin-bottom:20px;}



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
  <hr/>
    <div><span  class="badge bg-success">Most similar, same country</span><span id="ms-sc"></span></div>
    <div><span  class="badge bg-danger">Least similar, same country</span><span id="ls-sc"></span></div>
    <div><span  class="badge bg-success">Most similar, diff country</span><span id="ms-dc"></span></div>
    <div><span  class="badge bg-danger">Least similar, diff country</span><span id="ls-dc"></span></div>
    <div><span  class="badge bg-success">Most similar, higher GDP</span><span id="ms-hg"></span></div>
    <div><span  class="badge bg-danger">Least similar, higher GDP</span><span id="ls-hg"></span></div>




    <!--script src="../../web/js/d3.min.js"></script-->



  </div>

<script>






    $(document).ready( function() {
      $.getJSON("widget-getdata.php?code=<?php echo $nutsid;?>", function(data){
          window.similarity = data;
          $('#areaname').html(data.name + " " + "(" + data.nuts0name + ")");

          $('#mostsimilar').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_all_top[0].code + "'>" +(data.similarity_all_top[0]).name + "</a> (" + (data.similarity_all_top[0]).country + ")" + " " + ((data.similarity_all_top[0]).similarity*100).toFixed(0) + "%");
          $('#leastsimilar').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_all_bottom[0].code + "'>" + (data.similarity_all_bottom[0]).name + "</a> (" + (data.similarity_all_bottom[0]).country + ")" + " " + ((data.similarity_all_bottom[0]).similarity*100).toFixed(0) + "%");


          $('#ms-sc').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_same_country_top[0].code + "'>" +(data.similarity_same_country_top[0]).name + "</a>");
          $('#ls-sc').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_same_country_bottom[0].code + "'>" + (data.similarity_same_country_bottom[0]).name + "</a>");
          $('#ms-dc').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_diff_country_top[0].code + "'>" +(data.similarity_diff_country_top[0]).name + "</a>");
          $('#ls-dc').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_diff_country_bottom[0].code + "'>" + (data.similarity_diff_country_bottom[0]).name + "</a>");
          $('#ms-hg').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_higher_gdppps_top[0].code + "'>" +(data.similarity_higher_gdppps_top[0]).name + "</a>");
          $('#ls-hg').html("<a href='https://data-europa-eu.eu-twinnings.site/region.php?nutsid=" + data.similarity_higher_gdppps_bottom[0].code + "'>" + (data.similarity_higher_gdppps_bottom[0]).name + "</a>");

      }).fail(function(){
          alert("Sorry, an error has occurred. Please try again later.");
      });



    } );
</script>
</body>
</html>
