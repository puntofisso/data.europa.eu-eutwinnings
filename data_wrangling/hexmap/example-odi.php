<?php
?>
<html>
<head>
<style>
#hexmap1 { height: 300px; width: 100%; }
#hexmap2 { height: 500px; width: 100%; animation-duration: 0.3s; }
#hexmap2 .hex-cell { stroke: white; stroke-width: 2; transition: fill 0.3s ease-in, stroke 0.3s ease-in, stroke-width 0.3s ease-in; }
/* Make the hexagon larger when hovered */
#hexmap2 .hex-cell.hover { stroke-width: 4px; transform: scale(1.75); }
/* Set the on and off styles for the text labels */
#hexmap2 .hex-label tspan.on { display: none; }
#hexmap2 .hex-label tspan.off { display: block; }
#hexmap2 .hex-label tspan.big { font-weight: bold; font-size: 1.2em; }
#hexmap2 .hex-label.hover tspan.on { display: block; }
#hexmap2 .hex-label.hover tspan.off { display: none; }
</style>
</head>
<body>
<div id="hexmap2"></div>
<!--script src="../../web/js/d3.min.js"></script-->
<script src="odi.hexmap.min.js"></script>
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
			tspans = '<tspan class="off">'+txt.substr(0,3)+'</tspan>';
			lines = txt.split(/ /);
			//lines.push(attr.hex.pop.toLocaleString());
			for(var i = 0; i < lines.length; i++){
				tspans += '<tspan class="on'+(i==lines.length-1 ? ' big':'')+'" y="'+(attr.y + (i-lines.length/2+0.5)*attr['font-size'])+'" x="'+attr.x+'">'+lines[i]+'</tspan>';
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
	// 'hexjson':{
	// 	"layout":"odd-r",
	// 	"hexes": {
	// 		"E05001425":{"n":"Guiseley and Rawdon","q":-3,"r":3,"pop":18253,"colour":"rgb(247, 171, 45)"},
	// 		"E05001437":{"n":"Otley and Yeadon","q":-2,"r":3,"pop":17616,"colour":"rgb(246, 166, 47)"},
	// 		"E05001411":{"n":"Adel and Wharfedale","q":-1,"r":3,"pop":15919,"colour":"rgb(248, 186, 38)"},
	// 		"E05001412":{"n":"Alwoodley","q":0,"r":3,"pop":17890,"colour":"rgb(245, 150, 55)"},
	// 		"E05001426":{"n":"Harewood","q":1,"r":3,"pop":15194,"colour":"rgb(249, 188, 38)"},
	// 		"E05001443":{"n":"Wetherby","q":2,"r":3,"pop":15753,"colour":"rgb(247, 172, 45)"},
	// 		"E05001428":{"n":"Horsforth","q":-2,"r":2,"pop":17318,"colour":"rgb(247, 172, 45)"},
	// 		"E05001442":{"n":"Weetwood","q":-1,"r":2,"pop":15777,"colour":"rgb(246, 160, 50)"},
	// 		"E05001434":{"n":"Moortown","q":0,"r":2,"pop":17595,"colour":"rgb(246, 161, 50)"},
	// 		"E05001440":{"n":"Roundhay","q":1,"r":2,"pop":17419,"colour":"rgb(247, 170, 45)"},
	// 		"E05001418":{"n":"Calverley and Farsley","q":-4,"r":1,"pop":18009,"colour":"rgb(245, 150, 54)"},
	// 		"E05001416":{"n":"Bramley and Stanningley","q":-3,"r":1,"pop":16582,"colour":"rgb(236, 61, 95)"},
	// 		"E05001432":{"n":"Kirkstall","q":-2,"r":1,"pop":15547,"colour":"rgb(239, 91, 82)"},
	// 		"E05001427":{"n":"Headingley and Hyde Park","q":-1,"r":1,"pop":19339,"colour":"rgb(230, 9, 119)"},
	// 		"E05001419":{"n":"Chapel Allerton","q":0,"r":1,"pop":17792,"colour":"rgb(241, 117, 70)"},
	// 		"E05001430":{"n":"Killingbeck and Seacroft","q":1,"r":1,"pop":16467,"colour":"rgb(233, 36, 107)"},
	// 		"E05001438":{"n":"Pudsey","q":-3,"r":0,"pop":18485,"colour":"rgb(244, 139, 60)"},
	// 		"E05001414":{"n":"Armley","q":-2,"r":0,"pop":16270,"colour":"rgb(235, 54, 99)"},
	// 		"E05001429":{"n":"Little London and Woodhouse","q":-1,"r":0,"pop":14367,"colour":"rgb(230, 0, 124)"},
	// 		"E05001424":{"n":"Gipton and Harehills","q":0,"r":0,"pop":16350,"colour":"rgb(235, 58, 97)"},
	// 		"E05001421":{"n":"Cross Gates and Whinmoor","q":1,"r":0,"pop":17819,"colour":"rgb(239, 91, 81)"},
	// 		"E05001422":{"n":"Farnley and Wortley","q":-3,"r":-1,"pop":17908,"colour":"rgb(237, 73, 90)"},
	// 		"E05001415":{"n":"Beeston and Holbeck","q":-2,"r":-1,"pop":15203,"colour":"rgb(235, 54, 98)"},
	// 		"E05001420":{"n":"Hunslet and Riverside","q":-1,"r":-1,"pop":17054,"colour":"rgb(236, 68, 92)"},
	// 		"E05001417":{"n":"Burmantofts and Richmond Hill","q":0,"r":-1,"pop":15522,"colour":"rgb(235, 52, 100)"},
	// 		"E05001441":{"n":"Temple Newsam","q":1,"r":-1,"pop":16437,"colour":"rgb(240, 106, 75)"},
	// 		"E05001435":{"n":"Morley North","q":-2,"r":-2,"pop":17733,"colour":"rgb(241, 109, 73)"},
	// 		"E05001433":{"n":"Middleton Park","q":-1,"r":-2,"pop":19135,"colour":"rgb(234, 44, 103)"},
	// 		"E05001439":{"n":"Rothwell","q":0,"r":-2,"pop":15889,"colour":"rgb(243, 133, 62)"},
	// 		"E05001423":{"n":"Garforth and Swillington","q":1,"r":-2,"pop":16260,"colour":"rgb(247, 170, 45)"},
	// 		"E05001436":{"n":"Morley South","q":-2,"r":-3,"pop":16684,"colour":"rgb(239, 93, 81)"},
	// 		"E05001413":{"n":"Ardsley and Robin Hood","q":-1,"r":-3,"pop":17443,"colour":"rgb(239, 97, 79)"},
	// 		"E05001431":{"n":"Kippax and Methley","q":0,"r":-3,"pop":16355,"colour":"rgb(242, 118, 69)"}
	// 	}
	// }
});
</script>
</body>
</html>
