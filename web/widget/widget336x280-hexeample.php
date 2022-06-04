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
  h1 { font-family: 'Ubuntu'; font-size: 40px; color: #001d85; margin-bottom:1px;}



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

    <div id="mostsimilar" class="badge bg-success"></div>
    <div id="leastsimilar" class="badge bg-danger"></div>

    <div id="hexmap2"></div>




    <!--script src="../../web/js/d3.min.js"></script-->
    <script src="../js/odi.hexmap.min.js"></script>
    <script>
    hex = new ODI.hexmap(document.getElementById('hexmap2'),{
    	'label':{
    		'show': true,	// Show a label
    		'clip': true,	// Make sure the label is clipped to the hexagon
    		// Define a function to format the hex labels
    		// It is passed:
    		//  * txt - a text string with the hex's name
    		//  * attr - an object containing:
    		//			.* size - the size in pixels
    		//			.* font-size - the font size in pixels
    		//			.* x - the horizontal position in pixels
    		//			.* y - the vertical position in pixels
    		//			.* hex - the hexagon's HexJSON properties
    		'format': function(txt,attr){
    			// tspans = '<tspan class="off">'+txt.substr(0,3)+'</tspan>';
          tspans = '<tspan class="off"></tspan>';
    			lines = txt.split(/ /);
    			//lines.push(attr.hex.pop.toLocaleString());
    			for(var i = 0; i < lines.length; i++){
    				// tspans += '<tspan class="on'+(i==lines.length-1 ? ' big':'')+'" y="'+(attr.y + (i-lines.length/2+0.5)*attr['font-size'])+'" x="'+attr.x+'">'+lines[i]+'</tspan>';
            tspans += '<tspan class="on"></tspan>';
    			}
    			return tspans;
    		}
    	},
    	// The HexJSON layout
    	'hexjson': {
    			"layout":"odd-r",
    			"hexes": {
    				"LI000":{"n":"Liechtenstein","id":"LI000","name":"Liechtenstein","q":0,"r":0},
    				"AT111":{"n":"Mittelburgenland","id":"AT111","name":"Mittelburgenland","q":1,"r":0},
    				"AT112":{"n":"Nordburgenland","id":"AT112","name":"Nordburgenland","q":2,"r":0},
    				"AT113":{"n":"Südburgenland","id":"AT113","name":"Südburgenland","q":3,"r":0},
    				"AT121":{"n":"Mostviertel-Eisenwurzen","id":"AT121","name":"Mostviertel-Eisenwurzen","q":4,"r":0},
    				"AT122":{"n":"Niederösterreich-Süd","id":"AT122","name":"Niederösterreich-Süd","q":5,"r":0},
    				"AT123":{"n":"Sankt Pölten","id":"AT123","name":"Sankt Pölten","q":6,"r":0},
    				"AT124":{"n":"Waldviertel","id":"AT124","name":"Waldviertel","q":7,"r":0},
    				"AT125":{"n":"Weinviertel","id":"AT125","name":"Weinviertel","q":0,"r":-1},
    				"AT126":{"n":"Wiener Umland/Nordteil","id":"AT126","name":"Wiener Umland/Nordteil","q":1,"r":-1},
    				"AT127":{"n":"Wiener Umland/Südteil","id":"AT127","name":"Wiener Umland/Südteil","q":2,"r":-1},
    				"AT130":{"n":"Wien","id":"AT130","name":"Wien","q":3,"r":-1},
    				"AT211":{"n":"Klagenfurt-Villach","id":"AT211","name":"Klagenfurt-Villach","q":4,"r":-1},
    				"AT212":{"n":"Oberkärnten","id":"AT212","name":"Oberkärnten","q":5,"r":-1},
    				"AT213":{"n":"Unterkärnten","id":"AT213","name":"Unterkärnten","q":6,"r":-1},
    				"AT221":{"n":"Graz","id":"AT221","name":"Graz","q":0,"r":-2},
    				"AT222":{"n":"Liezen","id":"AT222","name":"Liezen","q":1,"r":-2},
    				"AT223":{"n":"Östliche Obersteiermark","id":"AT223","name":"Östliche Obersteiermark","q":2,"r":-2},
    				"AT224":{"n":"Oststeiermark","id":"AT224","name":"Oststeiermark","q":3,"r":-2},
    				"AT225":{"n":"West- und Südsteiermark","id":"AT225","name":"West- und Südsteiermark","q":4,"r":-2},
    				"AT226":{"n":"Westliche Obersteiermark","id":"AT226","name":"Westliche Obersteiermark","q":5,"r":-2},
    				"AT311":{"n":"Innviertel","id":"AT311","name":"Innviertel","q":6,"r":-2},
    				"AT312":{"n":"Linz-Wels","id":"AT312","name":"Linz-Wels","q":0,"r":-3},
    				"AT313":{"n":"Mühlviertel","id":"AT313","name":"Mühlviertel","q":1,"r":-3},
    				"AT314":{"n":"Steyr-Kirchdorf","id":"AT314","name":"Steyr-Kirchdorf","q":2,"r":-3},
    				"AT315":{"n":"Traunviertel","id":"AT315","name":"Traunviertel","q":3,"r":-3},
    				"AT321":{"n":"Lungau","id":"AT321","name":"Lungau","q":4,"r":-3},
    				"AT322":{"n":"Pinzgau-Pongau","id":"AT322","name":"Pinzgau-Pongau","q":5,"r":-3},
    				"AT323":{"n":"Salzburg und Umgebung","id":"AT323","name":"Salzburg und Umgebung","q":6,"r":-3},
    				"AT331":{"n":"Außerfern","id":"AT331","name":"Außerfern","q":1,"r":1},
    				"AT332":{"n":"Innsbruck","id":"AT332","name":"Innsbruck","q":2,"r":1},
    				"AT333":{"n":"Osttirol","id":"AT333","name":"Osttirol","q":3,"r":1},
    				"AT334":{"n":"Tiroler Oberland","id":"AT334","name":"Tiroler Oberland","q":4,"r":1},
    				"AT335":{"n":"Tiroler Unterland","id":"AT335","name":"Tiroler Unterland","q":5,"r":1},
    				"AT341":{"n":"Bludenz-Bregenzer Wald","id":"AT341","name":"Bludenz-Bregenzer Wald","q":6,"r":1},
    				"AT342":{"n":"Rheintal-Bodenseegebiet","id":"AT342","name":"Rheintal-Bodenseegebiet","q":7,"r":1}
    			}
    	}
    });
    </script>


  </div>

<script>
    $(document).ready( function() {
      $.getJSON("widget-getdata.php?code=<?php echo $nutsid;?>", function(data){
          window.similarity = data;
          $('#areaname').html(data.name + " " + "(" + data.nuts0name + ")");

          $('#mostsimilar').html("Most similar: " + (data.similarity_all_top[0]).name + "(" + (data.similarity_all_top[0]).country + ")" + " " + ((data.similarity_all_top[0]).similarity*100).toFixed(0) + "%");
          $('#leastsimilar').html("Least similar: " + (data.similarity_all_bottom[0]).name + "(" + (data.similarity_all_bottom[0]).country + ")" + " " + ((data.similarity_all_bottom[0]).similarity*100).toFixed(0) + "%");
      }).fail(function(){
          alert("Sorry, an error has occurred. Please try again later.");
      });
    } );
</script>
</body>
</html>
