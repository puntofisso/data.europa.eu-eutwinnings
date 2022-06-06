<?php
?>
<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./MD-assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="favicon.ico">

  <link href="css/jquery-ui.min.css" rel="stylesheet">
  <script src="js/external/jquery/jquery.js"></script>
  <script src="js/jquery-ui.min.js"></script>

    <script src="js/d3.v4.js"></script>
            <script src="js/d3-scale-chromatic.v1.min.js"></script>
            <script src="js/d3-geo-projection.v2.min.js"></script>

        <link href="css/select2.min.css" rel="stylesheet" />
        <script src="js/select2.min.js"></script>
  <title>
    EU Twinnings
  </title>
  <!--     Fonts and icons     -->
  <!-- link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- Nucleo Icons -->
  <link href="./MD-assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./MD-assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./MD-assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link href="css/eutwinnings.css" rel="stylesheet">
</head>

<body class="g-sidenav-show  bg-gray-200">

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">

      <div class="container-fluid py-1 px-3">


        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <!--div class="ms-md-auto pe-md-3 d-flex align-items-center"-->
            <a href="/" class="navbar-brand">
                <img src="images/EUTwinningsLogo2.png" height="28" alt="CoolBrand"></img><h3>EU Twinnings</h3>
            </a>
            <div class="input-group input-group-outline">

              <select id="select_Nuts" class="js-example-basic-single" name="state">
              <option></option>
              <optgroup label="Belgique/België">
              <option value="BE231">Arr. Aalst</option>
              <option value="BE211">Arr. Antwerpen</option>
              <option value="BE341">Arr. Arlon</option>
              <option value="BE32A">Arr. Ath</option>
              <option value="BE342">Arr. Bastogne</option>
              <option value="BE251">Arr. Brugge</option>
              <option value="BE32B">Arr. Charleroi</option>
              <option value="BE232">Arr. Dendermonde</option>
              <option value="BE252">Arr. Diksmuide</option>
              <option value="BE351">Arr. Dinant</option>
              <option value="BE233">Arr. Eeklo</option>
              <option value="BE234">Arr. Gent</option>
              <option value="BE241">Arr. Halle-Vilvoorde</option>
              <option value="BE224">Arr. Hasselt</option>
              <option value="BE331">Arr. Huy</option>
              <option value="BE253">Arr. Ieper</option>
              <option value="BE254">Arr. Kortrijk</option>
              <option value="BE329">Arr. La Louvière</option>
              <option value="BE242">Arr. Leuven</option>
              <option value="BE332">Arr. Liège</option>
              <option value="BE225">Arr. Maaseik</option>
              <option value="BE343">Arr. Marche-en-Famenne</option>
              <option value="BE212">Arr. Mechelen</option>
              <option value="BE323">Arr. Mons</option>
              <option value="BE352">Arr. Namur</option>
              <option value="BE344">Arr. Neufchâteau</option>
              <option value="BE310">Arr. Nivelles</option>
              <option value="BE255">Arr. Oostende</option>
              <option value="BE235">Arr. Oudenaarde</option>
              <option value="BE353">Arr. Philippeville</option>
              <option value="BE256">Arr. Roeselare</option>
              <option value="BE236">Arr. Sint-Niklaas</option>
              <option value="BE32C">Arr. Soignies</option>
              <option value="BE32D">Arr. Thuin</option>
              <option value="BE257">Arr. Tielt</option>
              <option value="BE223">Arr. Tongeren</option>
              <option value="BE328">Arr. Tournai-Mouscron</option>
              <option value="BE213">Arr. Turnhout</option>
              <option value="BE335">Arr. Verviers — communes francophones</option>
              <option value="BE258">Arr. Veurne</option>
              <option value="BE345">Arr. Virton</option>
              <option value="BE334">Arr. Waremme</option>
              <option value="BE100">Arr. de Bruxelles-Capitale/Arr. Brussel-Hoofdstad</option>
              <option value="BE336">Bezirk Verviers — Deutschsprachige Gemeinschaft</option>
              <optgroup label="Danmark">
              <option value="DK014">Bornholm</option>
              <option value="DK011">Byen København</option>
              <option value="DK031">Fyn</option>
              <option value="DK012">Københavns omegn</option>
              <option value="DK050">Nordjylland</option>
              <option value="DK013">Nordsjælland</option>
              <option value="DK032">Sydjylland</option>
              <option value="DK022">Vest- og Sydsjælland</option>
              <option value="DK041">Vestjylland</option>
              <option value="DK042">Østjylland</option>
              <option value="DK021">Østsjælland</option>
              <optgroup label="Deutschland">
              <option value="DEB12">Ahrweiler</option>
              <option value="DE275">Aichach-Friedberg</option>
              <option value="DE145">Alb-Donau-Kreis</option>
              <option value="DEG0M">Altenburger Land</option>
              <option value="DEB13">Altenkirchen (Westerwald)</option>
              <option value="DEE04">Altmarkkreis Salzwedel</option>
              <option value="DE214">Altötting</option>
              <option value="DEB3B">Alzey-Worms</option>
              <option value="DE231">Amberg, Kreisfreie Stadt</option>
              <option value="DE234">Amberg-Sulzbach</option>
              <option value="DE946">Ammerland</option>
              <option value="DEE05">Anhalt-Bitterfeld</option>
              <option value="DE251">Ansbach, Kreisfreie Stadt</option>
              <option value="DE256">Ansbach, Landkreis</option>
              <option value="DE261">Aschaffenburg, Kreisfreie Stadt</option>
              <option value="DE264">Aschaffenburg, Landkreis</option>
              <option value="DE271">Augsburg, Kreisfreie Stadt</option>
              <option value="DE276">Augsburg, Landkreis</option>
              <option value="DE947">Aurich</option>
              <option value="DEB3C">Bad Dürkheim</option>
              <option value="DE265">Bad Kissingen</option>
              <option value="DEB14">Bad Kreuznach</option>
              <option value="DE216">Bad Tölz-Wolfratshausen</option>
              <option value="DE121">Baden-Baden, Stadtkreis</option>
              <option value="DE241">Bamberg, Kreisfreie Stadt</option>
              <option value="DE245">Bamberg, Landkreis</option>
              <option value="DE405">Barnim</option>
              <option value="DED2C">Bautzen</option>
              <option value="DE242">Bayreuth, Kreisfreie Stadt</option>
              <option value="DE246">Bayreuth, Landkreis</option>
              <option value="DE215">Berchtesgadener Land</option>
              <option value="DE715">Bergstraße</option>
              <option value="DE300">Berlin</option>
              <option value="DEB22">Bernkastel-Wittlich</option>
              <option value="DE146">Biberach</option>
              <option value="DEA41">Bielefeld, Kreisfreie Stadt</option>
              <option value="DEB15">Birkenfeld</option>
              <option value="DEA51">Bochum, Kreisfreie Stadt</option>
              <option value="DE147">Bodenseekreis</option>
              <option value="DEA22">Bonn, Kreisfreie Stadt</option>
              <option value="DEA34">Borken</option>
              <option value="DEA31">Bottrop, Kreisfreie Stadt</option>
              <option value="DE401">Brandenburg an der Havel, Kreisfreie Stadt</option>
              <option value="DE911">Braunschweig, Kreisfreie Stadt</option>
              <option value="DE132">Breisgau-Hochschwarzwald</option>
              <option value="DE501">Bremen, Kreisfreie Stadt</option>
              <option value="DE502">Bremerhaven, Kreisfreie Stadt</option>
              <option value="DEE08">Burgenlandkreis</option>
              <option value="DE112">Böblingen</option>
              <option value="DEE07">Börde</option>
              <option value="DE12A">Calw</option>
              <option value="DE931">Celle</option>
              <option value="DE235">Cham</option>
              <option value="DED41">Chemnitz, Kreisfreie Stadt</option>
              <option value="DE948">Cloppenburg</option>
              <option value="DE243">Coburg, Kreisfreie Stadt</option>
              <option value="DE247">Coburg, Landkreis</option>
              <option value="DEB1C">Cochem-Zell</option>
              <option value="DEA35">Coesfeld</option>
              <option value="DE402">Cottbus, Kreisfreie Stadt</option>
              <option value="DE932">Cuxhaven</option>
              <option value="DE217">Dachau</option>
              <option value="DE406">Dahme-Spreewald</option>
              <option value="DE711">Darmstadt, Kreisfreie Stadt</option>
              <option value="DE716">Darmstadt-Dieburg</option>
              <option value="DE224">Deggendorf</option>
              <option value="DE941">Delmenhorst, Kreisfreie Stadt</option>
              <option value="DEE01">Dessau-Roßlau, Kreisfreie Stadt</option>
              <option value="DE922">Diepholz</option>
              <option value="DE277">Dillingen a.d. Donau</option>
              <option value="DE22C">Dingolfing-Landau</option>
              <option value="DEF05">Dithmarschen</option>
              <option value="DE27D">Donau-Ries</option>
              <option value="DEB3D">Donnersbergkreis</option>
              <option value="DEA52">Dortmund, Kreisfreie Stadt</option>
              <option value="DED21">Dresden, Kreisfreie Stadt</option>
              <option value="DEA12">Duisburg, Kreisfreie Stadt</option>
              <option value="DEA26">Düren</option>
              <option value="DEA11">Düsseldorf, Kreisfreie Stadt</option>
              <option value="DE218">Ebersberg</option>
              <option value="DEG06">Eichsfeld</option>
              <option value="DE219">Eichstätt</option>
              <option value="DEB23">Eifelkreis Bitburg-Prüm</option>
              <option value="DEG0N">Eisenach, Kreisfreie Stadt</option>
              <option value="DE407">Elbe-Elster</option>
              <option value="DE942">Emden, Kreisfreie Stadt</option>
              <option value="DE133">Emmendingen</option>
              <option value="DE949">Emsland</option>
              <option value="DEA56">Ennepe-Ruhr-Kreis</option>
              <option value="DE12B">Enzkreis</option>
              <option value="DE21A">Erding</option>
              <option value="DEG01">Erfurt, Kreisfreie Stadt</option>
              <option value="DE252">Erlangen, Kreisfreie Stadt</option>
              <option value="DE257">Erlangen-Höchstadt</option>
              <option value="DED42">Erzgebirgskreis</option>
              <option value="DEA13">Essen, Kreisfreie Stadt</option>
              <option value="DE113">Esslingen</option>
              <option value="DEA28">Euskirchen</option>
              <option value="DEF01">Flensburg, Kreisfreie Stadt</option>
              <option value="DE248">Forchheim</option>
              <option value="DEB31">Frankenthal (Pfalz), Kreisfreie Stadt</option>
              <option value="DE403">Frankfurt (Oder), Kreisfreie Stadt</option>
              <option value="DE712">Frankfurt am Main, Kreisfreie Stadt</option>
              <option value="DE131">Freiburg im Breisgau, Stadtkreis</option>
              <option value="DE21B">Freising</option>
              <option value="DE12C">Freudenstadt</option>
              <option value="DE225">Freyung-Grafenau</option>
              <option value="DE94A">Friesland (DE)</option>
              <option value="DE732">Fulda</option>
              <option value="DE21C">Fürstenfeldbruck</option>
              <option value="DE253">Fürth, Kreisfreie Stadt</option>
              <option value="DE258">Fürth, Landkreis</option>
              <option value="DE21D">Garmisch-Partenkirchen</option>
              <option value="DEA32">Gelsenkirchen, Kreisfreie Stadt</option>
              <option value="DEG02">Gera, Kreisfreie Stadt</option>
              <option value="DEB3E">Germersheim</option>
              <option value="DE721">Gießen, Landkreis</option>
              <option value="DE914">Gifhorn</option>
              <option value="DE916">Goslar</option>
              <option value="DEG0C">Gotha</option>
              <option value="DE94B">Grafschaft Bentheim</option>
              <option value="DEG0L">Greiz</option>
              <option value="DE717">Groß-Gerau</option>
              <option value="DE114">Göppingen</option>
              <option value="DED2D">Görlitz</option>
              <option value="DE91C">Göttingen</option>
              <option value="DE278">Günzburg</option>
              <option value="DEA42">Gütersloh</option>
              <option value="DEA53">Hagen, Kreisfreie Stadt</option>
              <option value="DEE02">Halle (Saale), Kreisfreie Stadt</option>
              <option value="DE600">Hamburg</option>
              <option value="DE923">Hameln-Pyrmont</option>
              <option value="DEA54">Hamm, Kreisfreie Stadt</option>
              <option value="DE933">Harburg</option>
              <option value="DEE09">Harz</option>
              <option value="DE408">Havelland</option>
              <option value="DE267">Haßberge</option>
              <option value="DE938">Heidekreis</option>
              <option value="DE125">Heidelberg, Stadtkreis</option>
              <option value="DE11C">Heidenheim</option>
              <option value="DE118">Heilbronn, Landkreis</option>
              <option value="DE117">Heilbronn, Stadtkreis</option>
              <option value="DEA29">Heinsberg</option>
              <option value="DE917">Helmstedt</option>
              <option value="DEA43">Herford</option>
              <option value="DEA55">Herne, Kreisfreie Stadt</option>
              <option value="DE733">Hersfeld-Rotenburg</option>
              <option value="DEF06">Herzogtum Lauenburg</option>
              <option value="DEG0E">Hildburghausen</option>
              <option value="DE925">Hildesheim</option>
              <option value="DEA57">Hochsauerlandkreis</option>
              <option value="DE718">Hochtaunuskreis</option>
              <option value="DE244">Hof, Kreisfreie Stadt</option>
              <option value="DE249">Hof, Landkreis</option>
              <option value="DE119">Hohenlohekreis</option>
              <option value="DE926">Holzminden</option>
              <option value="DEA44">Höxter</option>
              <option value="DEG0F">Ilm-Kreis</option>
              <option value="DE211">Ingolstadt, Kreisfreie Stadt</option>
              <option value="DEG03">Jena, Kreisfreie Stadt</option>
              <option value="DEE06">Jerichower Land</option>
              <option value="DEB32">Kaiserslautern, Kreisfreie Stadt</option>
              <option value="DEB3F">Kaiserslautern, Landkreis</option>
              <option value="DE123">Karlsruhe, Landkreis</option>
              <option value="DE122">Karlsruhe, Stadtkreis</option>
              <option value="DE731">Kassel, Kreisfreie Stadt</option>
              <option value="DE734">Kassel, Landkreis</option>
              <option value="DE272">Kaufbeuren, Kreisfreie Stadt</option>
              <option value="DE226">Kelheim</option>
              <option value="DE273">Kempten (Allgäu), Kreisfreie Stadt</option>
              <option value="DEF02">Kiel, Kreisfreie Stadt</option>
              <option value="DE268">Kitzingen</option>
              <option value="DEA1B">Kleve</option>
              <option value="DEB11">Koblenz, Kreisfreie Stadt</option>
              <option value="DE138">Konstanz</option>
              <option value="DEA14">Krefeld, Kreisfreie Stadt</option>
              <option value="DE24A">Kronach</option>
              <option value="DE24B">Kulmbach</option>
              <option value="DEB3G">Kusel</option>
              <option value="DEG0A">Kyffhäuserkreis</option>
              <option value="DEA23">Köln, Kreisfreie Stadt</option>
              <option value="DE722">Lahn-Dill-Kreis</option>
              <option value="DEB33">Landau in der Pfalz, Kreisfreie Stadt</option>
              <option value="DE80K">Landkreis Rostock</option>
              <option value="DE21E">Landsberg am Lech</option>
              <option value="DE221">Landshut, Kreisfreie Stadt</option>
              <option value="DE227">Landshut, Landkreis</option>
              <option value="DE94C">Leer</option>
              <option value="DED52">Leipzig</option>
              <option value="DED51">Leipzig, Kreisfreie Stadt</option>
              <option value="DEA24">Leverkusen, Kreisfreie Stadt</option>
              <option value="DE24C">Lichtenfels</option>
              <option value="DE723">Limburg-Weilburg</option>
              <option value="DE27A">Lindau (Bodensee)</option>
              <option value="DEA45">Lippe</option>
              <option value="DE115">Ludwigsburg</option>
              <option value="DEB34">Ludwigshafen am Rhein, Kreisfreie Stadt</option>
              <option value="DE80O">Ludwigslust-Parchim</option>
              <option value="DE139">Lörrach</option>
              <option value="DEF03">Lübeck, Kreisfreie Stadt</option>
              <option value="DE934">Lüchow-Dannenberg</option>
              <option value="DE935">Lüneburg, Landkreis</option>
              <option value="DEE03">Magdeburg, Kreisfreie Stadt</option>
              <option value="DE719">Main-Kinzig-Kreis</option>
              <option value="DE26A">Main-Spessart</option>
              <option value="DE11B">Main-Tauber-Kreis</option>
              <option value="DE71A">Main-Taunus-Kreis</option>
              <option value="DEB35">Mainz, Kreisfreie Stadt</option>
              <option value="DEB3J">Mainz-Bingen</option>
              <option value="DE126">Mannheim, Stadtkreis</option>
              <option value="DEE0A">Mansfeld-Südharz</option>
              <option value="DE724">Marburg-Biedenkopf</option>
              <option value="DEB17">Mayen-Koblenz</option>
              <option value="DE80J">Mecklenburgische Seenplatte</option>
              <option value="DED2E">Meißen</option>
              <option value="DE274">Memmingen, Kreisfreie Stadt</option>
              <option value="DEC02">Merzig-Wadern</option>
              <option value="DEA1C">Mettmann</option>
              <option value="DE21F">Miesbach</option>
              <option value="DE269">Miltenberg</option>
              <option value="DEA46">Minden-Lübbecke</option>
              <option value="DED43">Mittelsachsen</option>
              <option value="DE409">Märkisch-Oderland</option>
              <option value="DEA58">Märkischer Kreis</option>
              <option value="DEA15">Mönchengladbach, Kreisfreie Stadt</option>
              <option value="DE21G">Mühldorf a. Inn</option>
              <option value="DEA16">Mülheim an der Ruhr, Kreisfreie Stadt</option>
              <option value="DE212">München, Kreisfreie Stadt</option>
              <option value="DE21H">München, Landkreis</option>
              <option value="DEA33">Münster, Kreisfreie Stadt</option>
              <option value="DE127">Neckar-Odenwald-Kreis</option>
              <option value="DE279">Neu-Ulm</option>
              <option value="DE21I">Neuburg-Schrobenhausen</option>
              <option value="DE236">Neumarkt i. d. OPf.</option>
              <option value="DEF04">Neumünster, Kreisfreie Stadt</option>
              <option value="DEC03">Neunkirchen</option>
              <option value="DE25A">Neustadt a. d. Aisch-Bad Windsheim</option>
              <option value="DE237">Neustadt a. d. Waldnaab</option>
              <option value="DEB36">Neustadt an der Weinstraße, Kreisfreie Stadt</option>
              <option value="DEB18">Neuwied</option>
              <option value="DE927">Nienburg (Weser)</option>
              <option value="DEF07">Nordfriesland</option>
              <option value="DEG07">Nordhausen</option>
              <option value="DED53">Nordsachsen</option>
              <option value="DE80M">Nordwestmecklenburg</option>
              <option value="DE918">Northeim</option>
              <option value="DE254">Nürnberg, Kreisfreie Stadt</option>
              <option value="DE259">Nürnberger Land</option>
              <option value="DE27E">Oberallgäu</option>
              <option value="DEA2A">Oberbergischer Kreis</option>
              <option value="DEA17">Oberhausen, Kreisfreie Stadt</option>
              <option value="DE40A">Oberhavel</option>
              <option value="DE40B">Oberspreewald-Lausitz</option>
              <option value="DE71B">Odenwaldkreis</option>
              <option value="DE40C">Oder-Spree</option>
              <option value="DE713">Offenbach am Main, Kreisfreie Stadt</option>
              <option value="DE71C">Offenbach, Landkreis</option>
              <option value="DE943">Oldenburg (Oldenburg), Kreisfreie Stadt</option>
              <option value="DE94D">Oldenburg, Landkreis</option>
              <option value="DEA59">Olpe</option>
              <option value="DE134">Ortenaukreis</option>
              <option value="DE944">Osnabrück, Kreisfreie Stadt</option>
              <option value="DE94E">Osnabrück, Landkreis</option>
              <option value="DE11D">Ostalbkreis</option>
              <option value="DE27B">Ostallgäu</option>
              <option value="DE936">Osterholz</option>
              <option value="DEF08">Ostholstein</option>
              <option value="DE40D">Ostprignitz-Ruppin</option>
              <option value="DEA47">Paderborn</option>
              <option value="DE222">Passau, Kreisfreie Stadt</option>
              <option value="DE228">Passau, Landkreis</option>
              <option value="DE91A">Peine</option>
              <option value="DE21J">Pfaffenhofen a. d. Ilm</option>
              <option value="DE129">Pforzheim, Stadtkreis</option>
              <option value="DEF09">Pinneberg</option>
              <option value="DEB37">Pirmasens, Kreisfreie Stadt</option>
              <option value="DEF0A">Plön</option>
              <option value="DE404">Potsdam, Kreisfreie Stadt</option>
              <option value="DE40E">Potsdam-Mittelmark</option>
              <option value="DE40F">Prignitz</option>
              <option value="DE124">Rastatt</option>
              <option value="DE148">Ravensburg</option>
              <option value="DEA36">Recklinghausen</option>
              <option value="DE229">Regen</option>
              <option value="DE232">Regensburg, Kreisfreie Stadt</option>
              <option value="DE238">Regensburg, Landkreis</option>
              <option value="DE929">Region Hannover</option>
              <option value="DEC01">Regionalverband Saarbrücken</option>
              <option value="DE116">Rems-Murr-Kreis</option>
              <option value="DEA18">Remscheid, Kreisfreie Stadt</option>
              <option value="DEF0B">Rendsburg-Eckernförde</option>
              <option value="DE141">Reutlingen</option>
              <option value="DEA27">Rhein-Erft-Kreis</option>
              <option value="DEB1D">Rhein-Hunsrück-Kreis</option>
              <option value="DEA1D">Rhein-Kreis Neuss</option>
              <option value="DEB1A">Rhein-Lahn-Kreis</option>
              <option value="DE128">Rhein-Neckar-Kreis</option>
              <option value="DEB3I">Rhein-Pfalz-Kreis</option>
              <option value="DEA2C">Rhein-Sieg-Kreis</option>
              <option value="DE71D">Rheingau-Taunus-Kreis</option>
              <option value="DEA2B">Rheinisch-Bergischer Kreis</option>
              <option value="DE266">Rhön-Grabfeld</option>
              <option value="DE213">Rosenheim, Kreisfreie Stadt</option>
              <option value="DE21K">Rosenheim, Landkreis</option>
              <option value="DE803">Rostock, Kreisfreie Stadt</option>
              <option value="DE937">Rotenburg (Wümme)</option>
              <option value="DE25B">Roth</option>
              <option value="DE22A">Rottal-Inn</option>
              <option value="DE135">Rottweil</option>
              <option value="DEG0J">Saale-Holzland-Kreis</option>
              <option value="DEG0K">Saale-Orla-Kreis</option>
              <option value="DEE0B">Saalekreis</option>
              <option value="DEG0I">Saalfeld-Rudolstadt</option>
              <option value="DEC04">Saarlouis</option>
              <option value="DEC05">Saarpfalz-Kreis</option>
              <option value="DE912">Salzgitter, Kreisfreie Stadt</option>
              <option value="DEE0C">Salzlandkreis</option>
              <option value="DE928">Schaumburg</option>
              <option value="DEF0C">Schleswig-Flensburg</option>
              <option value="DEG0B">Schmalkalden-Meiningen</option>
              <option value="DE255">Schwabach, Kreisfreie Stadt</option>
              <option value="DE735">Schwalm-Eder-Kreis</option>
              <option value="DE239">Schwandorf</option>
              <option value="DE136">Schwarzwald-Baar-Kreis</option>
              <option value="DE262">Schweinfurt, Kreisfreie Stadt</option>
              <option value="DE26B">Schweinfurt, Landkreis</option>
              <option value="DE804">Schwerin, Kreisfreie Stadt</option>
              <option value="DE11A">Schwäbisch Hall</option>
              <option value="DEF0D">Segeberg</option>
              <option value="DEA5A">Siegen-Wittgenstein</option>
              <option value="DE149">Sigmaringen</option>
              <option value="DEA5B">Soest</option>
              <option value="DEA19">Solingen, Kreisfreie Stadt</option>
              <option value="DEG0H">Sonneberg</option>
              <option value="DEB38">Speyer, Kreisfreie Stadt</option>
              <option value="DE40G">Spree-Neiße</option>
              <option value="DEC06">St. Wendel</option>
              <option value="DE939">Stade</option>
              <option value="DE21L">Starnberg</option>
              <option value="DEF0E">Steinburg</option>
              <option value="DEA37">Steinfurt</option>
              <option value="DEE0D">Stendal</option>
              <option value="DEF0F">Stormarn</option>
              <option value="DE223">Straubing, Kreisfreie Stadt</option>
              <option value="DE22B">Straubing-Bogen</option>
              <option value="DE111">Stuttgart, Stadtkreis</option>
              <option value="DEA2D">Städteregion Aachen</option>
              <option value="DEG04">Suhl, Kreisfreie Stadt</option>
              <option value="DED2F">Sächsische Schweiz-Osterzgebirge</option>
              <option value="DEG0D">Sömmerda</option>
              <option value="DEB3H">Südliche Weinstraße</option>
              <option value="DEB3K">Südwestpfalz</option>
              <option value="DE40H">Teltow-Fläming</option>
              <option value="DE23A">Tirschenreuth</option>
              <option value="DE21M">Traunstein</option>
              <option value="DEB21">Trier, Kreisfreie Stadt</option>
              <option value="DEB25">Trier-Saarburg</option>
              <option value="DE137">Tuttlingen</option>
              <option value="DE142">Tübingen, Landkreis</option>
              <option value="DE40I">Uckermark</option>
              <option value="DE93A">Uelzen</option>
              <option value="DE144">Ulm, Stadtkreis</option>
              <option value="DEA5C">Unna</option>
              <option value="DEG09">Unstrut-Hainich-Kreis</option>
              <option value="DE27C">Unterallgäu</option>
              <option value="DE94F">Vechta</option>
              <option value="DE93B">Verden</option>
              <option value="DEA1E">Viersen</option>
              <option value="DE725">Vogelsbergkreis</option>
              <option value="DED44">Vogtlandkreis</option>
              <option value="DE80N">Vorpommern-Greifswald</option>
              <option value="DE80L">Vorpommern-Rügen</option>
              <option value="DEB24">Vulkaneifel</option>
              <option value="DE736">Waldeck-Frankenberg</option>
              <option value="DE13A">Waldshut</option>
              <option value="DEA38">Warendorf</option>
              <option value="DEG0P">Wartburgkreis</option>
              <option value="DE233">Weiden i. d. Opf, Kreisfreie Stadt</option>
              <option value="DE21N">Weilheim-Schongau</option>
              <option value="DEG05">Weimar, Kreisfreie Stadt</option>
              <option value="DEG0G">Weimarer Land</option>
              <option value="DE25C">Weißenburg-Gunzenhausen</option>
              <option value="DE737">Werra-Meißner-Kreis</option>
              <option value="DEA1F">Wesel</option>
              <option value="DE94G">Wesermarsch</option>
              <option value="DEB1B">Westerwaldkreis</option>
              <option value="DE71E">Wetteraukreis</option>
              <option value="DE714">Wiesbaden, Kreisfreie Stadt</option>
              <option value="DE945">Wilhelmshaven, Kreisfreie Stadt</option>
              <option value="DEE0E">Wittenberg</option>
              <option value="DE94H">Wittmund</option>
              <option value="DE91B">Wolfenbüttel</option>
              <option value="DE913">Wolfsburg, Kreisfreie Stadt</option>
              <option value="DEB39">Worms, Kreisfreie Stadt</option>
              <option value="DE24D">Wunsiedel i. Fichtelgebirge</option>
              <option value="DEA1A">Wuppertal, Kreisfreie Stadt</option>
              <option value="DE263">Würzburg, Kreisfreie Stadt</option>
              <option value="DE26C">Würzburg, Landkreis</option>
              <option value="DE143">Zollernalbkreis</option>
              <option value="DEB3A">Zweibrücken, Kreisfreie Stadt</option>
              <option value="DED45">Zwickau</option>
              <optgroup label="Eesti">
              <option value="EE009">Kesk-Eesti</option>
              <option value="EE00A">Kirde-Eesti</option>
              <option value="EE004">Lääne-Eesti</option>
              <option value="EE008">Lõuna-Eesti</option>
              <option value="EE001">Põhja-Eesti</option>
              <optgroup label="España">
              <option value="ES111">A Coruña</option>
              <option value="ES421">Albacete</option>
              <option value="ES521">Alicante/Alacant</option>
              <option value="ES611">Almería</option>
              <option value="ES211">Araba/Álava</option>
              <option value="ES120">Asturias</option>
              <option value="ES431">Badajoz</option>
              <option value="ES511">Barcelona</option>
              <option value="ES213">Bizkaia</option>
              <option value="ES412">Burgos</option>
              <option value="ES130">Cantabria</option>
              <option value="ES522">Castellón/Castelló</option>
              <option value="ES630">Ceuta</option>
              <option value="ES422">Ciudad Real</option>
              <option value="ES423">Cuenca</option>
              <option value="ES432">Cáceres</option>
              <option value="ES612">Cádiz</option>
              <option value="ES613">Córdoba</option>
              <option value="ES531">Eivissa y Formentera</option>
              <option value="ES703">El Hierro</option>
              <option value="ES704">Fuerteventura</option>
              <option value="ES212">Gipuzkoa</option>
              <option value="ES512">Girona</option>
              <option value="ES705">Gran Canaria</option>
              <option value="ES614">Granada</option>
              <option value="ES424">Guadalajara</option>
              <option value="ES615">Huelva</option>
              <option value="ES241">Huesca</option>
              <option value="ES616">Jaén</option>
              <option value="ES706">La Gomera</option>
              <option value="ES707">La Palma</option>
              <option value="ES230">La Rioja</option>
              <option value="ES708">Lanzarote</option>
              <option value="ES413">León</option>
              <option value="ES513">Lleida</option>
              <option value="ES112">Lugo</option>
              <option value="ES300">Madrid</option>
              <option value="ES532">Mallorca</option>
              <option value="ES640">Melilla</option>
              <option value="ES533">Menorca</option>
              <option value="ES620">Murcia</option>
              <option value="ES617">Málaga</option>
              <option value="ES220">Navarra</option>
              <option value="ES113">Ourense</option>
              <option value="ES414">Palencia</option>
              <option value="ES114">Pontevedra</option>
              <option value="ES415">Salamanca</option>
              <option value="ES416">Segovia</option>
              <option value="ES618">Sevilla</option>
              <option value="ES417">Soria</option>
              <option value="ES514">Tarragona</option>
              <option value="ES709">Tenerife</option>
              <option value="ES242">Teruel</option>
              <option value="ES425">Toledo</option>
              <option value="ES523">Valencia/València</option>
              <option value="ES418">Valladolid</option>
              <option value="ES419">Zamora</option>
              <option value="ES243">Zaragoza</option>
              <option value="ES411">Ávila</option>
              <optgroup label="France">
              <option value="FRK21">Ain</option>
              <option value="FRE21">Aisne</option>
              <option value="FRK11">Allier</option>
              <option value="FRL03">Alpes-Maritimes</option>
              <option value="FRL01">Alpes-de-Haute-Provence</option>
              <option value="FRF21">Ardennes</option>
              <option value="FRK22">Ardèche</option>
              <option value="FRJ21">Ariège</option>
              <option value="FRF22">Aube</option>
              <option value="FRJ11">Aude</option>
              <option value="FRJ22">Aveyron</option>
              <option value="FRF11">Bas-Rhin</option>
              <option value="FRL04">Bouches-du-Rhône</option>
              <option value="FRD11">Calvados</option>
              <option value="FRK12">Cantal</option>
              <option value="FRI31">Charente</option>
              <option value="FRI32">Charente-Maritime</option>
              <option value="FRB01">Cher</option>
              <option value="FRI21">Corrèze</option>
              <option value="FRM01">Corse-du-Sud</option>
              <option value="FRI22">Creuse</option>
              <option value="FRC11">Côte-d’Or</option>
              <option value="FRH01">Côtes-d’Armor</option>
              <option value="FRI33">Deux-Sèvres</option>
              <option value="FRI11">Dordogne</option>
              <option value="FRC21">Doubs</option>
              <option value="FRK23">Drôme</option>
              <option value="FR104">Essonne</option>
              <option value="FRD21">Eure</option>
              <option value="FRB02">Eure-et-Loir</option>
              <option value="FRH02">Finistère</option>
              <option value="FRJ12">Gard</option>
              <option value="FRJ24">Gers</option>
              <option value="FRI12">Gironde</option>
              <option value="FRY10">Guadeloupe</option>
              <option value="FRY30">Guyane</option>
              <option value="FRF12">Haut-Rhin</option>
              <option value="FRM02">Haute-Corse</option>
              <option value="FRJ23">Haute-Garonne</option>
              <option value="FRK13">Haute-Loire</option>
              <option value="FRF24">Haute-Marne</option>
              <option value="FRK28">Haute-Savoie</option>
              <option value="FRC23">Haute-Saône</option>
              <option value="FRI23">Haute-Vienne</option>
              <option value="FRL02">Hautes-Alpes</option>
              <option value="FRJ26">Hautes-Pyrénées</option>
              <option value="FR105">Hauts-de-Seine</option>
              <option value="FRJ13">Hérault</option>
              <option value="FRH03">Ille-et-Vilaine</option>
              <option value="FRB03">Indre</option>
              <option value="FRB04">Indre-et-Loire</option>
              <option value="FRK24">Isère</option>
              <option value="FRC22">Jura</option>
              <option value="FRY40">La Réunion</option>
              <option value="FRI13">Landes</option>
              <option value="FRB05">Loir-et-Cher</option>
              <option value="FRK25">Loire</option>
              <option value="FRG01">Loire-Atlantique</option>
              <option value="FRB06">Loiret</option>
              <option value="FRJ25">Lot</option>
              <option value="FRI14">Lot-et-Garonne</option>
              <option value="FRJ14">Lozère</option>
              <option value="FRG02">Maine-et-Loire</option>
              <option value="FRD12">Manche</option>
              <option value="FRF23">Marne</option>
              <option value="FRY20">Martinique</option>
              <option value="FRG03">Mayenne</option>
              <option value="FRY50">Mayotte</option>
              <option value="FRF31">Meurthe-et-Moselle</option>
              <option value="FRF32">Meuse</option>
              <option value="FRH04">Morbihan</option>
              <option value="FRF33">Moselle</option>
              <option value="FRC12">Nièvre</option>
              <option value="FRE11">Nord</option>
              <option value="FRE22">Oise</option>
              <option value="FRD13">Orne</option>
              <option value="FR101">Paris</option>
              <option value="FRE12">Pas-de-Calais</option>
              <option value="FRK14">Puy-de-Dôme</option>
              <option value="FRI15">Pyrénées-Atlantiques</option>
              <option value="FRJ15">Pyrénées-Orientales</option>
              <option value="FRK26">Rhône</option>
              <option value="FRG04">Sarthe</option>
              <option value="FRK27">Savoie</option>
              <option value="FRC13">Saône-et-Loire</option>
              <option value="FRD22">Seine-Maritime</option>
              <option value="FR106">Seine-Saint-Denis</option>
              <option value="FR102">Seine-et-Marne</option>
              <option value="FRE23">Somme</option>
              <option value="FRJ27">Tarn</option>
              <option value="FRJ28">Tarn-et-Garonne</option>
              <option value="FRC24">Territoire de Belfort</option>
              <option value="FR107">Val-de-Marne</option>
              <option value="FR108">Val-d’Oise</option>
              <option value="FRL05">Var</option>
              <option value="FRL06">Vaucluse</option>
              <option value="FRG05">Vendée</option>
              <option value="FRI34">Vienne</option>
              <option value="FRF34">Vosges</option>
              <option value="FRC14">Yonne</option>
              <option value="FR103">Yvelines</option>
              <optgroup label="Hrvatska">
              <option value="HR021">Bjelovarsko-bilogorska županija</option>
              <option value="HR024">Brodsko-posavska županija</option>
              <option value="HR037">Dubrovačko-neretvanska županija</option>
              <option value="HR050">Grad Zagreb</option>
              <option value="HR036">Istarska županija</option>
              <option value="HR027">Karlovačka županija</option>
              <option value="HR063">Koprivničko-križevačka županija</option>
              <option value="HR064">Krapinsko-zagorska županija</option>
              <option value="HR032">Ličko-senjska županija</option>
              <option value="HR061">Međimurska županija</option>
              <option value="HR025">Osječko-baranjska županija</option>
              <option value="HR023">Požeško-slavonska županija</option>
              <option value="HR031">Primorsko-goranska županija</option>
              <option value="HR028">Sisačko-moslavačka županija</option>
              <option value="HR035">Splitsko-dalmatinska županija</option>
              <option value="HR062">Varaždinska županija</option>
              <option value="HR022">Virovitičko-podravska županija</option>
              <option value="HR026">Vukovarsko-srijemska županija</option>
              <option value="HR033">Zadarska županija</option>
              <option value="HR065">Zagrebačka županija</option>
              <option value="HR034">Šibensko-kninska županija</option>
              <optgroup label="Italia">
              <option value="ITG14">Agrigento</option>
              <option value="ITC18">Alessandria</option>
              <option value="ITI32">Ancona</option>
              <option value="ITI18">Arezzo</option>
              <option value="ITI34">Ascoli Piceno</option>
              <option value="ITC17">Asti</option>
              <option value="ITF34">Avellino</option>
              <option value="ITF47">Bari</option>
              <option value="ITF48">Barletta-Andria-Trani</option>
              <option value="ITH33">Belluno</option>
              <option value="ITF32">Benevento</option>
              <option value="ITC46">Bergamo</option>
              <option value="ITC13">Biella</option>
              <option value="ITH55">Bologna</option>
              <option value="ITH10">Bolzano-Bozen</option>
              <option value="ITC47">Brescia</option>
              <option value="ITF44">Brindisi</option>
              <option value="ITG2F">Cagliari</option>
              <option value="ITG15">Caltanissetta</option>
              <option value="ITF22">Campobasso</option>
              <option value="ITF31">Caserta</option>
              <option value="ITG17">Catania</option>
              <option value="ITF63">Catanzaro</option>
              <option value="ITF14">Chieti</option>
              <option value="ITC42">Como</option>
              <option value="ITF61">Cosenza</option>
              <option value="ITC4A">Cremona</option>
              <option value="ITF62">Crotone</option>
              <option value="ITC16">Cuneo</option>
              <option value="ITG16">Enna</option>
              <option value="ITI35">Fermo</option>
              <option value="ITH56">Ferrara</option>
              <option value="ITI14">Firenze</option>
              <option value="ITF46">Foggia</option>
              <option value="ITH58">Forlì-Cesena</option>
              <option value="ITI45">Frosinone</option>
              <option value="ITC33">Genova</option>
              <option value="ITH43">Gorizia</option>
              <option value="ITI1A">Grosseto</option>
              <option value="ITC31">Imperia</option>
              <option value="ITF21">Isernia</option>
              <option value="ITC34">La Spezia</option>
              <option value="ITI44">Latina</option>
              <option value="ITF45">Lecce</option>
              <option value="ITC43">Lecco</option>
              <option value="ITI16">Livorno</option>
              <option value="ITC49">Lodi</option>
              <option value="ITI12">Lucca</option>
              <option value="ITF11">L’Aquila</option>
              <option value="ITI33">Macerata</option>
              <option value="ITC4B">Mantova</option>
              <option value="ITI11">Massa-Carrara</option>
              <option value="ITF52">Matera</option>
              <option value="ITG13">Messina</option>
              <option value="ITC4C">Milano</option>
              <option value="ITH54">Modena</option>
              <option value="ITC4D">Monza e della Brianza</option>
              <option value="ITF33">Napoli</option>
              <option value="ITC15">Novara</option>
              <option value="ITG2E">Nuoro</option>
              <option value="ITG2G">Oristano</option>
              <option value="ITH36">Padova</option>
              <option value="ITG12">Palermo</option>
              <option value="ITH52">Parma</option>
              <option value="ITC48">Pavia</option>
              <option value="ITI21">Perugia</option>
              <option value="ITI31">Pesaro e Urbino</option>
              <option value="ITF13">Pescara</option>
              <option value="ITH51">Piacenza</option>
              <option value="ITI17">Pisa</option>
              <option value="ITI13">Pistoia</option>
              <option value="ITH41">Pordenone</option>
              <option value="ITF51">Potenza</option>
              <option value="ITI15">Prato</option>
              <option value="ITG18">Ragusa</option>
              <option value="ITH57">Ravenna</option>
              <option value="ITF65">Reggio di Calabria</option>
              <option value="ITH53">Reggio nell’Emilia</option>
              <option value="ITI42">Rieti</option>
              <option value="ITH59">Rimini</option>
              <option value="ITI43">Roma</option>
              <option value="ITH37">Rovigo</option>
              <option value="ITF35">Salerno</option>
              <option value="ITG2D">Sassari</option>
              <option value="ITC32">Savona</option>
              <option value="ITI19">Siena</option>
              <option value="ITG19">Siracusa</option>
              <option value="ITC44">Sondrio</option>
              <option value="ITG2H">Sud Sardegna</option>
              <option value="ITF43">Taranto</option>
              <option value="ITF12">Teramo</option>
              <option value="ITI22">Terni</option>
              <option value="ITC11">Torino</option>
              <option value="ITG11">Trapani</option>
              <option value="ITH20">Trento</option>
              <option value="ITH34">Treviso</option>
              <option value="ITH44">Trieste</option>
              <option value="ITH42">Udine</option>
              <option value="ITC20">Valle d’Aosta/Vallée d’Aoste</option>
              <option value="ITC41">Varese</option>
              <option value="ITH35">Venezia</option>
              <option value="ITC14">Verbano-Cusio-Ossola</option>
              <option value="ITC12">Vercelli</option>
              <option value="ITH31">Verona</option>
              <option value="ITF64">Vibo Valentia</option>
              <option value="ITH32">Vicenza</option>
              <option value="ITI41">Viterbo</option>
              <optgroup label="Latvija">
              <option value="LV003">Kurzeme</option>
              <option value="LV005">Latgale</option>
              <option value="LV007">Pierīga</option>
              <option value="LV006">Rīga</option>
              <option value="LV008">Vidzeme</option>
              <option value="LV009">Zemgale</option>
              <optgroup label="Liechtenstein">
              <option value="LI000">Liechtenstein</option>
              <optgroup label="Lietuva">
              <option value="LT021">Alytaus apskritis</option>
              <option value="LT022">Kauno apskritis</option>
              <option value="LT023">Klaipėdos apskritis</option>
              <option value="LT024">Marijampolės apskritis</option>
              <option value="LT025">Panevėžio apskritis</option>
              <option value="LT027">Tauragės apskritis</option>
              <option value="LT028">Telšių apskritis</option>
              <option value="LT029">Utenos apskritis</option>
              <option value="LT011">Vilniaus apskritis</option>
              <option value="LT026">Šiaulių apskritis</option>
              <optgroup label="Luxembourg">
              <option value="LU000">Luxembourg</option>
              <optgroup label="Magyarország">
              <option value="HU231">Baranya</option>
              <option value="HU311">Borsod-Abaúj-Zemplén</option>
              <option value="HU110">Budapest</option>
              <option value="HU331">Bács-Kiskun</option>
              <option value="HU332">Békés</option>
              <option value="HU333">Csongrád</option>
              <option value="HU211">Fejér</option>
              <option value="HU221">Győr-Moson-Sopron</option>
              <option value="HU321">Hajdú-Bihar</option>
              <option value="HU312">Heves</option>
              <option value="HU322">Jász-Nagykun-Szolnok</option>
              <option value="HU212">Komárom-Esztergom</option>
              <option value="HU313">Nógrád</option>
              <option value="HU120">Pest</option>
              <option value="HU232">Somogy</option>
              <option value="HU323">Szabolcs-Szatmár-Bereg</option>
              <option value="HU233">Tolna</option>
              <option value="HU222">Vas</option>
              <option value="HU213">Veszprém</option>
              <option value="HU223">Zala</option>
              <optgroup label="Malta">
              <option value="MT002">Gozo and Comino/Għawdex u Kemmuna</option>
              <option value="MT001">Malta</option>
              <optgroup label="Nederland">
              <option value="NL225">Achterhoek</option>
              <option value="NL324">Agglomeratie Haarlem</option>
              <option value="NL337">Agglomeratie Leiden en Bollenstreek</option>
              <option value="NL332">Agglomeratie ’s-Gravenhage</option>
              <option value="NL328">Alkmaar en omgeving</option>
              <option value="NL226">Arnhem/Nijmegen</option>
              <option value="NL333">Delft en Westland</option>
              <option value="NL112">Delfzijl en omgeving</option>
              <option value="NL230">Flevoland</option>
              <option value="NL329">Groot-Amsterdam</option>
              <option value="NL33C">Groot-Rijnmond</option>
              <option value="NL327">Het Gooi en Vechtstreek</option>
              <option value="NL323">IJmond</option>
              <option value="NL321">Kop van Noord-Holland</option>
              <option value="NL422">Midden-Limburg</option>
              <option value="NL412">Midden-Noord-Brabant</option>
              <option value="NL131">Noord-Drenthe</option>
              <option value="NL124">Noord-Friesland</option>
              <option value="NL421">Noord-Limburg</option>
              <option value="NL211">Noord-Overijssel</option>
              <option value="NL413">Noordoost-Noord-Brabant</option>
              <option value="NL111">Oost-Groningen</option>
              <option value="NL33B">Oost-Zuid-Holland</option>
              <option value="NL113">Overig Groningen</option>
              <option value="NL342">Overig Zeeland</option>
              <option value="NL213">Twente</option>
              <option value="NL310">Utrecht</option>
              <option value="NL221">Veluwe</option>
              <option value="NL411">West-Noord-Brabant</option>
              <option value="NL325">Zaanstreek</option>
              <option value="NL341">Zeeuwsch-Vlaanderen</option>
              <option value="NL423">Zuid-Limburg</option>
              <option value="NL132">Zuidoost-Drenthe</option>
              <option value="NL126">Zuidoost-Friesland</option>
              <option value="NL414">Zuidoost-Noord-Brabant</option>
              <option value="NL33A">Zuidoost-Zuid-Holland</option>
              <option value="NL133">Zuidwest-Drenthe</option>
              <option value="NL125">Zuidwest-Friesland</option>
              <option value="NL224">Zuidwest-Gelderland</option>
              <option value="NL212">Zuidwest-Overijssel</option>
              <optgroup label="Norge">
              <option value="NO092">Agder</option>
              <option value="NO020">Innlandet</option>
              <option value="NO0B1">Jan Mayen</option>
              <option value="NO0A3">Møre og Romsdal</option>
              <option value="NO071">Nordland</option>
              <option value="NO081">Oslo</option>
              <option value="NO0A1">Rogaland</option>
              <option value="NO0B2">Svalbard</option>
              <option value="NO074">Troms og Finnmark</option>
              <option value="NO060">Trøndelag</option>
              <option value="NO091">Vestfold og Telemark</option>
              <option value="NO0A2">Vestland</option>
              <option value="NO082">Viken</option>
              <optgroup label="Polska">
              <option value="PL811">Bialski</option>
              <option value="PL841">Białostocki</option>
              <option value="PL225">Bielski</option>
              <option value="PL613">Bydgosko-toruński</option>
              <option value="PL228">Bytomski</option>
              <option value="PL812">Chełmsko-zamojski</option>
              <option value="PL637">Chojnicki</option>
              <option value="PL922">Ciechanowski</option>
              <option value="PL224">Częstochowski</option>
              <option value="PL621">Elbląski</option>
              <option value="PL623">Ełcki</option>
              <option value="PL634">Gdański</option>
              <option value="PL229">Gliwicki</option>
              <option value="PL431">Gorzowski</option>
              <option value="PL616">Grudziądzki</option>
              <option value="PL617">Inowrocławski</option>
              <option value="PL515">Jeleniogórski</option>
              <option value="PL416">Kaliski</option>
              <option value="PL22A">Katowicki</option>
              <option value="PL721">Kielecki</option>
              <option value="PL414">Koniński</option>
              <option value="PL426">Koszaliński</option>
              <option value="PL214">Krakowski</option>
              <option value="PL821">Krośnieński</option>
              <option value="PL516">Legnicko-głogowski</option>
              <option value="PL417">Leszczyński</option>
              <option value="PL814">Lubelski</option>
              <option value="PL213">Miasto Kraków</option>
              <option value="PL415">Miasto Poznań</option>
              <option value="PL424">Miasto Szczecin</option>
              <option value="PL911">Miasto Warszawa</option>
              <option value="PL514">Miasto Wrocław</option>
              <option value="PL711">Miasto Łódź</option>
              <option value="PL218">Nowosądecki</option>
              <option value="PL219">Nowotarski</option>
              <option value="PL523">Nyski</option>
              <option value="PL622">Olsztyński</option>
              <option value="PL524">Opolski</option>
              <option value="PL924">Ostrołęcki</option>
              <option value="PL21A">Oświęcimski</option>
              <option value="PL411">Pilski</option>
              <option value="PL713">Piotrkowski</option>
              <option value="PL418">Poznański</option>
              <option value="PL822">Przemyski</option>
              <option value="PL815">Puławski</option>
              <option value="PL923">Płocki</option>
              <option value="PL921">Radomski</option>
              <option value="PL227">Rybnicki</option>
              <option value="PL823">Rzeszowski</option>
              <option value="PL722">Sandomiersko-jędrzejowski</option>
              <option value="PL925">Siedlecki</option>
              <option value="PL714">Sieradzki</option>
              <option value="PL715">Skierniewicki</option>
              <option value="PL22B">Sosnowiecki</option>
              <option value="PL638">Starogardzki</option>
              <option value="PL843">Suwalski</option>
              <option value="PL427">Szczecinecko-pyrzycki</option>
              <option value="PL428">Szczeciński</option>
              <option value="PL636">Słupski</option>
              <option value="PL824">Tarnobrzeski</option>
              <option value="PL217">Tarnowski</option>
              <option value="PL633">Trójmiejski</option>
              <option value="PL22C">Tyski</option>
              <option value="PL912">Warszawski wschodni</option>
              <option value="PL913">Warszawski zachodni</option>
              <option value="PL517">Wałbrzyski</option>
              <option value="PL518">Wrocławski</option>
              <option value="PL619">Włocławski</option>
              <option value="PL432">Zielonogórski</option>
              <option value="PL842">Łomżyński</option>
              <option value="PL712">Łódzki</option>
              <option value="PL618">Świecki</option>
              <option value="PL926">Żyrardowski</option>
              <optgroup label="Portugal">
              <option value="PT187">Alentejo Central</option>
              <option value="PT181">Alentejo Litoral</option>
              <option value="PT150">Algarve</option>
              <option value="PT186">Alto Alentejo</option>
              <option value="PT111">Alto Minho</option>
              <option value="PT11B">Alto Tâmega</option>
              <option value="PT119">Ave</option>
              <option value="PT184">Baixo Alentejo</option>
              <option value="PT16H">Beira Baixa</option>
              <option value="PT16J">Beiras e Serra da Estrela</option>
              <option value="PT112">Cávado</option>
              <option value="PT11D">Douro</option>
              <option value="PT185">Lezíria do Tejo</option>
              <option value="PT16I">Médio Tejo</option>
              <option value="PT16B">Oeste</option>
              <option value="PT300">Região Autónoma da Madeira</option>
              <option value="PT200">Região Autónoma dos Açores</option>
              <option value="PT16D">Região de Aveiro</option>
              <option value="PT16E">Região de Coimbra</option>
              <option value="PT16F">Região de Leiria</option>
              <option value="PT11E">Terras de Trás-os-Montes</option>
              <option value="PT11C">Tâmega e Sousa</option>
              <option value="PT16G">Viseu Dão Lafões</option>
              <option value="PT170">Área Metropolitana de Lisboa</option>
              <option value="PT11A">Área Metropolitana do Porto</option>
              <optgroup label="România">
              <option value="RO121">Alba</option>
              <option value="RO421">Arad</option>
              <option value="RO311">Argeş</option>
              <option value="RO211">Bacău</option>
              <option value="RO111">Bihor</option>
              <option value="RO112">Bistriţa-Năsăud</option>
              <option value="RO212">Botoşani</option>
              <option value="RO122">Braşov</option>
              <option value="RO221">Brăila</option>
              <option value="RO321">Bucureşti</option>
              <option value="RO222">Buzău</option>
              <option value="RO422">Caraş-Severin</option>
              <option value="RO113">Cluj</option>
              <option value="RO223">Constanţa</option>
              <option value="RO123">Covasna</option>
              <option value="RO312">Călăraşi</option>
              <option value="RO411">Dolj</option>
              <option value="RO313">Dâmboviţa</option>
              <option value="RO224">Galaţi</option>
              <option value="RO314">Giurgiu</option>
              <option value="RO412">Gorj</option>
              <option value="RO124">Harghita</option>
              <option value="RO423">Hunedoara</option>
              <option value="RO315">Ialomiţa</option>
              <option value="RO213">Iaşi</option>
              <option value="RO322">Ilfov</option>
              <option value="RO114">Maramureş</option>
              <option value="RO413">Mehedinţi</option>
              <option value="RO125">Mureş</option>
              <option value="RO214">Neamţ</option>
              <option value="RO414">Olt</option>
              <option value="RO316">Prahova</option>
              <option value="RO115">Satu Mare</option>
              <option value="RO126">Sibiu</option>
              <option value="RO215">Suceava</option>
              <option value="RO116">Sălaj</option>
              <option value="RO317">Teleorman</option>
              <option value="RO424">Timiş</option>
              <option value="RO225">Tulcea</option>
              <option value="RO216">Vaslui</option>
              <option value="RO226">Vrancea</option>
              <option value="RO415">Vâlcea</option>
              <optgroup label="Schweiz/Suisse/Svizzera">
              <option value="CH033">Aargau</option>
              <option value="CH053">Appenzell Ausserrhoden</option>
              <option value="CH054">Appenzell Innerrhoden</option>
              <option value="CH032">Basel-Landschaft</option>
              <option value="CH031">Basel-Stadt</option>
              <option value="CH021">Bern</option>
              <option value="CH022">Freiburg</option>
              <option value="CH013">Genève</option>
              <option value="CH051">Glarus</option>
              <option value="CH056">Graubünden</option>
              <option value="CH025">Jura</option>
              <option value="CH061">Luzern</option>
              <option value="CH024">Neuchâtel</option>
              <option value="CH065">Nidwalden</option>
              <option value="CH064">Obwalden</option>
              <option value="CH052">Schaffhausen</option>
              <option value="CH063">Schwyz</option>
              <option value="CH023">Solothurn</option>
              <option value="CH055">St. Gallen</option>
              <option value="CH057">Thurgau</option>
              <option value="CH070">Ticino</option>
              <option value="CH062">Uri</option>
              <option value="CH012">Valais</option>
              <option value="CH011">Vaud</option>
              <option value="CH066">Zug</option>
              <option value="CH040">Zürich</option>
              <optgroup label="Shqipëria">
              <option value="AL031">Berat</option>
              <option value="AL011">Dibër</option>
              <option value="AL012">Durrës</option>
              <option value="AL021">Elbasan</option>
              <option value="AL032">Fier</option>
              <option value="AL033">Gjirokastër</option>
              <option value="AL034">Korcë</option>
              <option value="AL013">Kukës</option>
              <option value="AL014">Lezhë</option>
              <option value="AL015">Shkodër</option>
              <option value="AL022">Tiranë</option>
              <option value="AL035">Vlorë</option>
              <optgroup label="Slovenija">
              <option value="SI042">Gorenjska</option>
              <option value="SI043">Goriška</option>
              <option value="SI037">Jugovzhodna Slovenija</option>
              <option value="SI033">Koroška</option>
              <option value="SI044">Obalno-kraška</option>
              <option value="SI041">Osrednjeslovenska</option>
              <option value="SI032">Podravska</option>
              <option value="SI031">Pomurska</option>
              <option value="SI036">Posavska</option>
              <option value="SI038">Primorsko-notranjska</option>
              <option value="SI034">Savinjska</option>
              <option value="SI035">Zasavska</option>
              <optgroup label="Slovensko">
              <option value="SK032">Banskobystrický kraj</option>
              <option value="SK010">Bratislavský kraj</option>
              <option value="SK042">Košický kraj</option>
              <option value="SK023">Nitriansky kraj</option>
              <option value="SK041">Prešovský kraj</option>
              <option value="SK022">Trenčiansky kraj</option>
              <option value="SK021">Trnavský kraj</option>
              <option value="SK031">Žilinský kraj</option>
              <optgroup label="Srbija/Сpбија">
              <option value="RS224">Јабланичка област</option>
              <option value="RS122">Јужнобанатска област</option>
              <option value="RS123">Јужнобачка област</option>
              <option value="RS110">Београдска област</option>
              <option value="RS221">Борска област</option>
              <option value="RS222">Браничевска област</option>
              <option value="RS121">Западнобачка област</option>
              <option value="RS223">Зајечарска област</option>
              <option value="RS211">Златиборска област</option>
              <option value="RS212">Колубарска област</option>
              <option value="RS213">Мачванска област</option>
              <option value="RS214">Моравичка област</option>
              <option value="RS225">Нишавска област</option>
              <option value="RS226">Пиротска област</option>
              <option value="RS227">Подунавска област</option>
              <option value="RS215">Поморавска област</option>
              <option value="RS228">Пчињска област</option>
              <option value="RS216">Расинска област</option>
              <option value="RS217">Рашка област</option>
              <option value="RS124">Севернобанатска област</option>
              <option value="RS125">Севернобачка област</option>
              <option value="RS126">Средњобанатска област</option>
              <option value="RS127">Сремска област</option>
              <option value="RS229">Топличка област</option>
              <option value="RS218">Шумадијска област</option>
              <optgroup label="Suomi/Finland">
              <option value="FI1C5">Etelä-Karjala</option>
              <option value="FI194">Etelä-Pohjanmaa</option>
              <option value="FI1D1">Etelä-Savo</option>
              <option value="FI1B1">Helsinki-Uusimaa</option>
              <option value="FI1D8">Kainuu</option>
              <option value="FI1C2">Kanta-Häme</option>
              <option value="FI1D5">Keski-Pohjanmaa</option>
              <option value="FI193">Keski-Suomi</option>
              <option value="FI1C4">Kymenlaakso</option>
              <option value="FI1D7">Lappi</option>
              <option value="FI197">Pirkanmaa</option>
              <option value="FI195">Pohjanmaa</option>
              <option value="FI1D3">Pohjois-Karjala</option>
              <option value="FI1D9">Pohjois-Pohjanmaa</option>
              <option value="FI1D2">Pohjois-Savo</option>
              <option value="FI1C3">Päijät-Häme</option>
              <option value="FI196">Satakunta</option>
              <option value="FI1C1">Varsinais-Suomi</option>
              <option value="FI200">Åland</option>
              <optgroup label="Sverige">
              <option value="SE221">Blekinge län</option>
              <option value="SE312">Dalarnas län</option>
              <option value="SE214">Gotlands län</option>
              <option value="SE313">Gävleborgs län</option>
              <option value="SE231">Hallands län</option>
              <option value="SE322">Jämtlands län</option>
              <option value="SE211">Jönköpings län</option>
              <option value="SE213">Kalmar län</option>
              <option value="SE212">Kronobergs län</option>
              <option value="SE332">Norrbottens län</option>
              <option value="SE224">Skåne län</option>
              <option value="SE110">Stockholms län</option>
              <option value="SE122">Södermanlands län</option>
              <option value="SE121">Uppsala län</option>
              <option value="SE311">Värmlands län</option>
              <option value="SE331">Västerbottens län</option>
              <option value="SE321">Västernorrlands län</option>
              <option value="SE125">Västmanlands län</option>
              <option value="SE232">Västra Götalands län</option>
              <option value="SE124">Örebro län</option>
              <option value="SE123">Östergötlands län</option>
              <optgroup label="Türkiye">
              <option value="TR621">Adana</option>
              <option value="TRC12">Adıyaman</option>
              <option value="TR332">Afyonkarahisar</option>
              <option value="TR712">Aksaray</option>
              <option value="TR834">Amasya</option>
              <option value="TR510">Ankara</option>
              <option value="TR611">Antalya</option>
              <option value="TRA24">Ardahan</option>
              <option value="TR905">Artvin</option>
              <option value="TR321">Aydın</option>
              <option value="TRA21">Ağrı</option>
              <option value="TR221">Balıkesir</option>
              <option value="TR813">Bartın</option>
              <option value="TRC32">Batman</option>
              <option value="TRA13">Bayburt</option>
              <option value="TR413">Bilecik</option>
              <option value="TRB13">Bingöl</option>
              <option value="TRB23">Bitlis</option>
              <option value="TR424">Bolu</option>
              <option value="TR613">Burdur</option>
              <option value="TR411">Bursa</option>
              <option value="TR322">Denizli</option>
              <option value="TRC22">Diyarbakır</option>
              <option value="TR423">Düzce</option>
              <option value="TR212">Edirne</option>
              <option value="TRB12">Elazığ</option>
              <option value="TRA12">Erzincan</option>
              <option value="TRA11">Erzurum</option>
              <option value="TR412">Eskişehir</option>
              <option value="TRC11">Gaziantep</option>
              <option value="TR903">Giresun</option>
              <option value="TR906">Gümüşhane</option>
              <option value="TRB24">Hakkari</option>
              <option value="TR631">Hatay</option>
              <option value="TR612">Isparta</option>
              <option value="TRA23">Iğdır</option>
              <option value="TR632">Kahramanmaraş</option>
              <option value="TR812">Karabük</option>
              <option value="TR522">Karaman</option>
              <option value="TRA22">Kars</option>
              <option value="TR821">Kastamonu</option>
              <option value="TR721">Kayseri</option>
              <option value="TRC13">Kilis</option>
              <option value="TR421">Kocaeli</option>
              <option value="TR521">Konya</option>
              <option value="TR333">Kütahya</option>
              <option value="TR213">Kırklareli</option>
              <option value="TR711">Kırıkkale</option>
              <option value="TR715">Kırşehir</option>
              <option value="TRB11">Malatya</option>
              <option value="TR331">Manisa</option>
              <option value="TRC31">Mardin</option>
              <option value="TR622">Mersin</option>
              <option value="TR323">Muğla</option>
              <option value="TRB22">Muş</option>
              <option value="TR714">Nevşehir</option>
              <option value="TR713">Niğde</option>
              <option value="TR902">Ordu</option>
              <option value="TR633">Osmaniye</option>
              <option value="TR904">Rize</option>
              <option value="TR422">Sakarya</option>
              <option value="TR831">Samsun</option>
              <option value="TRC34">Siirt</option>
              <option value="TR823">Sinop</option>
              <option value="TR722">Sivas</option>
              <option value="TR211">Tekirdağ</option>
              <option value="TR832">Tokat</option>
              <option value="TR901">Trabzon</option>
              <option value="TRB14">Tunceli</option>
              <option value="TR334">Uşak</option>
              <option value="TRB21">Van</option>
              <option value="TR425">Yalova</option>
              <option value="TR723">Yozgat</option>
              <option value="TR811">Zonguldak</option>
              <option value="TR222">Çanakkale</option>
              <option value="TR822">Çankırı</option>
              <option value="TR833">Çorum</option>
              <option value="TR100">İstanbul</option>
              <option value="TR310">İzmir</option>
              <option value="TRC21">Şanlıurfa</option>
              <option value="TRC33">Şırnak</option>
              <optgroup label="United Kingdom">
              <option value="UKM50">Aberdeen City and Aberdeenshire</option>
              <option value="UKM71">Angus and Dundee City</option>
              <option value="UKN0D">Antrim and Newtownabbey</option>
              <option value="UKN09">Ards and North Down</option>
              <option value="UKN07">Armagh City, Banbridge and Craigavon</option>
              <option value="UKI52">Barking & Dagenham and Havering</option>
              <option value="UKI71">Barnet</option>
              <option value="UKE31">Barnsley, Doncaster and Rotherham</option>
              <option value="UKK12">Bath and North East Somerset, North Somerset and South Gloucestershire</option>
              <option value="UKH24">Bedford</option>
              <option value="UKN06">Belfast</option>
              <option value="UKJ11">Berkshire</option>
              <option value="UKI51">Bexley and Greenwich</option>
              <option value="UKG31">Birmingham</option>
              <option value="UKD41">Blackburn with Darwen</option>
              <option value="UKD42">Blackpool</option>
              <option value="UKK24">Bournemouth, Christchurch and Poole</option>
              <option value="UKE41">Bradford</option>
              <option value="UKH17">Breckland and South Norfolk</option>
              <option value="UKI72">Brent</option>
              <option value="UKL17">Bridgend and Neath Port Talbot</option>
              <option value="UKJ21">Brighton and Hove</option>
              <option value="UKK11">Bristol, City of</option>
              <option value="UKI61">Bromley</option>
              <option value="UKJ13">Buckinghamshire CC</option>
              <option value="UKM61">Caithness & Sutherland and Ross & Cromarty</option>
              <option value="UKE44">Calderdale and Kirklees</option>
              <option value="UKH12">Cambridgeshire CC</option>
              <option value="UKI31">Camden and City of London</option>
              <option value="UKL22">Cardiff and Vale of Glamorgan</option>
              <option value="UKN0C">Causeway Coast and Glens</option>
              <option value="UKH25">Central Bedfordshire</option>
              <option value="UKJ36">Central Hampshire</option>
              <option value="UKL15">Central Valleys</option>
              <option value="UKD62">Cheshire East</option>
              <option value="UKD63">Cheshire West and Chester</option>
              <option value="UKD47">Chorley and West Lancashire</option>
              <option value="UKM72">Clackmannanshire and Fife</option>
              <option value="UKL13">Conwy and Denbighshire</option>
              <option value="UKK30">Cornwall and Isles of Scilly</option>
              <option value="UKG33">Coventry</option>
              <option value="UKI62">Croydon</option>
              <option value="UKC13">Darlington</option>
              <option value="UKF11">Derby</option>
              <option value="UKN0A">Derry City and Strabane</option>
              <option value="UKK43">Devon CC</option>
              <option value="UKK25">Dorset</option>
              <option value="UKG36">Dudley</option>
              <option value="UKM92">Dumfries & Galloway</option>
              <option value="UKC14">Durham CC</option>
              <option value="UKI73">Ealing</option>
              <option value="UKM93">East Ayrshire and North Ayrshire mainland</option>
              <option value="UKD12">East Cumbria</option>
              <option value="UKF12">East Derbyshire</option>
              <option value="UKM81">East Dunbartonshire, West Dunbartonshire and Helensburgh & Lomond</option>
              <option value="UKJ44">East Kent</option>
              <option value="UKD46">East Lancashire</option>
              <option value="UKM73">East Lothian and Midlothian</option>
              <option value="UKD71">East Merseyside</option>
              <option value="UKE12">East Riding of Yorkshire</option>
              <option value="UKJ26">East Surrey</option>
              <option value="UKJ22">East Sussex CC</option>
              <option value="UKM75">Edinburgh, City of</option>
              <option value="UKI54">Enfield</option>
              <option value="UKH34">Essex Haven Gateway</option>
              <option value="UKH37">Essex Thames Gateway</option>
              <option value="UKM76">Falkirk</option>
              <option value="UKN0G">Fermanagh and Omagh</option>
              <option value="UKL23">Flintshire and Wrexham</option>
              <option value="UKM82">Glasgow City</option>
              <option value="UKK13">Gloucestershire</option>
              <option value="UKD37">Greater Manchester North East</option>
              <option value="UKD36">Greater Manchester North West</option>
              <option value="UKD35">Greater Manchester South East</option>
              <option value="UKD34">Greater Manchester South West</option>
              <option value="UKL16">Gwent Valleys</option>
              <option value="UKL12">Gwynedd</option>
              <option value="UKI41">Hackney and Newham</option>
              <option value="UKI43">Haringey and Islington</option>
              <option value="UKI74">Harrow and Hillingdon</option>
              <option value="UKC11">Hartlepool and Stockton-on-Tees</option>
              <option value="UKH36">Heart of Essex</option>
              <option value="UKG11">Herefordshire, County of</option>
              <option value="UKH23">Hertfordshire</option>
              <option value="UKI75">Hounslow and Richmond upon Thames</option>
              <option value="UKM83">Inverclyde, East Renfrewshire and Renfrewshire</option>
              <option value="UKM62">Inverness & Nairn and Moray, Badenoch & Strathspey</option>
              <option value="UKL11">Isle of Anglesey</option>
              <option value="UKJ34">Isle of Wight</option>
              <option value="UKI33">Kensington & Chelsea and Hammersmith & Fulham</option>
              <option value="UKJ43">Kent Thames Gateway</option>
              <option value="UKE11">Kingston upon Hull, City of</option>
              <option value="UKI45">Lambeth</option>
              <option value="UKD44">Lancaster and Wyre</option>
              <option value="UKE42">Leeds</option>
              <option value="UKF21">Leicester</option>
              <option value="UKF22">Leicestershire CC and Rutland</option>
              <option value="UKI44">Lewisham and Southwark</option>
              <option value="UKF30">Lincolnshire</option>
              <option value="UKN0E">Lisburn and Castlereagh</option>
              <option value="UKD72">Liverpool</option>
              <option value="UKM63">Lochaber, Skye & Lochalsh, Arran & Cumbrae and Argyll & Bute</option>
              <option value="UKH21">Luton</option>
              <option value="UKD33">Manchester</option>
              <option value="UKJ41">Medway</option>
              <option value="UKI63">Merton, Kingston upon Thames and Sutton</option>
              <option value="UKJ45">Mid Kent</option>
              <option value="UKD45">Mid Lancashire</option>
              <option value="UKN0B">Mid Ulster</option>
              <option value="UKN0F">Mid and East Antrim</option>
              <option value="UKJ12">Milton Keynes</option>
              <option value="UKL21">Monmouthshire and Newport</option>
              <option value="UKM64">Na h-Eileanan Siar (Western Isles)</option>
              <option value="UKN08">Newry, Mourne and Down</option>
              <option value="UKJ37">North Hampshire</option>
              <option value="UKM84">North Lanarkshire</option>
              <option value="UKF25">North Northamptonshire</option>
              <option value="UKF15">North Nottinghamshire</option>
              <option value="UKE22">North Yorkshire CC</option>
              <option value="UKE13">North and North East Lincolnshire</option>
              <option value="UKC21">Northumberland</option>
              <option value="UKH16">North and West Norfolk</option>
              <option value="UKH15">Norwich and East Norfolk</option>
              <option value="UKF14">Nottingham</option>
              <option value="UKM65">Orkney Islands</option>
              <option value="UKJ14">Oxfordshire</option>
              <option value="UKM77">Perth & Kinross and Stirling</option>
              <option value="UKH11">Peterborough</option>
              <option value="UKK41">Plymouth</option>
              <option value="UKJ31">Portsmouth</option>
              <option value="UKL24">Powys</option>
              <option value="UKI53">Redbridge and Waltham Forest</option>
              <option value="UKG37">Sandwell</option>
              <option value="UKM91">Scottish Borders</option>
              <option value="UKD73">Sefton</option>
              <option value="UKE32">Sheffield</option>
              <option value="UKM66">Shetland Islands</option>
              <option value="UKG22">Shropshire CC</option>
              <option value="UKG32">Solihull</option>
              <option value="UKK23">Somerset</option>
              <option value="UKM94">South Ayrshire</option>
              <option value="UKJ35">South Hampshire</option>
              <option value="UKM95">South Lanarkshire</option>
              <option value="UKF16">South Nottinghamshire</option>
              <option value="UKC12">South Teesside</option>
              <option value="UKL14">South West Wales</option>
              <option value="UKF13">South and West Derbyshire</option>
              <option value="UKJ32">Southampton</option>
              <option value="UKH31">Southend-on-Sea</option>
              <option value="UKG24">Staffordshire CC</option>
              <option value="UKG23">Stoke-on-Trent</option>
              <option value="UKH14">Suffolk</option>
              <option value="UKC23">Sunderland</option>
              <option value="UKL18">Swansea</option>
              <option value="UKK14">Swindon</option>
              <option value="UKG21">Telford and Wrekin</option>
              <option value="UKH32">Thurrock</option>
              <option value="UKK42">Torbay</option>
              <option value="UKI42">Tower Hamlets</option>
              <option value="UKC22">Tyneside</option>
              <option value="UKE45">Wakefield</option>
              <option value="UKG38">Walsall</option>
              <option value="UKI34">Wandsworth</option>
              <option value="UKD61">Warrington</option>
              <option value="UKG13">Warwickshire</option>
              <option value="UKD11">West Cumbria</option>
              <option value="UKH35">West Essex</option>
              <option value="UKJ46">West Kent</option>
              <option value="UKM78">West Lothian</option>
              <option value="UKF24">West Northamptonshire</option>
              <option value="UKJ25">West Surrey</option>
              <option value="UKJ28">West Sussex (North East)</option>
              <option value="UKJ27">West Sussex (South West)</option>
              <option value="UKI32">Westminster</option>
              <option value="UKK15">Wiltshire CC</option>
              <option value="UKD74">Wirral</option>
              <option value="UKG39">Wolverhampton</option>
              <option value="UKG12">Worcestershire</option>
              <option value="UKE21">York</option>
              <optgroup label="Éire/Ireland">
              <option value="IE041">Border</option>
              <option value="IE061">Dublin</option>
              <option value="IE062">Mid-East</option>
              <option value="IE051">Mid-West</option>
              <option value="IE063">Midland</option>
              <option value="IE052">South-East</option>
              <option value="IE053">South-West</option>
              <option value="IE042">West</option>
              <optgroup label="Ísland">
              <option value="IS001">Höfuðborgarsvæði</option>
              <option value="IS002">Landsbyggð</option>
              <optgroup label="Österreich">
              <option value="AT331">Außerfern</option>
              <option value="AT341">Bludenz-Bregenzer Wald</option>
              <option value="AT221">Graz</option>
              <option value="AT332">Innsbruck</option>
              <option value="AT311">Innviertel</option>
              <option value="AT211">Klagenfurt-Villach</option>
              <option value="AT222">Liezen</option>
              <option value="AT312">Linz-Wels</option>
              <option value="AT321">Lungau</option>
              <option value="AT111">Mittelburgenland</option>
              <option value="AT121">Mostviertel-Eisenwurzen</option>
              <option value="AT313">Mühlviertel</option>
              <option value="AT122">Niederösterreich-Süd</option>
              <option value="AT112">Nordburgenland</option>
              <option value="AT212">Oberkärnten</option>
              <option value="AT224">Oststeiermark</option>
              <option value="AT333">Osttirol</option>
              <option value="AT322">Pinzgau-Pongau</option>
              <option value="AT342">Rheintal-Bodenseegebiet</option>
              <option value="AT323">Salzburg und Umgebung</option>
              <option value="AT123">Sankt Pölten</option>
              <option value="AT314">Steyr-Kirchdorf</option>
              <option value="AT113">Südburgenland</option>
              <option value="AT334">Tiroler Oberland</option>
              <option value="AT335">Tiroler Unterland</option>
              <option value="AT315">Traunviertel</option>
              <option value="AT213">Unterkärnten</option>
              <option value="AT124">Waldviertel</option>
              <option value="AT125">Weinviertel</option>
              <option value="AT225">West- und Südsteiermark</option>
              <option value="AT226">Westliche Obersteiermark</option>
              <option value="AT130">Wien</option>
              <option value="AT126">Wiener Umland/Nordteil</option>
              <option value="AT127">Wiener Umland/Südteil</option>
              <option value="AT223">Östliche Obersteiermark</option>
              <optgroup label="Česko">
              <option value="CZ010">Hlavní město Praha</option>
              <option value="CZ064">Jihomoravský kraj</option>
              <option value="CZ031">Jihočeský kraj</option>
              <option value="CZ041">Karlovarský kraj</option>
              <option value="CZ063">Kraj Vysočina</option>
              <option value="CZ052">Královéhradecký kraj</option>
              <option value="CZ051">Liberecký kraj</option>
              <option value="CZ080">Moravskoslezský kraj</option>
              <option value="CZ071">Olomoucký kraj</option>
              <option value="CZ053">Pardubický kraj</option>
              <option value="CZ032">Plzeňský kraj</option>
              <option value="CZ020">Středočeský kraj</option>
              <option value="CZ072">Zlínský kraj</option>
              <option value="CZ042">Ústecký kraj</option>
              <optgroup label="Ελλάδα">
              <option value="EL422">Άνδρος, Θήρα, Κέα, Μήλος, Μύκονος, Νάξος, Πάρος, Σύρος, Τήνος</option>
              <option value="EL541">Άρτα, Πρέβεζα</option>
              <option value="EL511">Έβρος</option>
              <option value="EL631">Αιτωλοακαρνανία</option>
              <option value="EL305">Ανατολική Αττική</option>
              <option value="EL651">Αργολίδα, Αρκαδία</option>
              <option value="EL632">Αχαΐα</option>
              <option value="EL641">Βοιωτία</option>
              <option value="EL301">Βόρειος Τομέας Αθηνών</option>
              <option value="EL531">Γρεβενά, Κοζάνη</option>
              <option value="EL514">Δράμα</option>
              <option value="EL306">Δυτική Αττική</option>
              <option value="EL302">Δυτικός Τομέας Αθηνών</option>
              <option value="EL643">Ευρυτανία</option>
              <option value="EL642">Εύβοια</option>
              <option value="EL621">Ζάκυνθος</option>
              <option value="EL633">Ηλεία</option>
              <option value="EL521">Ημαθία</option>
              <option value="EL431">Ηράκλειο</option>
              <option value="EL515">Θάσος, Καβάλα</option>
              <option value="EL542">Θεσπρωτία</option>
              <option value="EL522">Θεσσαλονίκη</option>
              <option value="EL623">Ιθάκη, Κεφαλληνία</option>
              <option value="EL412">Ικαρία, Σάμος</option>
              <option value="EL543">Ιωάννινα</option>
              <option value="EL421">Κάλυμνος, Κάρπαθος – Ηρωική Νήσος Κάσος, Κως, Ρόδος</option>
              <option value="EL622">Κέρκυρα</option>
              <option value="EL611">Καρδίτσα, Τρίκαλα</option>
              <option value="EL532">Καστοριά</option>
              <option value="EL303">Κεντρικός Τομέας Αθηνών</option>
              <option value="EL523">Κιλκίς</option>
              <option value="EL652">Κορινθία</option>
              <option value="EL612">Λάρισα</option>
              <option value="EL411">Λέσβος, Λήμνος</option>
              <option value="EL653">Λακωνία, Μεσσηνία</option>
              <option value="EL432">Λασίθι</option>
              <option value="EL624">Λευκάδα</option>
              <option value="EL613">Μαγνησία, Σποράδες</option>
              <option value="EL304">Νότιος Τομέας Αθηνών</option>
              <option value="EL512">Ξάνθη</option>
              <option value="EL524">Πέλλα</option>
              <option value="EL307">Πειραιάς, Νήσοι</option>
              <option value="EL525">Πιερία</option>
              <option value="EL433">Ρέθυμνο</option>
              <option value="EL513">Ροδόπη</option>
              <option value="EL526">Σέρρες</option>
              <option value="EL644">Φθιώτιδα</option>
              <option value="EL533">Φλώρινα</option>
              <option value="EL645">Φωκίδα</option>
              <option value="EL413">Χίος</option>
              <option value="EL527">Χαλκιδική</option>
              <option value="EL434">Χανιά</option>
              <optgroup label="Κύπρος">
              <option value="CY000">Κύπρος</option>
              <optgroup label="България">
              <option value="BG413">Благоевград</option>
              <option value="BG341">Бургас</option>
              <option value="BG331">Варна</option>
              <option value="BG321">Велико Търново</option>
              <option value="BG311">Видин</option>
              <option value="BG313">Враца</option>
              <option value="BG322">Габрово</option>
              <option value="BG332">Добрич</option>
              <option value="BG425">Кърджали</option>
              <option value="BG415">Кюстендил</option>
              <option value="BG315">Ловеч</option>
              <option value="BG312">Монтана</option>
              <option value="BG423">Пазарджик</option>
              <option value="BG414">Перник</option>
              <option value="BG314">Плевен</option>
              <option value="BG421">Пловдив</option>
              <option value="BG324">Разград</option>
              <option value="BG323">Русе</option>
              <option value="BG325">Силистра</option>
              <option value="BG342">Сливен</option>
              <option value="BG424">Смолян</option>
              <option value="BG412">София</option>
              <option value="BG411">София (столица)</option>
              <option value="BG344">Стара Загора</option>
              <option value="BG334">Търговище</option>
              <option value="BG422">Хасково</option>
              <option value="BG333">Шумен</option>
              <option value="BG343">Ямбол</option>
              <optgroup label="Северна Македонија">
              <option value="MK003">Југозападен</option>
              <option value="MK004">Југоисточен</option>
              <option value="MK001">Вардарски</option>
              <option value="MK002">Источен</option>
              <option value="MK005">Пелагониски</option>
              <option value="MK006">Полошки</option>
              <option value="MK007">Североисточен</option>
              <option value="MK008">Скопски</option>
              <optgroup label="Црна Гора">
              <option value="ME000">Црна Гора</option>
              </select>
                  <script>
                  $('.js-example-basic-single').select2({
                    placeholder: 'Select a NUTS region or start typing to search',
                    allowClear: true
                  });

                  $('#select_Nuts').on('select2:select', function (e) {
                    var data = e.params.data;
                    nutsid = data.id;
                    window.location.href="region.php?nutsid="+nutsid;
                  });

                  $(document).on('select2:open', () => {
                  document.querySelector('.select2-search__field').focus();
                });
              </script>
            </div>
        </div>

      </div>

    </nav>


    <div class="container-fluid py-4 all_data_container">

      <h1 class="mb-0"  id="nametitle"> Name of NUTS area </h1>
      <h6 class="mb-0" id="subnametitle"> Country </h6>

      <div class="container mt-4">
        This area is identified by <span class="badge bg-dark">Code</span> <span id="span_nuts3" class="general_info"></span>. Its country (<span class="badge bg-dark">NUTS 0</span>) region code is <span id="span_nuts0" class="general_info"></span>. Its <span class="badge bg-dark">NUTS 2</span> region code  is <span id="span_nuts2" class="general_info"></span>, while its <span class="badge bg-dark">NUTS 1</span> region code  is <span id="span_nuts1" class="general_info"></span>.<br/>
        Demographically, its <span class="badge bg-secondary">Population</span> is <span id="span_population" class="general_info"></span>, with a <span class="badge bg-secondary">Density</span> of <span id="span_density" class="general_info"></span> per sqm. For context, the <span class="badge bg-warning">NUTS0-level population</span> is <span id="span_pop0" class="general_info"></span>. Since the previous data collection, the <span class="badge bg-secondary">Population change</span> amounts to <span id="span_popchange" class="general_info"></span>. There is a <span class="badge bg-secondary">Women:Men</span> ratio of <span id="span_womenratio" class="general_info"></span>. The <span class="badge bg-secondary">Fertility</span> rate is <span id="span_fertility" class="general_info"></span> live births per woman.<br/>
        From an economic point of view, the <span class="badge bg-danger">GDP per capita in Purchasing Power Standards (PPS)</span> is <span id="span_gdppps" class="general_info"></span> (vs the EU average of 100). The regional <span class="badge bg-danger">Gross Value Added</span> is <span id="span_gva" class="general_info"></span>.
      </div>

      <div class="row mt-4">

        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">

              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
              <h6 class="mb-0 ">Map</h6>
            </div>
            <div class="card-body">
              <img class="img-fluid" src="#" id="qgis_image"/>
            </div>
          </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">

              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h6 class="mb-0 ">Other info</h6>
              </div>
              <div class="card-body">
                <span class="badge bg-dark">Urban-rural</span><span id="span_urbanrural" class="general_info"></span>
                <span class="badge bg-dark">Metropolitan</span><span id="span_metropolitan" class="general_info"></span>
                <span class="badge bg-dark">Coastal</span><span id="span_coastal" class="general_info"></span>
                <span class="badge bg-dark">Mountain</span><span id="span_mountain" class="general_info"></span>
                <span class="badge bg-dark">Border</span><span id="span_border" class="general_info"></span>
                <span class="badge bg-dark">Island</span><span id="span_island" class="general_info"></span>
                <span class="badge bg-dark">Remoteness</span><span id="span_remoteness" class="general_info"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">

              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h6 class="mb-0 ">Similarity at a glance</h6>
              </div>
              <div class="card-body m-0">
                <!--div id="my_dataviz" class=""></div>
                <button type="button" class="btn btn-primary" id="zoom-in">+</button>
                <button type="button" class="btn btn-primary"id="zoom-out">-</button-->
                <div id="hexmap2"></div>
                <style>
                #hexmap2 { height: 500px; width: 100%; animation-duration: 0.0s; }
                #hexmap2 .hex-cell { stroke: white; stroke-width: 1; transition: fill 0.0s ease-in, stroke 0.0s ease-in, stroke-width 0.0s ease-in; }
                #hexmap2 .hex-label tspan.on { display: none; }
                #hexmap2 .hex-label tspan.off { display: block; }
                #hexmap2 .hex-label tspan.big { font-weight: bold; font-size: 1.2em; }
                #hexmap2 .hex-label.hover tspan.on { display: block; }
                #hexmap2 .hex-label.hover tspan.off { display: none; }
                </style>

              </div>
            </div>
          </div>
        </div>

        <script src="js/odi.hexmap.min.js"></script>
        <script>



        function displayhex() {
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

                colour='rgb(255,0,0)';
                if ( window.similarity.similarity_hexmap[attr.hex.id] ) {
                  similarity_value = window.similarity.similarity_hexmap[attr.hex.id].similarity;
                  blue = (similarity_value * 255).toFixed(0);
                  colour = 'rgb(0,0,'+blue+')';
                }
                attr.hex.colour=colour;
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
          		"LI000":{"n":"Liechtenstein","id":"LI000","name":"Liechtenstein","q":0,"r":0,"colour":"rgb(106,60,60)"},
          		"AT111":{"n":"Mittelburgenland","id":"AT111","name":"Mittelburgenland","q":1,"r":0,"colour":"rgb(159,90,90)"},
          		"AT112":{"n":"Nordburgenland","id":"AT112","name":"Nordburgenland","q":2,"r":0,"colour":"rgb(159,90,90)"},
          		"AT113":{"n":"Südburgenland","id":"AT113","name":"Südburgenland","q":3,"r":0,"colour":"rgb(159,90,90)"},
          		"AT121":{"n":"Mostviertel-Eisenwurzen","id":"AT121","name":"Mostviertel-Eisenwurzen","q":4,"r":0,"colour":"rgb(159,90,90)"},
          		"AT122":{"n":"Niederösterreich-Süd","id":"AT122","name":"Niederösterreich-Süd","q":5,"r":0,"colour":"rgb(159,90,90)"},
          		"AT123":{"n":"Sankt Pölten","id":"AT123","name":"Sankt Pölten","q":6,"r":0,"colour":"rgb(159,90,90)"},
          		"AT124":{"n":"Waldviertel","id":"AT124","name":"Waldviertel","q":7,"r":0,"colour":"rgb(159,90,90)"},
          		"AT125":{"n":"Weinviertel","id":"AT125","name":"Weinviertel","q":0,"r":-1,"colour":"rgb(159,90,90)"},
          		"AT126":{"n":"Wiener Umland/Nordteil","id":"AT126","name":"Wiener Umland/Nordteil","q":1,"r":-1,"colour":"rgb(159,90,90)"},
          		"AT127":{"n":"Wiener Umland/Südteil","id":"AT127","name":"Wiener Umland/Südteil","q":2,"r":-1,"colour":"rgb(159,90,90)"},
          		"AT130":{"n":"Wien","id":"AT130","name":"Wien","q":3,"r":-1,"colour":"rgb(159,90,90)"},
          		"AT211":{"n":"Klagenfurt-Villach","id":"AT211","name":"Klagenfurt-Villach","q":4,"r":-1,"colour":"rgb(159,90,90)"},
          		"AT212":{"n":"Oberkärnten","id":"AT212","name":"Oberkärnten","q":5,"r":-1,"colour":"rgb(159,90,90)"},
          		"AT213":{"n":"Unterkärnten","id":"AT213","name":"Unterkärnten","q":6,"r":-1,"colour":"rgb(159,90,90)"},
          		"AT221":{"n":"Graz","id":"AT221","name":"Graz","q":0,"r":-2,"colour":"rgb(159,90,90)"},
          		"AT222":{"n":"Liezen","id":"AT222","name":"Liezen","q":1,"r":-2,"colour":"rgb(159,90,90)"},
          		"AT223":{"n":"Östliche Obersteiermark","id":"AT223","name":"Östliche Obersteiermark","q":2,"r":-2,"colour":"rgb(159,90,90)"},
          		"AT224":{"n":"Oststeiermark","id":"AT224","name":"Oststeiermark","q":3,"r":-2,"colour":"rgb(159,90,90)"},
          		"AT225":{"n":"West- und Südsteiermark","id":"AT225","name":"West- und Südsteiermark","q":4,"r":-2,"colour":"rgb(159,90,90)"},
          		"AT226":{"n":"Westliche Obersteiermark","id":"AT226","name":"Westliche Obersteiermark","q":5,"r":-2,"colour":"rgb(159,90,90)"},
          		"AT311":{"n":"Innviertel","id":"AT311","name":"Innviertel","q":6,"r":-2,"colour":"rgb(159,90,90)"},
          		"AT312":{"n":"Linz-Wels","id":"AT312","name":"Linz-Wels","q":0,"r":-3,"colour":"rgb(159,90,90)"},
          		"AT313":{"n":"Mühlviertel","id":"AT313","name":"Mühlviertel","q":1,"r":-3,"colour":"rgb(159,90,90)"},
          		"AT314":{"n":"Steyr-Kirchdorf","id":"AT314","name":"Steyr-Kirchdorf","q":2,"r":-3,"colour":"rgb(159,90,90)"},
          		"AT315":{"n":"Traunviertel","id":"AT315","name":"Traunviertel","q":3,"r":-3,"colour":"rgb(159,90,90)"},
          		"AT321":{"n":"Lungau","id":"AT321","name":"Lungau","q":4,"r":-3,"colour":"rgb(159,90,90)"},
          		"AT322":{"n":"Pinzgau-Pongau","id":"AT322","name":"Pinzgau-Pongau","q":5,"r":-3,"colour":"rgb(159,90,90)"},
          		"AT323":{"n":"Salzburg und Umgebung","id":"AT323","name":"Salzburg und Umgebung","q":6,"r":-3,"colour":"rgb(159,90,90)"},
          		"AT331":{"n":"Außerfern","id":"AT331","name":"Außerfern","q":1,"r":1,"colour":"rgb(159,90,90)"},
          		"AT332":{"n":"Innsbruck","id":"AT332","name":"Innsbruck","q":2,"r":1,"colour":"rgb(159,90,90)"},
          		"AT333":{"n":"Osttirol","id":"AT333","name":"Osttirol","q":3,"r":1,"colour":"rgb(159,90,90)"},
          		"AT334":{"n":"Tiroler Oberland","id":"AT334","name":"Tiroler Oberland","q":4,"r":1,"colour":"rgb(159,90,90)"},
          		"AT335":{"n":"Tiroler Unterland","id":"AT335","name":"Tiroler Unterland","q":5,"r":1,"colour":"rgb(159,90,90)"},
          		"AT341":{"n":"Bludenz-Bregenzer Wald","id":"AT341","name":"Bludenz-Bregenzer Wald","q":6,"r":1,"colour":"rgb(159,90,90)"},
          		"AT342":{"n":"Rheintal-Bodenseegebiet","id":"AT342","name":"Rheintal-Bodenseegebiet","q":7,"r":1,"colour":"rgb(159,90,90)"},
          		"CH011":{"n":"Vaud","id":"CH011","name":"Vaud","q":-5,"r":1,"colour":"rgb(212,120,120)"},
          		"CH055":{"n":"St. Gallen","id":"CH055","name":"St. Gallen","q":-4,"r":1,"colour":"rgb(212,120,120)"},
          		"CH056":{"n":"Graubünden","id":"CH056","name":"Graubünden","q":-3,"r":1,"colour":"rgb(212,120,120)"},
          		"CH057":{"n":"Thurgau","id":"CH057","name":"Thurgau","q":-2,"r":1,"colour":"rgb(212,120,120)"},
          		"CH061":{"n":"Luzern","id":"CH061","name":"Luzern","q":-1,"r":1,"colour":"rgb(212,120,120)"},
          		"CH062":{"n":"Uri","id":"CH062","name":"Uri","q":-5,"r":0,"colour":"rgb(212,120,120)"},
          		"CH063":{"n":"Schwyz","id":"CH063","name":"Schwyz","q":-4,"r":0,"colour":"rgb(212,120,120)"},
          		"CH064":{"n":"Obwalden","id":"CH064","name":"Obwalden","q":-3,"r":0,"colour":"rgb(212,120,120)"},
          		"CH065":{"n":"Nidwalden","id":"CH065","name":"Nidwalden","q":-2,"r":0,"colour":"rgb(212,120,120)"},
          		"CH066":{"n":"Zug","id":"CH066","name":"Zug","q":-1,"r":0,"colour":"rgb(212,120,120)"},
          		"CH070":{"n":"Ticino","id":"CH070","name":"Ticino","q":-5,"r":-1,"colour":"rgb(212,120,120)"},
          		"CH012":{"n":"Valais","id":"CH012","name":"Valais","q":-4,"r":-1,"colour":"rgb(212,120,120)"},
          		"CH013":{"n":"Genève","id":"CH013","name":"Genève","q":-3,"r":-1,"colour":"rgb(212,120,120)"},
          		"CH021":{"n":"Bern","id":"CH021","name":"Bern","q":-2,"r":-1,"colour":"rgb(212,120,120)"},
          		"CH022":{"n":"Freiburg","id":"CH022","name":"Freiburg","q":-1,"r":-1,"colour":"rgb(212,120,120)"},
          		"CH023":{"n":"Solothurn","id":"CH023","name":"Solothurn","q":-5,"r":-2,"colour":"rgb(212,120,120)"},
          		"CH024":{"n":"Neuchâtel","id":"CH024","name":"Neuchâtel","q":-4,"r":-2,"colour":"rgb(212,120,120)"},
          		"CH025":{"n":"Jura","id":"CH025","name":"Jura","q":-3,"r":-2,"colour":"rgb(212,120,120)"},
          		"CH031":{"n":"Basel-Stadt","id":"CH031","name":"Basel-Stadt","q":-2,"r":-2,"colour":"rgb(212,120,120)"},
          		"CH032":{"n":"Basel-Landschaft","id":"CH032","name":"Basel-Landschaft","q":-1,"r":-2,"colour":"rgb(212,120,120)"},
          		"CH033":{"n":"Aargau","id":"CH033","name":"Aargau","q":-5,"r":-3,"colour":"rgb(212,120,120)"},
          		"CH040":{"n":"Zürich","id":"CH040","name":"Zürich","q":-4,"r":-3,"colour":"rgb(212,120,120)"},
          		"CH051":{"n":"Glarus","id":"CH051","name":"Glarus","q":-3,"r":-3,"colour":"rgb(212,120,120)"},
          		"CH052":{"n":"Schaffhausen","id":"CH052","name":"Schaffhausen","q":-2,"r":-3,"colour":"rgb(212,120,120)"},
          		"CH053":{"n":"Appenzell Ausserrhoden","id":"CH053","name":"Appenzell Ausserrhoden","q":-1,"r":-3,"colour":"rgb(212,120,120)"},
          		"CH054":{"n":"Appenzell Innerrhoden","id":"CH054","name":"Appenzell Innerrhoden","q":-5,"r":-4,"colour":"rgb(212,120,120)"},
          		"FRJ13":{"n":"Hérault","id":"FRJ13","name":"Hérault","q":-10,"r":6,"colour":"rgb(0,150,150)"},
          		"FRJ14":{"n":"Lozère","id":"FRJ14","name":"Lozère","q":-9,"r":6,"colour":"rgb(0,150,150)"},
          		"FRJ15":{"n":"Pyrénées-Orientales","id":"FRJ15","name":"Pyrénées-Orientales","q":-8,"r":6,"colour":"rgb(0,150,150)"},
          		"FRJ21":{"n":"Ariège","id":"FRJ21","name":"Ariège","q":-7,"r":6,"colour":"rgb(0,150,150)"},
          		"FRK24":{"n":"Isère","id":"FRK24","name":"Isère","q":-6,"r":6,"colour":"rgb(0,150,150)"},
          		"FRK25":{"n":"Loire","id":"FRK25","name":"Loire","q":-5,"r":6,"colour":"rgb(0,150,150)"},
          		"FRK26":{"n":"Rhône","id":"FRK26","name":"Rhône","q":-4,"r":6,"colour":"rgb(0,150,150)"},
          		"FRK27":{"n":"Savoie","id":"FRK27","name":"Savoie","q":-3,"r":6,"colour":"rgb(0,150,150)"},
          		"FRK28":{"n":"Haute-Savoie","id":"FRK28","name":"Haute-Savoie","q":-2,"r":6,"colour":"rgb(0,150,150)"},
          		"FRJ22":{"n":"Aveyron","id":"FRJ22","name":"Aveyron","q":-1,"r":6,"colour":"rgb(0,150,150)"},
          		"FRJ23":{"n":"Haute-Garonne","id":"FRJ23","name":"Haute-Garonne","q":-10,"r":5,"colour":"rgb(0,150,150)"},
          		"FRJ24":{"n":"Gers","id":"FRJ24","name":"Gers","q":-9,"r":5,"colour":"rgb(0,150,150)"},
          		"FRJ25":{"n":"Lot","id":"FRJ25","name":"Lot","q":-8,"r":5,"colour":"rgb(0,150,150)"},
          		"FRJ26":{"n":"Hautes-Pyrénées","id":"FRJ26","name":"Hautes-Pyrénées","q":-7,"r":5,"colour":"rgb(0,150,150)"},
          		"FRJ27":{"n":"Tarn","id":"FRJ27","name":"Tarn","q":-6,"r":5,"colour":"rgb(0,150,150)"},
          		"FRJ28":{"n":"Tarn-et-Garonne","id":"FRJ28","name":"Tarn-et-Garonne","q":-5,"r":5,"colour":"rgb(0,150,150)"},
          		"FRK11":{"n":"Allier","id":"FRK11","name":"Allier","q":-4,"r":5,"colour":"rgb(0,150,150)"},
          		"FRK12":{"n":"Cantal","id":"FRK12","name":"Cantal","q":-3,"r":5,"colour":"rgb(0,150,150)"},
          		"FRK13":{"n":"Haute-Loire","id":"FRK13","name":"Haute-Loire","q":-2,"r":5,"colour":"rgb(0,150,150)"},
          		"FRK14":{"n":"Puy-de-Dôme","id":"FRK14","name":"Puy-de-Dôme","q":-1,"r":5,"colour":"rgb(0,150,150)"},
          		"FRK21":{"n":"Ain","id":"FRK21","name":"Ain","q":-10,"r":4,"colour":"rgb(0,150,150)"},
          		"FRK22":{"n":"Ardèche","id":"FRK22","name":"Ardèche","q":-9,"r":4,"colour":"rgb(0,150,150)"},
          		"FRK23":{"n":"Drôme","id":"FRK23","name":"Drôme","q":-8,"r":4,"colour":"rgb(0,150,150)"},
          		"FRL01":{"n":"Alpes-de-Haute-Provence","id":"FRL01","name":"Alpes-de-Haute-Provence","q":-7,"r":4,"colour":"rgb(0,150,150)"},
          		"FRL02":{"n":"Hautes-Alpes","id":"FRL02","name":"Hautes-Alpes","q":-6,"r":4,"colour":"rgb(0,150,150)"},
          		"FRL03":{"n":"Alpes-Maritimes","id":"FRL03","name":"Alpes-Maritimes","q":-5,"r":4,"colour":"rgb(0,150,150)"},
          		"FRL04":{"n":"Bouches-du-Rhône","id":"FRL04","name":"Bouches-du-Rhône","q":-4,"r":4,"colour":"rgb(0,150,150)"},
          		"FRL05":{"n":"Var","id":"FRL05","name":"Var","q":-3,"r":4,"colour":"rgb(0,150,150)"},
          		"FRL06":{"n":"Vaucluse","id":"FRL06","name":"Vaucluse","q":-2,"r":4,"colour":"rgb(0,150,150)"},
          		"FRM01":{"n":"Corse-du-Sud","id":"FRM01","name":"Corse-du-Sud","q":-1,"r":4,"colour":"rgb(0,150,150)"},
          		"FRM02":{"n":"Haute-Corse","id":"FRM02","name":"Haute-Corse","q":-10,"r":3,"colour":"rgb(0,150,150)"},
          		"FR101":{"n":"Paris","id":"FR101","name":"Paris","q":-9,"r":3,"colour":"rgb(0,150,150)"},
          		"FR102":{"n":"Seine-et-Marne","id":"FR102","name":"Seine-et-Marne","q":-8,"r":3,"colour":"rgb(0,150,150)"},
          		"FR103":{"n":"Yvelines","id":"FR103","name":"Yvelines","q":-7,"r":3,"colour":"rgb(0,150,150)"},
          		"FR104":{"n":"Essonne","id":"FR104","name":"Essonne","q":-6,"r":3,"colour":"rgb(0,150,150)"},
          		"FR105":{"n":"Hauts-de-Seine","id":"FR105","name":"Hauts-de-Seine","q":-5,"r":3,"colour":"rgb(0,150,150)"},
          		"FR106":{"n":"Seine-Saint-Denis","id":"FR106","name":"Seine-Saint-Denis","q":-4,"r":3,"colour":"rgb(0,150,150)"},
          		"FR107":{"n":"Val-de-Marne","id":"FR107","name":"Val-de-Marne","q":-3,"r":3,"colour":"rgb(0,150,150)"},
          		"FR108":{"n":"Val-d’Oise","id":"FR108","name":"Val-d’Oise","q":-2,"r":3,"colour":"rgb(0,150,150)"},
          		"FRB01":{"n":"Cher","id":"FRB01","name":"Cher","q":-1,"r":3,"colour":"rgb(0,150,150)"},
          		"FRB02":{"n":"Eure-et-Loir","id":"FRB02","name":"Eure-et-Loir","q":-11,"r":2,"colour":"rgb(0,150,150)"},
          		"FRB03":{"n":"Indre","id":"FRB03","name":"Indre","q":-10,"r":2,"colour":"rgb(0,150,150)"},
          		"FRB04":{"n":"Indre-et-Loire","id":"FRB04","name":"Indre-et-Loire","q":-9,"r":2,"colour":"rgb(0,150,150)"},
          		"FRB05":{"n":"Loir-et-Cher","id":"FRB05","name":"Loir-et-Cher","q":-8,"r":2,"colour":"rgb(0,150,150)"},
          		"FRB06":{"n":"Loiret","id":"FRB06","name":"Loiret","q":-7,"r":2,"colour":"rgb(0,150,150)"},
          		"FRC11":{"n":"Côte-d’Or","id":"FRC11","name":"Côte-d’Or","q":-6,"r":2,"colour":"rgb(0,150,150)"},
          		"FRC12":{"n":"Nièvre","id":"FRC12","name":"Nièvre","q":-5,"r":2,"colour":"rgb(0,150,150)"},
          		"FRC13":{"n":"Saône-et-Loire","id":"FRC13","name":"Saône-et-Loire","q":-4,"r":2,"colour":"rgb(0,150,150)"},
          		"FRC14":{"n":"Yonne","id":"FRC14","name":"Yonne","q":-3,"r":2,"colour":"rgb(0,150,150)"},
          		"FRC21":{"n":"Doubs","id":"FRC21","name":"Doubs","q":-2,"r":2,"colour":"rgb(0,150,150)"},
          		"FRC22":{"n":"Jura","id":"FRC22","name":"Jura","q":-1,"r":2,"colour":"rgb(0,150,150)"},
          		"FRC23":{"n":"Haute-Saône","id":"FRC23","name":"Haute-Saône","q":-15,"r":1,"colour":"rgb(0,150,150)"},
          		"FRC24":{"n":"Territoire de Belfort","id":"FRC24","name":"Territoire de Belfort","q":-14,"r":1,"colour":"rgb(0,150,150)"},
          		"FRD11":{"n":"Calvados","id":"FRD11","name":"Calvados","q":-13,"r":1,"colour":"rgb(0,150,150)"},
          		"FRD12":{"n":"Manche","id":"FRD12","name":"Manche","q":-12,"r":1,"colour":"rgb(0,150,150)"},
          		"FRD13":{"n":"Orne","id":"FRD13","name":"Orne","q":-11,"r":1,"colour":"rgb(0,150,150)"},
          		"FRD21":{"n":"Eure","id":"FRD21","name":"Eure","q":-10,"r":1,"colour":"rgb(0,150,150)"},
          		"FRD22":{"n":"Seine-Maritime","id":"FRD22","name":"Seine-Maritime","q":-9,"r":1,"colour":"rgb(0,150,150)"},
          		"FRE11":{"n":"Nord","id":"FRE11","name":"Nord","q":-8,"r":1,"colour":"rgb(0,150,150)"},
          		"FRE12":{"n":"Pas-de-Calais","id":"FRE12","name":"Pas-de-Calais","q":-7,"r":1,"colour":"rgb(0,150,150)"},
          		"FRE21":{"n":"Aisne","id":"FRE21","name":"Aisne","q":-6,"r":1,"colour":"rgb(0,150,150)"},
          		"FRE22":{"n":"Oise","id":"FRE22","name":"Oise","q":-15,"r":0,"colour":"rgb(0,150,150)"},
          		"FRE23":{"n":"Somme","id":"FRE23","name":"Somme","q":-14,"r":0,"colour":"rgb(0,150,150)"},
          		"FRF11":{"n":"Bas-Rhin","id":"FRF11","name":"Bas-Rhin","q":-13,"r":0,"colour":"rgb(0,150,150)"},
          		"FRF12":{"n":"Haut-Rhin","id":"FRF12","name":"Haut-Rhin","q":-12,"r":0,"colour":"rgb(0,150,150)"},
          		"FRF21":{"n":"Ardennes","id":"FRF21","name":"Ardennes","q":-11,"r":0,"colour":"rgb(0,150,150)"},
          		"FRF22":{"n":"Aube","id":"FRF22","name":"Aube","q":-10,"r":0,"colour":"rgb(0,150,150)"},
          		"FRF23":{"n":"Marne","id":"FRF23","name":"Marne","q":-9,"r":0,"colour":"rgb(0,150,150)"},
          		"FRF24":{"n":"Haute-Marne","id":"FRF24","name":"Haute-Marne","q":-8,"r":0,"colour":"rgb(0,150,150)"},
          		"FRF31":{"n":"Meurthe-et-Moselle","id":"FRF31","name":"Meurthe-et-Moselle","q":-7,"r":0,"colour":"rgb(0,150,150)"},
          		"FRF32":{"n":"Meuse","id":"FRF32","name":"Meuse","q":-6,"r":0,"colour":"rgb(0,150,150)"},
          		"FRF33":{"n":"Moselle","id":"FRF33","name":"Moselle","q":-15,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRF34":{"n":"Vosges","id":"FRF34","name":"Vosges","q":-14,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRG01":{"n":"Loire-Atlantique","id":"FRG01","name":"Loire-Atlantique","q":-13,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRG02":{"n":"Maine-et-Loire","id":"FRG02","name":"Maine-et-Loire","q":-12,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRG03":{"n":"Mayenne","id":"FRG03","name":"Mayenne","q":-11,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRG04":{"n":"Sarthe","id":"FRG04","name":"Sarthe","q":-10,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRG05":{"n":"Vendée","id":"FRG05","name":"Vendée","q":-9,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRH01":{"n":"Côtes-d’Armor","id":"FRH01","name":"Côtes-d’Armor","q":-8,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRH02":{"n":"Finistère","id":"FRH02","name":"Finistère","q":-7,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRH03":{"n":"Ille-et-Vilaine","id":"FRH03","name":"Ille-et-Vilaine","q":-6,"r":-1,"colour":"rgb(0,150,150)"},
          		"FRH04":{"n":"Morbihan","id":"FRH04","name":"Morbihan","q":-15,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI11":{"n":"Dordogne","id":"FRI11","name":"Dordogne","q":-14,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI12":{"n":"Gironde","id":"FRI12","name":"Gironde","q":-13,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI13":{"n":"Landes","id":"FRI13","name":"Landes","q":-12,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI14":{"n":"Lot-et-Garonne","id":"FRI14","name":"Lot-et-Garonne","q":-11,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI15":{"n":"Pyrénées-Atlantiques","id":"FRI15","name":"Pyrénées-Atlantiques","q":-10,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI21":{"n":"Corrèze","id":"FRI21","name":"Corrèze","q":-9,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI22":{"n":"Creuse","id":"FRI22","name":"Creuse","q":-8,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI23":{"n":"Haute-Vienne","id":"FRI23","name":"Haute-Vienne","q":-7,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI31":{"n":"Charente","id":"FRI31","name":"Charente","q":-6,"r":-2,"colour":"rgb(0,150,150)"},
          		"FRI32":{"n":"Charente-Maritime","id":"FRI32","name":"Charente-Maritime","q":-15,"r":-3,"colour":"rgb(0,150,150)"},
          		"FRI33":{"n":"Deux-Sèvres","id":"FRI33","name":"Deux-Sèvres","q":-14,"r":-3,"colour":"rgb(0,150,150)"},
          		"FRI34":{"n":"Vienne","id":"FRI34","name":"Vienne","q":-13,"r":-3,"colour":"rgb(0,150,150)"},
          		"FRJ11":{"n":"Aude","id":"FRJ11","name":"Aude","q":-12,"r":-3,"colour":"rgb(0,150,150)"},
          		"FRJ12":{"n":"Gard","id":"FRJ12","name":"Gard","q":-11,"r":-3,"colour":"rgb(0,150,150)"},
          		"FRY10":{"n":"Guadeloupe","id":"FRY10","name":"Guadeloupe","q":-10,"r":-3,"colour":"rgb(0,150,150)"},
          		"FRY20":{"n":"Martinique","id":"FRY20","name":"Martinique","q":-9,"r":-3,"colour":"rgb(0,150,150)"},
          		"FRY30":{"n":"Guyane","id":"FRY30","name":"Guyane","q":-8,"r":-3,"colour":"rgb(0,150,150)"},
          		"FRY40":{"n":"La Réunion","id":"FRY40","name":"La Réunion","q":-7,"r":-3,"colour":"rgb(0,150,150)"},
          		"FRY50":{"n":"Mayotte","id":"FRY50","name":"Mayotte","q":-6,"r":-3,"colour":"rgb(0,150,150)"},
          		"LU000":{"n":"Luxembourg","id":"LU000","name":"Luxembourg","q":-1,"r":7,"colour":"rgb(53,180,180)"},
          		"BE100":{"n":"Arr. de Bruxelles-Capitale/Arr. Brussel-Hoofdstad","id":"BE100","name":"Arr. de Bruxelles-Capitale/Arr. Brussel-Hoofdstad","q":-5,"r":7,"colour":"rgb(106,210,210)"},
          		"BE211":{"n":"Arr. Antwerpen","id":"BE211","name":"Arr. Antwerpen","q":-4,"r":7,"colour":"rgb(106,210,210)"},
          		"BE212":{"n":"Arr. Mechelen","id":"BE212","name":"Arr. Mechelen","q":-3,"r":7,"colour":"rgb(106,210,210)"},
          		"BE213":{"n":"Arr. Turnhout","id":"BE213","name":"Arr. Turnhout","q":-2,"r":7,"colour":"rgb(106,210,210)"},
          		"BE224":{"n":"Arr. Hasselt","id":"BE224","name":"Arr. Hasselt","q":-8,"r":8,"colour":"rgb(106,210,210)"},
          		"BE225":{"n":"Arr. Maaseik","id":"BE225","name":"Arr. Maaseik","q":-7,"r":8,"colour":"rgb(106,210,210)"},
          		"BE223":{"n":"Arr. Tongeren","id":"BE223","name":"Arr. Tongeren","q":-6,"r":8,"colour":"rgb(106,210,210)"},
          		"BE231":{"n":"Arr. Aalst","id":"BE231","name":"Arr. Aalst","q":-5,"r":8,"colour":"rgb(106,210,210)"},
          		"BE232":{"n":"Arr. Dendermonde","id":"BE232","name":"Arr. Dendermonde","q":-4,"r":8,"colour":"rgb(106,210,210)"},
          		"BE233":{"n":"Arr. Eeklo","id":"BE233","name":"Arr. Eeklo","q":-3,"r":8,"colour":"rgb(106,210,210)"},
          		"BE234":{"n":"Arr. Gent","id":"BE234","name":"Arr. Gent","q":-2,"r":8,"colour":"rgb(106,210,210)"},
          		"BE235":{"n":"Arr. Oudenaarde","id":"BE235","name":"Arr. Oudenaarde","q":-1,"r":8,"colour":"rgb(106,210,210)"},
          		"BE236":{"n":"Arr. Sint-Niklaas","id":"BE236","name":"Arr. Sint-Niklaas","q":-8,"r":9,"colour":"rgb(106,210,210)"},
          		"BE241":{"n":"Arr. Halle-Vilvoorde","id":"BE241","name":"Arr. Halle-Vilvoorde","q":-7,"r":9,"colour":"rgb(106,210,210)"},
          		"BE242":{"n":"Arr. Leuven","id":"BE242","name":"Arr. Leuven","q":-6,"r":9,"colour":"rgb(106,210,210)"},
          		"BE251":{"n":"Arr. Brugge","id":"BE251","name":"Arr. Brugge","q":-5,"r":9,"colour":"rgb(106,210,210)"},
          		"BE252":{"n":"Arr. Diksmuide","id":"BE252","name":"Arr. Diksmuide","q":-4,"r":9,"colour":"rgb(106,210,210)"},
          		"BE253":{"n":"Arr. Ieper","id":"BE253","name":"Arr. Ieper","q":-3,"r":9,"colour":"rgb(106,210,210)"},
          		"BE254":{"n":"Arr. Kortrijk","id":"BE254","name":"Arr. Kortrijk","q":-2,"r":9,"colour":"rgb(106,210,210)"},
          		"BE255":{"n":"Arr. Oostende","id":"BE255","name":"Arr. Oostende","q":-1,"r":9,"colour":"rgb(106,210,210)"},
          		"BE256":{"n":"Arr. Roeselare","id":"BE256","name":"Arr. Roeselare","q":-8,"r":10,"colour":"rgb(106,210,210)"},
          		"BE257":{"n":"Arr. Tielt","id":"BE257","name":"Arr. Tielt","q":-7,"r":10,"colour":"rgb(106,210,210)"},
          		"BE258":{"n":"Arr. Veurne","id":"BE258","name":"Arr. Veurne","q":-6,"r":10,"colour":"rgb(106,210,210)"},
          		"BE310":{"n":"Arr. Nivelles","id":"BE310","name":"Arr. Nivelles","q":-5,"r":10,"colour":"rgb(106,210,210)"},
          		"BE32A":{"n":"Arr. Ath","id":"BE32A","name":"Arr. Ath","q":-4,"r":10,"colour":"rgb(106,210,210)"},
          		"BE32B":{"n":"Arr. Charleroi","id":"BE32B","name":"Arr. Charleroi","q":-3,"r":10,"colour":"rgb(106,210,210)"},
          		"BE323":{"n":"Arr. Mons","id":"BE323","name":"Arr. Mons","q":-2,"r":10,"colour":"rgb(106,210,210)"},
          		"BE328":{"n":"Arr. Tournai-Mouscron","id":"BE328","name":"Arr. Tournai-Mouscron","q":-1,"r":10,"colour":"rgb(106,210,210)"},
          		"BE32C":{"n":"Arr. Soignies","id":"BE32C","name":"Arr. Soignies","q":-8,"r":11,"colour":"rgb(106,210,210)"},
          		"BE32D":{"n":"Arr. Thuin","id":"BE32D","name":"Arr. Thuin","q":-7,"r":11,"colour":"rgb(106,210,210)"},
          		"BE331":{"n":"Arr. Huy","id":"BE331","name":"Arr. Huy","q":-6,"r":11,"colour":"rgb(106,210,210)"},
          		"BE332":{"n":"Arr. Liège","id":"BE332","name":"Arr. Liège","q":-5,"r":11,"colour":"rgb(106,210,210)"},
          		"BE334":{"n":"Arr. Waremme","id":"BE334","name":"Arr. Waremme","q":-4,"r":11,"colour":"rgb(106,210,210)"},
          		"BE335":{"n":"Arr. Verviers — communes francophones","id":"BE335","name":"Arr. Verviers — communes francophones","q":-3,"r":11,"colour":"rgb(106,210,210)"},
          		"BE336":{"n":"Bezirk Verviers — Deutschsprachige Gemeinschaft","id":"BE336","name":"Bezirk Verviers — Deutschsprachige Gemeinschaft","q":-2,"r":11,"colour":"rgb(106,210,210)"},
          		"BE341":{"n":"Arr. Arlon","id":"BE341","name":"Arr. Arlon","q":-1,"r":11,"colour":"rgb(106,210,210)"},
          		"BE342":{"n":"Arr. Bastogne","id":"BE342","name":"Arr. Bastogne","q":-8,"r":12,"colour":"rgb(106,210,210)"},
          		"BE343":{"n":"Arr. Marche-en-Famenne","id":"BE343","name":"Arr. Marche-en-Famenne","q":-7,"r":12,"colour":"rgb(106,210,210)"},
          		"BE344":{"n":"Arr. Neufchâteau","id":"BE344","name":"Arr. Neufchâteau","q":-6,"r":12,"colour":"rgb(106,210,210)"},
          		"BE345":{"n":"Arr. Virton","id":"BE345","name":"Arr. Virton","q":-5,"r":12,"colour":"rgb(106,210,210)"},
          		"BE351":{"n":"Arr. Dinant","id":"BE351","name":"Arr. Dinant","q":-4,"r":12,"colour":"rgb(106,210,210)"},
          		"BE352":{"n":"Arr. Namur","id":"BE352","name":"Arr. Namur","q":-3,"r":12,"colour":"rgb(106,210,210)"},
          		"BE353":{"n":"Arr. Philippeville","id":"BE353","name":"Arr. Philippeville","q":-2,"r":12,"colour":"rgb(106,210,210)"},
          		"BE329":{"n":"Arr. La Louvière","id":"BE329","name":"Arr. La Louvière","q":-1,"r":12,"colour":"rgb(106,210,210)"},
          		"NL324":{"n":"Agglomeratie Haarlem","id":"NL324","name":"Agglomeratie Haarlem","q":-8,"r":17,"colour":"rgb(159,240,240)"},
          		"NL325":{"n":"Zaanstreek","id":"NL325","name":"Zaanstreek","q":-7,"r":17,"colour":"rgb(159,240,240)"},
          		"NL327":{"n":"Het Gooi en Vechtstreek","id":"NL327","name":"Het Gooi en Vechtstreek","q":-6,"r":17,"colour":"rgb(159,240,240)"},
          		"NL328":{"n":"Alkmaar en omgeving","id":"NL328","name":"Alkmaar en omgeving","q":-5,"r":17,"colour":"rgb(159,240,240)"},
          		"NL329":{"n":"Groot-Amsterdam","id":"NL329","name":"Groot-Amsterdam","q":-4,"r":17,"colour":"rgb(159,240,240)"},
          		"NL332":{"n":"Agglomeratie ’s-Gravenhage","id":"NL332","name":"Agglomeratie ’s-Gravenhage","q":-3,"r":17,"colour":"rgb(159,240,240)"},
          		"NL333":{"n":"Delft en Westland","id":"NL333","name":"Delft en Westland","q":-2,"r":17,"colour":"rgb(159,240,240)"},
          		"NL337":{"n":"Agglomeratie Leiden en Bollenstreek","id":"NL337","name":"Agglomeratie Leiden en Bollenstreek","q":-1,"r":17,"colour":"rgb(159,240,240)"},
          		"NL33A":{"n":"Zuidoost-Zuid-Holland","id":"NL33A","name":"Zuidoost-Zuid-Holland","q":-8,"r":16,"colour":"rgb(159,240,240)"},
          		"NL33B":{"n":"Oost-Zuid-Holland","id":"NL33B","name":"Oost-Zuid-Holland","q":-7,"r":16,"colour":"rgb(159,240,240)"},
          		"NL33C":{"n":"Groot-Rijnmond","id":"NL33C","name":"Groot-Rijnmond","q":-6,"r":16,"colour":"rgb(159,240,240)"},
          		"NL341":{"n":"Zeeuwsch-Vlaanderen","id":"NL341","name":"Zeeuwsch-Vlaanderen","q":-5,"r":16,"colour":"rgb(159,240,240)"},
          		"NL342":{"n":"Overig Zeeland","id":"NL342","name":"Overig Zeeland","q":-4,"r":16,"colour":"rgb(159,240,240)"},
          		"NL411":{"n":"West-Noord-Brabant","id":"NL411","name":"West-Noord-Brabant","q":-3,"r":16,"colour":"rgb(159,240,240)"},
          		"NL412":{"n":"Midden-Noord-Brabant","id":"NL412","name":"Midden-Noord-Brabant","q":-2,"r":16,"colour":"rgb(159,240,240)"},
          		"NL413":{"n":"Noordoost-Noord-Brabant","id":"NL413","name":"Noordoost-Noord-Brabant","q":-1,"r":16,"colour":"rgb(159,240,240)"},
          		"NL414":{"n":"Zuidoost-Noord-Brabant","id":"NL414","name":"Zuidoost-Noord-Brabant","q":-8,"r":15,"colour":"rgb(159,240,240)"},
          		"NL421":{"n":"Noord-Limburg","id":"NL421","name":"Noord-Limburg","q":-7,"r":15,"colour":"rgb(159,240,240)"},
          		"NL111":{"n":"Oost-Groningen","id":"NL111","name":"Oost-Groningen","q":-6,"r":15,"colour":"rgb(159,240,240)"},
          		"NL112":{"n":"Delfzijl en omgeving","id":"NL112","name":"Delfzijl en omgeving","q":-5,"r":15,"colour":"rgb(159,240,240)"},
          		"NL113":{"n":"Overig Groningen","id":"NL113","name":"Overig Groningen","q":-4,"r":15,"colour":"rgb(159,240,240)"},
          		"NL124":{"n":"Noord-Friesland","id":"NL124","name":"Noord-Friesland","q":-3,"r":15,"colour":"rgb(159,240,240)"},
          		"NL125":{"n":"Zuidwest-Friesland","id":"NL125","name":"Zuidwest-Friesland","q":-2,"r":15,"colour":"rgb(159,240,240)"},
          		"NL126":{"n":"Zuidoost-Friesland","id":"NL126","name":"Zuidoost-Friesland","q":-1,"r":15,"colour":"rgb(159,240,240)"},
          		"NL131":{"n":"Noord-Drenthe","id":"NL131","name":"Noord-Drenthe","q":-8,"r":14,"colour":"rgb(159,240,240)"},
          		"NL132":{"n":"Zuidoost-Drenthe","id":"NL132","name":"Zuidoost-Drenthe","q":-7,"r":14,"colour":"rgb(159,240,240)"},
          		"NL133":{"n":"Zuidwest-Drenthe","id":"NL133","name":"Zuidwest-Drenthe","q":-6,"r":14,"colour":"rgb(159,240,240)"},
          		"NL211":{"n":"Noord-Overijssel","id":"NL211","name":"Noord-Overijssel","q":-5,"r":14,"colour":"rgb(159,240,240)"},
          		"NL212":{"n":"Zuidwest-Overijssel","id":"NL212","name":"Zuidwest-Overijssel","q":-4,"r":14,"colour":"rgb(159,240,240)"},
          		"NL213":{"n":"Twente","id":"NL213","name":"Twente","q":-3,"r":14,"colour":"rgb(159,240,240)"},
          		"NL221":{"n":"Veluwe","id":"NL221","name":"Veluwe","q":-2,"r":14,"colour":"rgb(159,240,240)"},
          		"NL224":{"n":"Zuidwest-Gelderland","id":"NL224","name":"Zuidwest-Gelderland","q":-1,"r":14,"colour":"rgb(159,240,240)"},
          		"NL225":{"n":"Achterhoek","id":"NL225","name":"Achterhoek","q":-8,"r":13,"colour":"rgb(159,240,240)"},
          		"NL226":{"n":"Arnhem/Nijmegen","id":"NL226","name":"Arnhem/Nijmegen","q":-7,"r":13,"colour":"rgb(159,240,240)"},
          		"NL230":{"n":"Flevoland","id":"NL230","name":"Flevoland","q":-6,"r":13,"colour":"rgb(159,240,240)"},
          		"NL310":{"n":"Utrecht","id":"NL310","name":"Utrecht","q":-5,"r":13,"colour":"rgb(159,240,240)"},
          		"NL321":{"n":"Kop van Noord-Holland","id":"NL321","name":"Kop van Noord-Holland","q":-4,"r":13,"colour":"rgb(159,240,240)"},
          		"NL323":{"n":"IJmond","id":"NL323","name":"IJmond","q":-3,"r":13,"colour":"rgb(159,240,240)"},
          		"NL422":{"n":"Midden-Limburg","id":"NL422","name":"Midden-Limburg","q":-2,"r":13,"colour":"rgb(159,240,240)"},
          		"NL423":{"n":"Zuid-Limburg","id":"NL423","name":"Zuid-Limburg","q":-1,"r":13,"colour":"rgb(159,240,240)"},
          		"DE254":{"n":"Nürnberg, Kreisfreie Stadt","id":"DE254","name":"Nürnberg, Kreisfreie Stadt","q":0,"r":1,"colour":"rgb(212,0,0)"},
          		"DE255":{"n":"Schwabach, Kreisfreie Stadt","id":"DE255","name":"Schwabach, Kreisfreie Stadt","q":0,"r":2,"colour":"rgb(212,0,0)"},
          		"DE256":{"n":"Ansbach, Landkreis","id":"DE256","name":"Ansbach, Landkreis","q":1,"r":2,"colour":"rgb(212,0,0)"},
          		"DE257":{"n":"Erlangen-Höchstadt","id":"DE257","name":"Erlangen-Höchstadt","q":2,"r":2,"colour":"rgb(212,0,0)"},
          		"DE258":{"n":"Fürth, Landkreis","id":"DE258","name":"Fürth, Landkreis","q":3,"r":2,"colour":"rgb(212,0,0)"},
          		"DE259":{"n":"Nürnberger Land","id":"DE259","name":"Nürnberger Land","q":4,"r":2,"colour":"rgb(212,0,0)"},
          		"DE25A":{"n":"Neustadt a. d. Aisch-Bad Windsheim","id":"DE25A","name":"Neustadt a. d. Aisch-Bad Windsheim","q":5,"r":2,"colour":"rgb(212,0,0)"},
          		"DE25B":{"n":"Roth","id":"DE25B","name":"Roth","q":6,"r":2,"colour":"rgb(212,0,0)"},
          		"DE25C":{"n":"Weißenburg-Gunzenhausen","id":"DE25C","name":"Weißenburg-Gunzenhausen","q":7,"r":2,"colour":"rgb(212,0,0)"},
          		"DE261":{"n":"Aschaffenburg, Kreisfreie Stadt","id":"DE261","name":"Aschaffenburg, Kreisfreie Stadt","q":8,"r":2,"colour":"rgb(212,0,0)"},
          		"DE262":{"n":"Schweinfurt, Kreisfreie Stadt","id":"DE262","name":"Schweinfurt, Kreisfreie Stadt","q":9,"r":2,"colour":"rgb(212,0,0)"},
          		"DE263":{"n":"Würzburg, Kreisfreie Stadt","id":"DE263","name":"Würzburg, Kreisfreie Stadt","q":10,"r":2,"colour":"rgb(212,0,0)"},
          		"DE264":{"n":"Aschaffenburg, Landkreis","id":"DE264","name":"Aschaffenburg, Landkreis","q":11,"r":2,"colour":"rgb(212,0,0)"},
          		"DE265":{"n":"Bad Kissingen","id":"DE265","name":"Bad Kissingen","q":12,"r":2,"colour":"rgb(212,0,0)"},
          		"DE266":{"n":"Rhön-Grabfeld","id":"DE266","name":"Rhön-Grabfeld","q":13,"r":2,"colour":"rgb(212,0,0)"},
          		"DE267":{"n":"Haßberge","id":"DE267","name":"Haßberge","q":14,"r":2,"colour":"rgb(212,0,0)"},
          		"DE268":{"n":"Kitzingen","id":"DE268","name":"Kitzingen","q":15,"r":2,"colour":"rgb(212,0,0)"},
          		"DE269":{"n":"Miltenberg","id":"DE269","name":"Miltenberg","q":16,"r":2,"colour":"rgb(212,0,0)"},
          		"DE26A":{"n":"Main-Spessart","id":"DE26A","name":"Main-Spessart","q":17,"r":2,"colour":"rgb(212,0,0)"},
          		"DE26B":{"n":"Schweinfurt, Landkreis","id":"DE26B","name":"Schweinfurt, Landkreis","q":18,"r":2,"colour":"rgb(212,0,0)"},
          		"DE26C":{"n":"Würzburg, Landkreis","id":"DE26C","name":"Würzburg, Landkreis","q":19,"r":2,"colour":"rgb(212,0,0)"},
          		"DE271":{"n":"Augsburg, Kreisfreie Stadt","id":"DE271","name":"Augsburg, Kreisfreie Stadt","q":20,"r":2,"colour":"rgb(212,0,0)"},
          		"DE272":{"n":"Kaufbeuren, Kreisfreie Stadt","id":"DE272","name":"Kaufbeuren, Kreisfreie Stadt","q":21,"r":2,"colour":"rgb(212,0,0)"},
          		"DE273":{"n":"Kempten (Allgäu), Kreisfreie Stadt","id":"DE273","name":"Kempten (Allgäu), Kreisfreie Stadt","q":22,"r":2,"colour":"rgb(212,0,0)"},
          		"DE274":{"n":"Memmingen, Kreisfreie Stadt","id":"DE274","name":"Memmingen, Kreisfreie Stadt","q":0,"r":3,"colour":"rgb(212,0,0)"},
          		"DE111":{"n":"Stuttgart, Stadtkreis","id":"DE111","name":"Stuttgart, Stadtkreis","q":1,"r":3,"colour":"rgb(212,0,0)"},
          		"DE112":{"n":"Böblingen","id":"DE112","name":"Böblingen","q":2,"r":3,"colour":"rgb(212,0,0)"},
          		"DE113":{"n":"Esslingen","id":"DE113","name":"Esslingen","q":3,"r":3,"colour":"rgb(212,0,0)"},
          		"DE114":{"n":"Göppingen","id":"DE114","name":"Göppingen","q":4,"r":3,"colour":"rgb(212,0,0)"},
          		"DE115":{"n":"Ludwigsburg","id":"DE115","name":"Ludwigsburg","q":5,"r":3,"colour":"rgb(212,0,0)"},
          		"DE116":{"n":"Rems-Murr-Kreis","id":"DE116","name":"Rems-Murr-Kreis","q":6,"r":3,"colour":"rgb(212,0,0)"},
          		"DE117":{"n":"Heilbronn, Stadtkreis","id":"DE117","name":"Heilbronn, Stadtkreis","q":7,"r":3,"colour":"rgb(212,0,0)"},
          		"DE118":{"n":"Heilbronn, Landkreis","id":"DE118","name":"Heilbronn, Landkreis","q":8,"r":3,"colour":"rgb(212,0,0)"},
          		"DE119":{"n":"Hohenlohekreis","id":"DE119","name":"Hohenlohekreis","q":9,"r":3,"colour":"rgb(212,0,0)"},
          		"DE11A":{"n":"Schwäbisch Hall","id":"DE11A","name":"Schwäbisch Hall","q":10,"r":3,"colour":"rgb(212,0,0)"},
          		"DE11B":{"n":"Main-Tauber-Kreis","id":"DE11B","name":"Main-Tauber-Kreis","q":11,"r":3,"colour":"rgb(212,0,0)"},
          		"DE11C":{"n":"Heidenheim","id":"DE11C","name":"Heidenheim","q":12,"r":3,"colour":"rgb(212,0,0)"},
          		"DE11D":{"n":"Ostalbkreis","id":"DE11D","name":"Ostalbkreis","q":13,"r":3,"colour":"rgb(212,0,0)"},
          		"DE121":{"n":"Baden-Baden, Stadtkreis","id":"DE121","name":"Baden-Baden, Stadtkreis","q":14,"r":3,"colour":"rgb(212,0,0)"},
          		"DE122":{"n":"Karlsruhe, Stadtkreis","id":"DE122","name":"Karlsruhe, Stadtkreis","q":15,"r":3,"colour":"rgb(212,0,0)"},
          		"DE123":{"n":"Karlsruhe, Landkreis","id":"DE123","name":"Karlsruhe, Landkreis","q":16,"r":3,"colour":"rgb(212,0,0)"},
          		"DE124":{"n":"Rastatt","id":"DE124","name":"Rastatt","q":17,"r":3,"colour":"rgb(212,0,0)"},
          		"DE125":{"n":"Heidelberg, Stadtkreis","id":"DE125","name":"Heidelberg, Stadtkreis","q":18,"r":3,"colour":"rgb(212,0,0)"},
          		"DE126":{"n":"Mannheim, Stadtkreis","id":"DE126","name":"Mannheim, Stadtkreis","q":19,"r":3,"colour":"rgb(212,0,0)"},
          		"DE234":{"n":"Amberg-Sulzbach","id":"DE234","name":"Amberg-Sulzbach","q":20,"r":3,"colour":"rgb(212,0,0)"},
          		"DE235":{"n":"Cham","id":"DE235","name":"Cham","q":21,"r":3,"colour":"rgb(212,0,0)"},
          		"DE236":{"n":"Neumarkt i. d. OPf.","id":"DE236","name":"Neumarkt i. d. OPf.","q":22,"r":3,"colour":"rgb(212,0,0)"},
          		"DE237":{"n":"Neustadt a. d. Waldnaab","id":"DE237","name":"Neustadt a. d. Waldnaab","q":0,"r":4,"colour":"rgb(212,0,0)"},
          		"DE238":{"n":"Regensburg, Landkreis","id":"DE238","name":"Regensburg, Landkreis","q":1,"r":4,"colour":"rgb(212,0,0)"},
          		"DE239":{"n":"Schwandorf","id":"DE239","name":"Schwandorf","q":2,"r":4,"colour":"rgb(212,0,0)"},
          		"DE23A":{"n":"Tirschenreuth","id":"DE23A","name":"Tirschenreuth","q":3,"r":4,"colour":"rgb(212,0,0)"},
          		"DE241":{"n":"Bamberg, Kreisfreie Stadt","id":"DE241","name":"Bamberg, Kreisfreie Stadt","q":4,"r":4,"colour":"rgb(212,0,0)"},
          		"DE242":{"n":"Bayreuth, Kreisfreie Stadt","id":"DE242","name":"Bayreuth, Kreisfreie Stadt","q":5,"r":4,"colour":"rgb(212,0,0)"},
          		"DE243":{"n":"Coburg, Kreisfreie Stadt","id":"DE243","name":"Coburg, Kreisfreie Stadt","q":6,"r":4,"colour":"rgb(212,0,0)"},
          		"DE244":{"n":"Hof, Kreisfreie Stadt","id":"DE244","name":"Hof, Kreisfreie Stadt","q":7,"r":4,"colour":"rgb(212,0,0)"},
          		"DE245":{"n":"Bamberg, Landkreis","id":"DE245","name":"Bamberg, Landkreis","q":8,"r":4,"colour":"rgb(212,0,0)"},
          		"DE246":{"n":"Bayreuth, Landkreis","id":"DE246","name":"Bayreuth, Landkreis","q":9,"r":4,"colour":"rgb(212,0,0)"},
          		"DE247":{"n":"Coburg, Landkreis","id":"DE247","name":"Coburg, Landkreis","q":10,"r":4,"colour":"rgb(212,0,0)"},
          		"DE248":{"n":"Forchheim","id":"DE248","name":"Forchheim","q":11,"r":4,"colour":"rgb(212,0,0)"},
          		"DE249":{"n":"Hof, Landkreis","id":"DE249","name":"Hof, Landkreis","q":12,"r":4,"colour":"rgb(212,0,0)"},
          		"DE24A":{"n":"Kronach","id":"DE24A","name":"Kronach","q":13,"r":4,"colour":"rgb(212,0,0)"},
          		"DE24B":{"n":"Kulmbach","id":"DE24B","name":"Kulmbach","q":14,"r":4,"colour":"rgb(212,0,0)"},
          		"DE24C":{"n":"Lichtenfels","id":"DE24C","name":"Lichtenfels","q":15,"r":4,"colour":"rgb(212,0,0)"},
          		"DE24D":{"n":"Wunsiedel i. Fichtelgebirge","id":"DE24D","name":"Wunsiedel i. Fichtelgebirge","q":16,"r":4,"colour":"rgb(212,0,0)"},
          		"DE251":{"n":"Ansbach, Kreisfreie Stadt","id":"DE251","name":"Ansbach, Kreisfreie Stadt","q":17,"r":4,"colour":"rgb(212,0,0)"},
          		"DE252":{"n":"Erlangen, Kreisfreie Stadt","id":"DE252","name":"Erlangen, Kreisfreie Stadt","q":18,"r":4,"colour":"rgb(212,0,0)"},
          		"DE253":{"n":"Fürth, Kreisfreie Stadt","id":"DE253","name":"Fürth, Kreisfreie Stadt","q":19,"r":4,"colour":"rgb(212,0,0)"},
          		"DEA16":{"n":"Mülheim an der Ruhr, Kreisfreie Stadt","id":"DEA16","name":"Mülheim an der Ruhr, Kreisfreie Stadt","q":20,"r":4,"colour":"rgb(212,0,0)"},
          		"DEA17":{"n":"Oberhausen, Kreisfreie Stadt","id":"DEA17","name":"Oberhausen, Kreisfreie Stadt","q":21,"r":4,"colour":"rgb(212,0,0)"},
          		"DEA18":{"n":"Remscheid, Kreisfreie Stadt","id":"DEA18","name":"Remscheid, Kreisfreie Stadt","q":22,"r":4,"colour":"rgb(212,0,0)"},
          		"DEA19":{"n":"Solingen, Kreisfreie Stadt","id":"DEA19","name":"Solingen, Kreisfreie Stadt","q":0,"r":5,"colour":"rgb(212,0,0)"},
          		"DEA1A":{"n":"Wuppertal, Kreisfreie Stadt","id":"DEA1A","name":"Wuppertal, Kreisfreie Stadt","q":1,"r":5,"colour":"rgb(212,0,0)"},
          		"DEA1B":{"n":"Kleve","id":"DEA1B","name":"Kleve","q":2,"r":5,"colour":"rgb(212,0,0)"},
          		"DE127":{"n":"Neckar-Odenwald-Kreis","id":"DE127","name":"Neckar-Odenwald-Kreis","q":3,"r":5,"colour":"rgb(212,0,0)"},
          		"DE128":{"n":"Rhein-Neckar-Kreis","id":"DE128","name":"Rhein-Neckar-Kreis","q":4,"r":5,"colour":"rgb(212,0,0)"},
          		"DE129":{"n":"Pforzheim, Stadtkreis","id":"DE129","name":"Pforzheim, Stadtkreis","q":5,"r":5,"colour":"rgb(212,0,0)"},
          		"DE12A":{"n":"Calw","id":"DE12A","name":"Calw","q":6,"r":5,"colour":"rgb(212,0,0)"},
          		"DE12B":{"n":"Enzkreis","id":"DE12B","name":"Enzkreis","q":7,"r":5,"colour":"rgb(212,0,0)"},
          		"DE12C":{"n":"Freudenstadt","id":"DE12C","name":"Freudenstadt","q":8,"r":5,"colour":"rgb(212,0,0)"},
          		"DE131":{"n":"Freiburg im Breisgau, Stadtkreis","id":"DE131","name":"Freiburg im Breisgau, Stadtkreis","q":9,"r":5,"colour":"rgb(212,0,0)"},
          		"DE132":{"n":"Breisgau-Hochschwarzwald","id":"DE132","name":"Breisgau-Hochschwarzwald","q":10,"r":5,"colour":"rgb(212,0,0)"},
          		"DE133":{"n":"Emmendingen","id":"DE133","name":"Emmendingen","q":11,"r":5,"colour":"rgb(212,0,0)"},
          		"DE134":{"n":"Ortenaukreis","id":"DE134","name":"Ortenaukreis","q":12,"r":5,"colour":"rgb(212,0,0)"},
          		"DE135":{"n":"Rottweil","id":"DE135","name":"Rottweil","q":13,"r":5,"colour":"rgb(212,0,0)"},
          		"DE136":{"n":"Schwarzwald-Baar-Kreis","id":"DE136","name":"Schwarzwald-Baar-Kreis","q":14,"r":5,"colour":"rgb(212,0,0)"},
          		"DE137":{"n":"Tuttlingen","id":"DE137","name":"Tuttlingen","q":15,"r":5,"colour":"rgb(212,0,0)"},
          		"DE138":{"n":"Konstanz","id":"DE138","name":"Konstanz","q":16,"r":5,"colour":"rgb(212,0,0)"},
          		"DE139":{"n":"Lörrach","id":"DE139","name":"Lörrach","q":17,"r":5,"colour":"rgb(212,0,0)"},
          		"DE13A":{"n":"Waldshut","id":"DE13A","name":"Waldshut","q":18,"r":5,"colour":"rgb(212,0,0)"},
          		"DE141":{"n":"Reutlingen","id":"DE141","name":"Reutlingen","q":19,"r":5,"colour":"rgb(212,0,0)"},
          		"DE142":{"n":"Tübingen, Landkreis","id":"DE142","name":"Tübingen, Landkreis","q":20,"r":5,"colour":"rgb(212,0,0)"},
          		"DE143":{"n":"Zollernalbkreis","id":"DE143","name":"Zollernalbkreis","q":21,"r":5,"colour":"rgb(212,0,0)"},
          		"DE144":{"n":"Ulm, Stadtkreis","id":"DE144","name":"Ulm, Stadtkreis","q":22,"r":5,"colour":"rgb(212,0,0)"},
          		"DE145":{"n":"Alb-Donau-Kreis","id":"DE145","name":"Alb-Donau-Kreis","q":0,"r":6,"colour":"rgb(212,0,0)"},
          		"DE146":{"n":"Biberach","id":"DE146","name":"Biberach","q":1,"r":6,"colour":"rgb(212,0,0)"},
          		"DE147":{"n":"Bodenseekreis","id":"DE147","name":"Bodenseekreis","q":2,"r":6,"colour":"rgb(212,0,0)"},
          		"DE148":{"n":"Ravensburg","id":"DE148","name":"Ravensburg","q":3,"r":6,"colour":"rgb(212,0,0)"},
          		"DE149":{"n":"Sigmaringen","id":"DE149","name":"Sigmaringen","q":4,"r":6,"colour":"rgb(212,0,0)"},
          		"DE211":{"n":"Ingolstadt, Kreisfreie Stadt","id":"DE211","name":"Ingolstadt, Kreisfreie Stadt","q":5,"r":6,"colour":"rgb(212,0,0)"},
          		"DE212":{"n":"München, Kreisfreie Stadt","id":"DE212","name":"München, Kreisfreie Stadt","q":6,"r":6,"colour":"rgb(212,0,0)"},
          		"DE213":{"n":"Rosenheim, Kreisfreie Stadt","id":"DE213","name":"Rosenheim, Kreisfreie Stadt","q":7,"r":6,"colour":"rgb(212,0,0)"},
          		"DE214":{"n":"Altötting","id":"DE214","name":"Altötting","q":8,"r":6,"colour":"rgb(212,0,0)"},
          		"DE215":{"n":"Berchtesgadener Land","id":"DE215","name":"Berchtesgadener Land","q":9,"r":6,"colour":"rgb(212,0,0)"},
          		"DE216":{"n":"Bad Tölz-Wolfratshausen","id":"DE216","name":"Bad Tölz-Wolfratshausen","q":10,"r":6,"colour":"rgb(212,0,0)"},
          		"DE217":{"n":"Dachau","id":"DE217","name":"Dachau","q":11,"r":6,"colour":"rgb(212,0,0)"},
          		"DE218":{"n":"Ebersberg","id":"DE218","name":"Ebersberg","q":12,"r":6,"colour":"rgb(212,0,0)"},
          		"DE219":{"n":"Eichstätt","id":"DE219","name":"Eichstätt","q":13,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21A":{"n":"Erding","id":"DE21A","name":"Erding","q":14,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21B":{"n":"Freising","id":"DE21B","name":"Freising","q":15,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21C":{"n":"Fürstenfeldbruck","id":"DE21C","name":"Fürstenfeldbruck","q":16,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21D":{"n":"Garmisch-Partenkirchen","id":"DE21D","name":"Garmisch-Partenkirchen","q":17,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21E":{"n":"Landsberg am Lech","id":"DE21E","name":"Landsberg am Lech","q":18,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21F":{"n":"Miesbach","id":"DE21F","name":"Miesbach","q":19,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21G":{"n":"Mühldorf a. Inn","id":"DE21G","name":"Mühldorf a. Inn","q":20,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21H":{"n":"München, Landkreis","id":"DE21H","name":"München, Landkreis","q":21,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21I":{"n":"Neuburg-Schrobenhausen","id":"DE21I","name":"Neuburg-Schrobenhausen","q":22,"r":6,"colour":"rgb(212,0,0)"},
          		"DE21J":{"n":"Pfaffenhofen a. d. Ilm","id":"DE21J","name":"Pfaffenhofen a. d. Ilm","q":0,"r":7,"colour":"rgb(212,0,0)"},
          		"DE21K":{"n":"Rosenheim, Landkreis","id":"DE21K","name":"Rosenheim, Landkreis","q":1,"r":7,"colour":"rgb(212,0,0)"},
          		"DE21L":{"n":"Starnberg","id":"DE21L","name":"Starnberg","q":2,"r":7,"colour":"rgb(212,0,0)"},
          		"DE21M":{"n":"Traunstein","id":"DE21M","name":"Traunstein","q":3,"r":7,"colour":"rgb(212,0,0)"},
          		"DE21N":{"n":"Weilheim-Schongau","id":"DE21N","name":"Weilheim-Schongau","q":4,"r":7,"colour":"rgb(212,0,0)"},
          		"DE221":{"n":"Landshut, Kreisfreie Stadt","id":"DE221","name":"Landshut, Kreisfreie Stadt","q":5,"r":7,"colour":"rgb(212,0,0)"},
          		"DE222":{"n":"Passau, Kreisfreie Stadt","id":"DE222","name":"Passau, Kreisfreie Stadt","q":6,"r":7,"colour":"rgb(212,0,0)"},
          		"DE223":{"n":"Straubing, Kreisfreie Stadt","id":"DE223","name":"Straubing, Kreisfreie Stadt","q":7,"r":7,"colour":"rgb(212,0,0)"},
          		"DE224":{"n":"Deggendorf","id":"DE224","name":"Deggendorf","q":8,"r":7,"colour":"rgb(212,0,0)"},
          		"DE225":{"n":"Freyung-Grafenau","id":"DE225","name":"Freyung-Grafenau","q":9,"r":7,"colour":"rgb(212,0,0)"},
          		"DE226":{"n":"Kelheim","id":"DE226","name":"Kelheim","q":10,"r":7,"colour":"rgb(212,0,0)"},
          		"DE227":{"n":"Landshut, Landkreis","id":"DE227","name":"Landshut, Landkreis","q":11,"r":7,"colour":"rgb(212,0,0)"},
          		"DE228":{"n":"Passau, Landkreis","id":"DE228","name":"Passau, Landkreis","q":12,"r":7,"colour":"rgb(212,0,0)"},
          		"DE229":{"n":"Regen","id":"DE229","name":"Regen","q":13,"r":7,"colour":"rgb(212,0,0)"},
          		"DE22A":{"n":"Rottal-Inn","id":"DE22A","name":"Rottal-Inn","q":14,"r":7,"colour":"rgb(212,0,0)"},
          		"DE22B":{"n":"Straubing-Bogen","id":"DE22B","name":"Straubing-Bogen","q":15,"r":7,"colour":"rgb(212,0,0)"},
          		"DE22C":{"n":"Dingolfing-Landau","id":"DE22C","name":"Dingolfing-Landau","q":16,"r":7,"colour":"rgb(212,0,0)"},
          		"DE231":{"n":"Amberg, Kreisfreie Stadt","id":"DE231","name":"Amberg, Kreisfreie Stadt","q":17,"r":7,"colour":"rgb(212,0,0)"},
          		"DE232":{"n":"Regensburg, Kreisfreie Stadt","id":"DE232","name":"Regensburg, Kreisfreie Stadt","q":18,"r":7,"colour":"rgb(212,0,0)"},
          		"DE233":{"n":"Weiden i. d. Opf, Kreisfreie Stadt","id":"DE233","name":"Weiden i. d. Opf, Kreisfreie Stadt","q":19,"r":7,"colour":"rgb(212,0,0)"},
          		"DEE0B":{"n":"Saalekreis","id":"DEE0B","name":"Saalekreis","q":20,"r":7,"colour":"rgb(212,0,0)"},
          		"DEE0C":{"n":"Salzlandkreis","id":"DEE0C","name":"Salzlandkreis","q":21,"r":7,"colour":"rgb(212,0,0)"},
          		"DEE0D":{"n":"Stendal","id":"DEE0D","name":"Stendal","q":22,"r":7,"colour":"rgb(212,0,0)"},
          		"DEE0E":{"n":"Wittenberg","id":"DEE0E","name":"Wittenberg","q":0,"r":8,"colour":"rgb(212,0,0)"},
          		"DEF01":{"n":"Flensburg, Kreisfreie Stadt","id":"DEF01","name":"Flensburg, Kreisfreie Stadt","q":1,"r":8,"colour":"rgb(212,0,0)"},
          		"DEF02":{"n":"Kiel, Kreisfreie Stadt","id":"DEF02","name":"Kiel, Kreisfreie Stadt","q":2,"r":8,"colour":"rgb(212,0,0)"},
          		"DEF03":{"n":"Lübeck, Kreisfreie Stadt","id":"DEF03","name":"Lübeck, Kreisfreie Stadt","q":3,"r":8,"colour":"rgb(212,0,0)"},
          		"DEF04":{"n":"Neumünster, Kreisfreie Stadt","id":"DEF04","name":"Neumünster, Kreisfreie Stadt","q":4,"r":8,"colour":"rgb(212,0,0)"},
          		"DEF05":{"n":"Dithmarschen","id":"DEF05","name":"Dithmarschen","q":5,"r":8,"colour":"rgb(212,0,0)"},
          		"DED51":{"n":"Leipzig, Kreisfreie Stadt","id":"DED51","name":"Leipzig, Kreisfreie Stadt","q":6,"r":8,"colour":"rgb(212,0,0)"},
          		"DED52":{"n":"Leipzig","id":"DED52","name":"Leipzig","q":7,"r":8,"colour":"rgb(212,0,0)"},
          		"DED53":{"n":"Nordsachsen","id":"DED53","name":"Nordsachsen","q":8,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE01":{"n":"Dessau-Roßlau, Kreisfreie Stadt","id":"DEE01","name":"Dessau-Roßlau, Kreisfreie Stadt","q":9,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE02":{"n":"Halle (Saale), Kreisfreie Stadt","id":"DEE02","name":"Halle (Saale), Kreisfreie Stadt","q":10,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE03":{"n":"Magdeburg, Kreisfreie Stadt","id":"DEE03","name":"Magdeburg, Kreisfreie Stadt","q":11,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE04":{"n":"Altmarkkreis Salzwedel","id":"DEE04","name":"Altmarkkreis Salzwedel","q":12,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE05":{"n":"Anhalt-Bitterfeld","id":"DEE05","name":"Anhalt-Bitterfeld","q":13,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE06":{"n":"Jerichower Land","id":"DEE06","name":"Jerichower Land","q":14,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE07":{"n":"Börde","id":"DEE07","name":"Börde","q":15,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE08":{"n":"Burgenlandkreis","id":"DEE08","name":"Burgenlandkreis","q":16,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE09":{"n":"Harz","id":"DEE09","name":"Harz","q":17,"r":8,"colour":"rgb(212,0,0)"},
          		"DE942":{"n":"Emden, Kreisfreie Stadt","id":"DE942","name":"Emden, Kreisfreie Stadt","q":18,"r":8,"colour":"rgb(212,0,0)"},
          		"DEE0A":{"n":"Mansfeld-Südharz","id":"DEE0A","name":"Mansfeld-Südharz","q":19,"r":8,"colour":"rgb(212,0,0)"},
          		"DEF06":{"n":"Herzogtum Lauenburg","id":"DEF06","name":"Herzogtum Lauenburg","q":20,"r":8,"colour":"rgb(212,0,0)"},
          		"DEF07":{"n":"Nordfriesland","id":"DEF07","name":"Nordfriesland","q":21,"r":8,"colour":"rgb(212,0,0)"},
          		"DEF08":{"n":"Ostholstein","id":"DEF08","name":"Ostholstein","q":22,"r":8,"colour":"rgb(212,0,0)"},
          		"DEF09":{"n":"Pinneberg","id":"DEF09","name":"Pinneberg","q":0,"r":9,"colour":"rgb(212,0,0)"},
          		"DEF0A":{"n":"Plön","id":"DEF0A","name":"Plön","q":1,"r":9,"colour":"rgb(212,0,0)"},
          		"DEF0B":{"n":"Rendsburg-Eckernförde","id":"DEF0B","name":"Rendsburg-Eckernförde","q":2,"r":9,"colour":"rgb(212,0,0)"},
          		"DEF0C":{"n":"Schleswig-Flensburg","id":"DEF0C","name":"Schleswig-Flensburg","q":3,"r":9,"colour":"rgb(212,0,0)"},
          		"DEF0D":{"n":"Segeberg","id":"DEF0D","name":"Segeberg","q":4,"r":9,"colour":"rgb(212,0,0)"},
          		"DEF0E":{"n":"Steinburg","id":"DEF0E","name":"Steinburg","q":5,"r":9,"colour":"rgb(212,0,0)"},
          		"DEF0F":{"n":"Stormarn","id":"DEF0F","name":"Stormarn","q":6,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG01":{"n":"Erfurt, Kreisfreie Stadt","id":"DEG01","name":"Erfurt, Kreisfreie Stadt","q":7,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG02":{"n":"Gera, Kreisfreie Stadt","id":"DEG02","name":"Gera, Kreisfreie Stadt","q":8,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG03":{"n":"Jena, Kreisfreie Stadt","id":"DEG03","name":"Jena, Kreisfreie Stadt","q":9,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG04":{"n":"Suhl, Kreisfreie Stadt","id":"DEG04","name":"Suhl, Kreisfreie Stadt","q":10,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG05":{"n":"Weimar, Kreisfreie Stadt","id":"DEG05","name":"Weimar, Kreisfreie Stadt","q":11,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG06":{"n":"Eichsfeld","id":"DEG06","name":"Eichsfeld","q":12,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG07":{"n":"Nordhausen","id":"DEG07","name":"Nordhausen","q":13,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG09":{"n":"Unstrut-Hainich-Kreis","id":"DEG09","name":"Unstrut-Hainich-Kreis","q":14,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG0A":{"n":"Kyffhäuserkreis","id":"DEG0A","name":"Kyffhäuserkreis","q":15,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG0B":{"n":"Schmalkalden-Meiningen","id":"DEG0B","name":"Schmalkalden-Meiningen","q":16,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG0C":{"n":"Gotha","id":"DEG0C","name":"Gotha","q":17,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG0D":{"n":"Sömmerda","id":"DEG0D","name":"Sömmerda","q":18,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG0E":{"n":"Hildburghausen","id":"DEG0E","name":"Hildburghausen","q":19,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG0F":{"n":"Ilm-Kreis","id":"DEG0F","name":"Ilm-Kreis","q":20,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG0G":{"n":"Weimarer Land","id":"DEG0G","name":"Weimarer Land","q":21,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG0H":{"n":"Sonneberg","id":"DEG0H","name":"Sonneberg","q":22,"r":9,"colour":"rgb(212,0,0)"},
          		"DEG0I":{"n":"Saalfeld-Rudolstadt","id":"DEG0I","name":"Saalfeld-Rudolstadt","q":0,"r":10,"colour":"rgb(212,0,0)"},
          		"DEG0J":{"n":"Saale-Holzland-Kreis","id":"DEG0J","name":"Saale-Holzland-Kreis","q":1,"r":10,"colour":"rgb(212,0,0)"},
          		"DEG0K":{"n":"Saale-Orla-Kreis","id":"DEG0K","name":"Saale-Orla-Kreis","q":2,"r":10,"colour":"rgb(212,0,0)"},
          		"DEG0L":{"n":"Greiz","id":"DEG0L","name":"Greiz","q":3,"r":10,"colour":"rgb(212,0,0)"},
          		"DEG0M":{"n":"Altenburger Land","id":"DEG0M","name":"Altenburger Land","q":4,"r":10,"colour":"rgb(212,0,0)"},
          		"DEG0N":{"n":"Eisenach, Kreisfreie Stadt","id":"DEG0N","name":"Eisenach, Kreisfreie Stadt","q":5,"r":10,"colour":"rgb(212,0,0)"},
          		"DEG0P":{"n":"Wartburgkreis","id":"DEG0P","name":"Wartburgkreis","q":6,"r":10,"colour":"rgb(212,0,0)"},
          		"DE943":{"n":"Oldenburg (Oldenburg), Kreisfreie Stadt","id":"DE943","name":"Oldenburg (Oldenburg), Kreisfreie Stadt","q":7,"r":10,"colour":"rgb(212,0,0)"},
          		"DE944":{"n":"Osnabrück, Kreisfreie Stadt","id":"DE944","name":"Osnabrück, Kreisfreie Stadt","q":8,"r":10,"colour":"rgb(212,0,0)"},
          		"DE945":{"n":"Wilhelmshaven, Kreisfreie Stadt","id":"DE945","name":"Wilhelmshaven, Kreisfreie Stadt","q":9,"r":10,"colour":"rgb(212,0,0)"},
          		"DE946":{"n":"Ammerland","id":"DE946","name":"Ammerland","q":10,"r":10,"colour":"rgb(212,0,0)"},
          		"DE947":{"n":"Aurich","id":"DE947","name":"Aurich","q":11,"r":10,"colour":"rgb(212,0,0)"},
          		"DE948":{"n":"Cloppenburg","id":"DE948","name":"Cloppenburg","q":12,"r":10,"colour":"rgb(212,0,0)"},
          		"DE949":{"n":"Emsland","id":"DE949","name":"Emsland","q":13,"r":10,"colour":"rgb(212,0,0)"},
          		"DE94A":{"n":"Friesland (DE)","id":"DE94A","name":"Friesland (DE)","q":14,"r":10,"colour":"rgb(212,0,0)"},
          		"DE94B":{"n":"Grafschaft Bentheim","id":"DE94B","name":"Grafschaft Bentheim","q":15,"r":10,"colour":"rgb(212,0,0)"},
          		"DE94C":{"n":"Leer","id":"DE94C","name":"Leer","q":16,"r":10,"colour":"rgb(212,0,0)"},
          		"DE94D":{"n":"Oldenburg, Landkreis","id":"DE94D","name":"Oldenburg, Landkreis","q":17,"r":10,"colour":"rgb(212,0,0)"},
          		"DE94E":{"n":"Osnabrück, Landkreis","id":"DE94E","name":"Osnabrück, Landkreis","q":18,"r":10,"colour":"rgb(212,0,0)"},
          		"DE94F":{"n":"Vechta","id":"DE94F","name":"Vechta","q":19,"r":10,"colour":"rgb(212,0,0)"},
          		"DE94G":{"n":"Wesermarsch","id":"DE94G","name":"Wesermarsch","q":20,"r":10,"colour":"rgb(212,0,0)"},
          		"DE94H":{"n":"Wittmund","id":"DE94H","name":"Wittmund","q":21,"r":10,"colour":"rgb(212,0,0)"},
          		"DEA11":{"n":"Düsseldorf, Kreisfreie Stadt","id":"DEA11","name":"Düsseldorf, Kreisfreie Stadt","q":22,"r":10,"colour":"rgb(212,0,0)"},
          		"DEA12":{"n":"Duisburg, Kreisfreie Stadt","id":"DEA12","name":"Duisburg, Kreisfreie Stadt","q":0,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA13":{"n":"Essen, Kreisfreie Stadt","id":"DEA13","name":"Essen, Kreisfreie Stadt","q":1,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA14":{"n":"Krefeld, Kreisfreie Stadt","id":"DEA14","name":"Krefeld, Kreisfreie Stadt","q":2,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA15":{"n":"Mönchengladbach, Kreisfreie Stadt","id":"DEA15","name":"Mönchengladbach, Kreisfreie Stadt","q":3,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA1C":{"n":"Mettmann","id":"DEA1C","name":"Mettmann","q":4,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA1D":{"n":"Rhein-Kreis Neuss","id":"DEA1D","name":"Rhein-Kreis Neuss","q":5,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA1E":{"n":"Viersen","id":"DEA1E","name":"Viersen","q":6,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA1F":{"n":"Wesel","id":"DEA1F","name":"Wesel","q":7,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA22":{"n":"Bonn, Kreisfreie Stadt","id":"DEA22","name":"Bonn, Kreisfreie Stadt","q":8,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA23":{"n":"Köln, Kreisfreie Stadt","id":"DEA23","name":"Köln, Kreisfreie Stadt","q":9,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA24":{"n":"Leverkusen, Kreisfreie Stadt","id":"DEA24","name":"Leverkusen, Kreisfreie Stadt","q":10,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA26":{"n":"Düren","id":"DEA26","name":"Düren","q":11,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA27":{"n":"Rhein-Erft-Kreis","id":"DEA27","name":"Rhein-Erft-Kreis","q":12,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA28":{"n":"Euskirchen","id":"DEA28","name":"Euskirchen","q":13,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA29":{"n":"Heinsberg","id":"DEA29","name":"Heinsberg","q":14,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA2A":{"n":"Oberbergischer Kreis","id":"DEA2A","name":"Oberbergischer Kreis","q":15,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA2B":{"n":"Rheinisch-Bergischer Kreis","id":"DEA2B","name":"Rheinisch-Bergischer Kreis","q":16,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA2C":{"n":"Rhein-Sieg-Kreis","id":"DEA2C","name":"Rhein-Sieg-Kreis","q":17,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA2D":{"n":"Städteregion Aachen","id":"DEA2D","name":"Städteregion Aachen","q":18,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA31":{"n":"Bottrop, Kreisfreie Stadt","id":"DEA31","name":"Bottrop, Kreisfreie Stadt","q":19,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA32":{"n":"Gelsenkirchen, Kreisfreie Stadt","id":"DEA32","name":"Gelsenkirchen, Kreisfreie Stadt","q":20,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA33":{"n":"Münster, Kreisfreie Stadt","id":"DEA33","name":"Münster, Kreisfreie Stadt","q":21,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA34":{"n":"Borken","id":"DEA34","name":"Borken","q":22,"r":11,"colour":"rgb(212,0,0)"},
          		"DEA35":{"n":"Coesfeld","id":"DEA35","name":"Coesfeld","q":0,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA36":{"n":"Recklinghausen","id":"DEA36","name":"Recklinghausen","q":1,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA37":{"n":"Steinfurt","id":"DEA37","name":"Steinfurt","q":2,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA38":{"n":"Warendorf","id":"DEA38","name":"Warendorf","q":3,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA41":{"n":"Bielefeld, Kreisfreie Stadt","id":"DEA41","name":"Bielefeld, Kreisfreie Stadt","q":4,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA42":{"n":"Gütersloh","id":"DEA42","name":"Gütersloh","q":5,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA43":{"n":"Herford","id":"DEA43","name":"Herford","q":6,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA44":{"n":"Höxter","id":"DEA44","name":"Höxter","q":7,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA45":{"n":"Lippe","id":"DEA45","name":"Lippe","q":8,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA46":{"n":"Minden-Lübbecke","id":"DEA46","name":"Minden-Lübbecke","q":9,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA47":{"n":"Paderborn","id":"DEA47","name":"Paderborn","q":10,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA51":{"n":"Bochum, Kreisfreie Stadt","id":"DEA51","name":"Bochum, Kreisfreie Stadt","q":11,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA52":{"n":"Dortmund, Kreisfreie Stadt","id":"DEA52","name":"Dortmund, Kreisfreie Stadt","q":12,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA53":{"n":"Hagen, Kreisfreie Stadt","id":"DEA53","name":"Hagen, Kreisfreie Stadt","q":13,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA54":{"n":"Hamm, Kreisfreie Stadt","id":"DEA54","name":"Hamm, Kreisfreie Stadt","q":14,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA55":{"n":"Herne, Kreisfreie Stadt","id":"DEA55","name":"Herne, Kreisfreie Stadt","q":15,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA56":{"n":"Ennepe-Ruhr-Kreis","id":"DEA56","name":"Ennepe-Ruhr-Kreis","q":16,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA57":{"n":"Hochsauerlandkreis","id":"DEA57","name":"Hochsauerlandkreis","q":17,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA58":{"n":"Märkischer Kreis","id":"DEA58","name":"Märkischer Kreis","q":18,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA59":{"n":"Olpe","id":"DEA59","name":"Olpe","q":19,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA5A":{"n":"Siegen-Wittgenstein","id":"DEA5A","name":"Siegen-Wittgenstein","q":20,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA5B":{"n":"Soest","id":"DEA5B","name":"Soest","q":21,"r":12,"colour":"rgb(212,0,0)"},
          		"DEA5C":{"n":"Unna","id":"DEA5C","name":"Unna","q":22,"r":12,"colour":"rgb(212,0,0)"},
          		"DEB11":{"n":"Koblenz, Kreisfreie Stadt","id":"DEB11","name":"Koblenz, Kreisfreie Stadt","q":0,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB12":{"n":"Ahrweiler","id":"DEB12","name":"Ahrweiler","q":1,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB13":{"n":"Altenkirchen (Westerwald)","id":"DEB13","name":"Altenkirchen (Westerwald)","q":2,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB14":{"n":"Bad Kreuznach","id":"DEB14","name":"Bad Kreuznach","q":3,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB15":{"n":"Birkenfeld","id":"DEB15","name":"Birkenfeld","q":4,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB17":{"n":"Mayen-Koblenz","id":"DEB17","name":"Mayen-Koblenz","q":5,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB18":{"n":"Neuwied","id":"DEB18","name":"Neuwied","q":6,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB1A":{"n":"Rhein-Lahn-Kreis","id":"DEB1A","name":"Rhein-Lahn-Kreis","q":7,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB1B":{"n":"Westerwaldkreis","id":"DEB1B","name":"Westerwaldkreis","q":8,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB1C":{"n":"Cochem-Zell","id":"DEB1C","name":"Cochem-Zell","q":9,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB1D":{"n":"Rhein-Hunsrück-Kreis","id":"DEB1D","name":"Rhein-Hunsrück-Kreis","q":10,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB21":{"n":"Trier, Kreisfreie Stadt","id":"DEB21","name":"Trier, Kreisfreie Stadt","q":11,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB22":{"n":"Bernkastel-Wittlich","id":"DEB22","name":"Bernkastel-Wittlich","q":12,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB23":{"n":"Eifelkreis Bitburg-Prüm","id":"DEB23","name":"Eifelkreis Bitburg-Prüm","q":13,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB24":{"n":"Vulkaneifel","id":"DEB24","name":"Vulkaneifel","q":14,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB25":{"n":"Trier-Saarburg","id":"DEB25","name":"Trier-Saarburg","q":15,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB31":{"n":"Frankenthal (Pfalz), Kreisfreie Stadt","id":"DEB31","name":"Frankenthal (Pfalz), Kreisfreie Stadt","q":16,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB32":{"n":"Kaiserslautern, Kreisfreie Stadt","id":"DEB32","name":"Kaiserslautern, Kreisfreie Stadt","q":17,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB33":{"n":"Landau in der Pfalz, Kreisfreie Stadt","id":"DEB33","name":"Landau in der Pfalz, Kreisfreie Stadt","q":18,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB34":{"n":"Ludwigshafen am Rhein, Kreisfreie Stadt","id":"DEB34","name":"Ludwigshafen am Rhein, Kreisfreie Stadt","q":19,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB35":{"n":"Mainz, Kreisfreie Stadt","id":"DEB35","name":"Mainz, Kreisfreie Stadt","q":20,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB36":{"n":"Neustadt an der Weinstraße, Kreisfreie Stadt","id":"DEB36","name":"Neustadt an der Weinstraße, Kreisfreie Stadt","q":21,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB37":{"n":"Pirmasens, Kreisfreie Stadt","id":"DEB37","name":"Pirmasens, Kreisfreie Stadt","q":22,"r":13,"colour":"rgb(212,0,0)"},
          		"DEB38":{"n":"Speyer, Kreisfreie Stadt","id":"DEB38","name":"Speyer, Kreisfreie Stadt","q":0,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB39":{"n":"Worms, Kreisfreie Stadt","id":"DEB39","name":"Worms, Kreisfreie Stadt","q":1,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3A":{"n":"Zweibrücken, Kreisfreie Stadt","id":"DEB3A","name":"Zweibrücken, Kreisfreie Stadt","q":2,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3B":{"n":"Alzey-Worms","id":"DEB3B","name":"Alzey-Worms","q":3,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3C":{"n":"Bad Dürkheim","id":"DEB3C","name":"Bad Dürkheim","q":4,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3D":{"n":"Donnersbergkreis","id":"DEB3D","name":"Donnersbergkreis","q":5,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3E":{"n":"Germersheim","id":"DEB3E","name":"Germersheim","q":6,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3F":{"n":"Kaiserslautern, Landkreis","id":"DEB3F","name":"Kaiserslautern, Landkreis","q":7,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3G":{"n":"Kusel","id":"DEB3G","name":"Kusel","q":8,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3H":{"n":"Südliche Weinstraße","id":"DEB3H","name":"Südliche Weinstraße","q":9,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3I":{"n":"Rhein-Pfalz-Kreis","id":"DEB3I","name":"Rhein-Pfalz-Kreis","q":10,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3J":{"n":"Mainz-Bingen","id":"DEB3J","name":"Mainz-Bingen","q":11,"r":14,"colour":"rgb(212,0,0)"},
          		"DEB3K":{"n":"Südwestpfalz","id":"DEB3K","name":"Südwestpfalz","q":12,"r":14,"colour":"rgb(212,0,0)"},
          		"DEC01":{"n":"Regionalverband Saarbrücken","id":"DEC01","name":"Regionalverband Saarbrücken","q":13,"r":14,"colour":"rgb(212,0,0)"},
          		"DEC02":{"n":"Merzig-Wadern","id":"DEC02","name":"Merzig-Wadern","q":14,"r":14,"colour":"rgb(212,0,0)"},
          		"DEC03":{"n":"Neunkirchen","id":"DEC03","name":"Neunkirchen","q":15,"r":14,"colour":"rgb(212,0,0)"},
          		"DEC04":{"n":"Saarlouis","id":"DEC04","name":"Saarlouis","q":16,"r":14,"colour":"rgb(212,0,0)"},
          		"DEC05":{"n":"Saarpfalz-Kreis","id":"DEC05","name":"Saarpfalz-Kreis","q":17,"r":14,"colour":"rgb(212,0,0)"},
          		"DEC06":{"n":"St. Wendel","id":"DEC06","name":"St. Wendel","q":18,"r":14,"colour":"rgb(212,0,0)"},
          		"DED21":{"n":"Dresden, Kreisfreie Stadt","id":"DED21","name":"Dresden, Kreisfreie Stadt","q":19,"r":14,"colour":"rgb(212,0,0)"},
          		"DED2C":{"n":"Bautzen","id":"DED2C","name":"Bautzen","q":20,"r":14,"colour":"rgb(212,0,0)"},
          		"DED2D":{"n":"Görlitz","id":"DED2D","name":"Görlitz","q":21,"r":14,"colour":"rgb(212,0,0)"},
          		"DED2E":{"n":"Meißen","id":"DED2E","name":"Meißen","q":22,"r":14,"colour":"rgb(212,0,0)"},
          		"DED2F":{"n":"Sächsische Schweiz-Osterzgebirge","id":"DED2F","name":"Sächsische Schweiz-Osterzgebirge","q":0,"r":15,"colour":"rgb(212,0,0)"},
          		"DED41":{"n":"Chemnitz, Kreisfreie Stadt","id":"DED41","name":"Chemnitz, Kreisfreie Stadt","q":1,"r":15,"colour":"rgb(212,0,0)"},
          		"DED42":{"n":"Erzgebirgskreis","id":"DED42","name":"Erzgebirgskreis","q":2,"r":15,"colour":"rgb(212,0,0)"},
          		"DED43":{"n":"Mittelsachsen","id":"DED43","name":"Mittelsachsen","q":3,"r":15,"colour":"rgb(212,0,0)"},
          		"DED44":{"n":"Vogtlandkreis","id":"DED44","name":"Vogtlandkreis","q":4,"r":15,"colour":"rgb(212,0,0)"},
          		"DED45":{"n":"Zwickau","id":"DED45","name":"Zwickau","q":5,"r":15,"colour":"rgb(212,0,0)"},
          		"DE275":{"n":"Aichach-Friedberg","id":"DE275","name":"Aichach-Friedberg","q":6,"r":15,"colour":"rgb(212,0,0)"},
          		"DE276":{"n":"Augsburg, Landkreis","id":"DE276","name":"Augsburg, Landkreis","q":7,"r":15,"colour":"rgb(212,0,0)"},
          		"DE277":{"n":"Dillingen a.d. Donau","id":"DE277","name":"Dillingen a.d. Donau","q":8,"r":15,"colour":"rgb(212,0,0)"},
          		"DE278":{"n":"Günzburg","id":"DE278","name":"Günzburg","q":9,"r":15,"colour":"rgb(212,0,0)"},
          		"DE279":{"n":"Neu-Ulm","id":"DE279","name":"Neu-Ulm","q":10,"r":15,"colour":"rgb(212,0,0)"},
          		"DE27A":{"n":"Lindau (Bodensee)","id":"DE27A","name":"Lindau (Bodensee)","q":11,"r":15,"colour":"rgb(212,0,0)"},
          		"DE27B":{"n":"Ostallgäu","id":"DE27B","name":"Ostallgäu","q":12,"r":15,"colour":"rgb(212,0,0)"},
          		"DE27C":{"n":"Unterallgäu","id":"DE27C","name":"Unterallgäu","q":13,"r":15,"colour":"rgb(212,0,0)"},
          		"DE27D":{"n":"Donau-Ries","id":"DE27D","name":"Donau-Ries","q":14,"r":15,"colour":"rgb(212,0,0)"},
          		"DE27E":{"n":"Oberallgäu","id":"DE27E","name":"Oberallgäu","q":15,"r":15,"colour":"rgb(212,0,0)"},
          		"DE300":{"n":"Berlin","id":"DE300","name":"Berlin","q":16,"r":15,"colour":"rgb(212,0,0)"},
          		"DE401":{"n":"Brandenburg an der Havel, Kreisfreie Stadt","id":"DE401","name":"Brandenburg an der Havel, Kreisfreie Stadt","q":17,"r":15,"colour":"rgb(212,0,0)"},
          		"DE402":{"n":"Cottbus, Kreisfreie Stadt","id":"DE402","name":"Cottbus, Kreisfreie Stadt","q":18,"r":15,"colour":"rgb(212,0,0)"},
          		"DE403":{"n":"Frankfurt (Oder), Kreisfreie Stadt","id":"DE403","name":"Frankfurt (Oder), Kreisfreie Stadt","q":19,"r":15,"colour":"rgb(212,0,0)"},
          		"DE404":{"n":"Potsdam, Kreisfreie Stadt","id":"DE404","name":"Potsdam, Kreisfreie Stadt","q":20,"r":15,"colour":"rgb(212,0,0)"},
          		"DE405":{"n":"Barnim","id":"DE405","name":"Barnim","q":21,"r":15,"colour":"rgb(212,0,0)"},
          		"DE406":{"n":"Dahme-Spreewald","id":"DE406","name":"Dahme-Spreewald","q":22,"r":15,"colour":"rgb(212,0,0)"},
          		"DE407":{"n":"Elbe-Elster","id":"DE407","name":"Elbe-Elster","q":0,"r":16,"colour":"rgb(212,0,0)"},
          		"DE408":{"n":"Havelland","id":"DE408","name":"Havelland","q":1,"r":16,"colour":"rgb(212,0,0)"},
          		"DE409":{"n":"Märkisch-Oderland","id":"DE409","name":"Märkisch-Oderland","q":2,"r":16,"colour":"rgb(212,0,0)"},
          		"DE40A":{"n":"Oberhavel","id":"DE40A","name":"Oberhavel","q":3,"r":16,"colour":"rgb(212,0,0)"},
          		"DE40B":{"n":"Oberspreewald-Lausitz","id":"DE40B","name":"Oberspreewald-Lausitz","q":4,"r":16,"colour":"rgb(212,0,0)"},
          		"DE40C":{"n":"Oder-Spree","id":"DE40C","name":"Oder-Spree","q":5,"r":16,"colour":"rgb(212,0,0)"},
          		"DE40D":{"n":"Ostprignitz-Ruppin","id":"DE40D","name":"Ostprignitz-Ruppin","q":6,"r":16,"colour":"rgb(212,0,0)"},
          		"DE40E":{"n":"Potsdam-Mittelmark","id":"DE40E","name":"Potsdam-Mittelmark","q":7,"r":16,"colour":"rgb(212,0,0)"},
          		"DE40F":{"n":"Prignitz","id":"DE40F","name":"Prignitz","q":8,"r":16,"colour":"rgb(212,0,0)"},
          		"DE40G":{"n":"Spree-Neiße","id":"DE40G","name":"Spree-Neiße","q":9,"r":16,"colour":"rgb(212,0,0)"},
          		"DE40H":{"n":"Teltow-Fläming","id":"DE40H","name":"Teltow-Fläming","q":10,"r":16,"colour":"rgb(212,0,0)"},
          		"DE40I":{"n":"Uckermark","id":"DE40I","name":"Uckermark","q":11,"r":16,"colour":"rgb(212,0,0)"},
          		"DE501":{"n":"Bremen, Kreisfreie Stadt","id":"DE501","name":"Bremen, Kreisfreie Stadt","q":12,"r":16,"colour":"rgb(212,0,0)"},
          		"DE502":{"n":"Bremerhaven, Kreisfreie Stadt","id":"DE502","name":"Bremerhaven, Kreisfreie Stadt","q":13,"r":16,"colour":"rgb(212,0,0)"},
          		"DE600":{"n":"Hamburg","id":"DE600","name":"Hamburg","q":14,"r":16,"colour":"rgb(212,0,0)"},
          		"DE711":{"n":"Darmstadt, Kreisfreie Stadt","id":"DE711","name":"Darmstadt, Kreisfreie Stadt","q":15,"r":16,"colour":"rgb(212,0,0)"},
          		"DE712":{"n":"Frankfurt am Main, Kreisfreie Stadt","id":"DE712","name":"Frankfurt am Main, Kreisfreie Stadt","q":16,"r":16,"colour":"rgb(212,0,0)"},
          		"DE713":{"n":"Offenbach am Main, Kreisfreie Stadt","id":"DE713","name":"Offenbach am Main, Kreisfreie Stadt","q":17,"r":16,"colour":"rgb(212,0,0)"},
          		"DE714":{"n":"Wiesbaden, Kreisfreie Stadt","id":"DE714","name":"Wiesbaden, Kreisfreie Stadt","q":18,"r":16,"colour":"rgb(212,0,0)"},
          		"DE715":{"n":"Bergstraße","id":"DE715","name":"Bergstraße","q":19,"r":16,"colour":"rgb(212,0,0)"},
          		"DE716":{"n":"Darmstadt-Dieburg","id":"DE716","name":"Darmstadt-Dieburg","q":20,"r":16,"colour":"rgb(212,0,0)"},
          		"DE717":{"n":"Groß-Gerau","id":"DE717","name":"Groß-Gerau","q":21,"r":16,"colour":"rgb(212,0,0)"},
          		"DE718":{"n":"Hochtaunuskreis","id":"DE718","name":"Hochtaunuskreis","q":22,"r":16,"colour":"rgb(212,0,0)"},
          		"DE719":{"n":"Main-Kinzig-Kreis","id":"DE719","name":"Main-Kinzig-Kreis","q":0,"r":17,"colour":"rgb(212,0,0)"},
          		"DE71A":{"n":"Main-Taunus-Kreis","id":"DE71A","name":"Main-Taunus-Kreis","q":1,"r":17,"colour":"rgb(212,0,0)"},
          		"DE71B":{"n":"Odenwaldkreis","id":"DE71B","name":"Odenwaldkreis","q":2,"r":17,"colour":"rgb(212,0,0)"},
          		"DE71C":{"n":"Offenbach, Landkreis","id":"DE71C","name":"Offenbach, Landkreis","q":3,"r":17,"colour":"rgb(212,0,0)"},
          		"DE71D":{"n":"Rheingau-Taunus-Kreis","id":"DE71D","name":"Rheingau-Taunus-Kreis","q":4,"r":17,"colour":"rgb(212,0,0)"},
          		"DE71E":{"n":"Wetteraukreis","id":"DE71E","name":"Wetteraukreis","q":5,"r":17,"colour":"rgb(212,0,0)"},
          		"DE721":{"n":"Gießen, Landkreis","id":"DE721","name":"Gießen, Landkreis","q":6,"r":17,"colour":"rgb(212,0,0)"},
          		"DE722":{"n":"Lahn-Dill-Kreis","id":"DE722","name":"Lahn-Dill-Kreis","q":7,"r":17,"colour":"rgb(212,0,0)"},
          		"DE723":{"n":"Limburg-Weilburg","id":"DE723","name":"Limburg-Weilburg","q":8,"r":17,"colour":"rgb(212,0,0)"},
          		"DE724":{"n":"Marburg-Biedenkopf","id":"DE724","name":"Marburg-Biedenkopf","q":9,"r":17,"colour":"rgb(212,0,0)"},
          		"DE725":{"n":"Vogelsbergkreis","id":"DE725","name":"Vogelsbergkreis","q":10,"r":17,"colour":"rgb(212,0,0)"},
          		"DE731":{"n":"Kassel, Kreisfreie Stadt","id":"DE731","name":"Kassel, Kreisfreie Stadt","q":11,"r":17,"colour":"rgb(212,0,0)"},
          		"DE732":{"n":"Fulda","id":"DE732","name":"Fulda","q":12,"r":17,"colour":"rgb(212,0,0)"},
          		"DE733":{"n":"Hersfeld-Rotenburg","id":"DE733","name":"Hersfeld-Rotenburg","q":13,"r":17,"colour":"rgb(212,0,0)"},
          		"DE734":{"n":"Kassel, Landkreis","id":"DE734","name":"Kassel, Landkreis","q":14,"r":17,"colour":"rgb(212,0,0)"},
          		"DE735":{"n":"Schwalm-Eder-Kreis","id":"DE735","name":"Schwalm-Eder-Kreis","q":15,"r":17,"colour":"rgb(212,0,0)"},
          		"DE736":{"n":"Waldeck-Frankenberg","id":"DE736","name":"Waldeck-Frankenberg","q":16,"r":17,"colour":"rgb(212,0,0)"},
          		"DE737":{"n":"Werra-Meißner-Kreis","id":"DE737","name":"Werra-Meißner-Kreis","q":17,"r":17,"colour":"rgb(212,0,0)"},
          		"DE803":{"n":"Rostock, Kreisfreie Stadt","id":"DE803","name":"Rostock, Kreisfreie Stadt","q":18,"r":17,"colour":"rgb(212,0,0)"},
          		"DE804":{"n":"Schwerin, Kreisfreie Stadt","id":"DE804","name":"Schwerin, Kreisfreie Stadt","q":19,"r":17,"colour":"rgb(212,0,0)"},
          		"DE80J":{"n":"Mecklenburgische Seenplatte","id":"DE80J","name":"Mecklenburgische Seenplatte","q":20,"r":17,"colour":"rgb(212,0,0)"},
          		"DE80K":{"n":"Landkreis Rostock","id":"DE80K","name":"Landkreis Rostock","q":21,"r":17,"colour":"rgb(212,0,0)"},
          		"DE80L":{"n":"Vorpommern-Rügen","id":"DE80L","name":"Vorpommern-Rügen","q":22,"r":17,"colour":"rgb(212,0,0)"},
          		"DE80M":{"n":"Nordwestmecklenburg","id":"DE80M","name":"Nordwestmecklenburg","q":0,"r":18,"colour":"rgb(212,0,0)"},
          		"DE80N":{"n":"Vorpommern-Greifswald","id":"DE80N","name":"Vorpommern-Greifswald","q":1,"r":18,"colour":"rgb(212,0,0)"},
          		"DE80O":{"n":"Ludwigslust-Parchim","id":"DE80O","name":"Ludwigslust-Parchim","q":2,"r":18,"colour":"rgb(212,0,0)"},
          		"DE911":{"n":"Braunschweig, Kreisfreie Stadt","id":"DE911","name":"Braunschweig, Kreisfreie Stadt","q":3,"r":18,"colour":"rgb(212,0,0)"},
          		"DE912":{"n":"Salzgitter, Kreisfreie Stadt","id":"DE912","name":"Salzgitter, Kreisfreie Stadt","q":4,"r":18,"colour":"rgb(212,0,0)"},
          		"DE913":{"n":"Wolfsburg, Kreisfreie Stadt","id":"DE913","name":"Wolfsburg, Kreisfreie Stadt","q":5,"r":18,"colour":"rgb(212,0,0)"},
          		"DE914":{"n":"Gifhorn","id":"DE914","name":"Gifhorn","q":6,"r":18,"colour":"rgb(212,0,0)"},
          		"DE916":{"n":"Goslar","id":"DE916","name":"Goslar","q":7,"r":18,"colour":"rgb(212,0,0)"},
          		"DE917":{"n":"Helmstedt","id":"DE917","name":"Helmstedt","q":8,"r":18,"colour":"rgb(212,0,0)"},
          		"DE918":{"n":"Northeim","id":"DE918","name":"Northeim","q":9,"r":18,"colour":"rgb(212,0,0)"},
          		"DE91A":{"n":"Peine","id":"DE91A","name":"Peine","q":10,"r":18,"colour":"rgb(212,0,0)"},
          		"DE91B":{"n":"Wolfenbüttel","id":"DE91B","name":"Wolfenbüttel","q":11,"r":18,"colour":"rgb(212,0,0)"},
          		"DE91C":{"n":"Göttingen","id":"DE91C","name":"Göttingen","q":12,"r":18,"colour":"rgb(212,0,0)"},
          		"DE922":{"n":"Diepholz","id":"DE922","name":"Diepholz","q":13,"r":18,"colour":"rgb(212,0,0)"},
          		"DE923":{"n":"Hameln-Pyrmont","id":"DE923","name":"Hameln-Pyrmont","q":14,"r":18,"colour":"rgb(212,0,0)"},
          		"DE925":{"n":"Hildesheim","id":"DE925","name":"Hildesheim","q":15,"r":18,"colour":"rgb(212,0,0)"},
          		"DE926":{"n":"Holzminden","id":"DE926","name":"Holzminden","q":16,"r":18,"colour":"rgb(212,0,0)"},
          		"DE927":{"n":"Nienburg (Weser)","id":"DE927","name":"Nienburg (Weser)","q":17,"r":18,"colour":"rgb(212,0,0)"},
          		"DE928":{"n":"Schaumburg","id":"DE928","name":"Schaumburg","q":18,"r":18,"colour":"rgb(212,0,0)"},
          		"DE929":{"n":"Region Hannover","id":"DE929","name":"Region Hannover","q":19,"r":18,"colour":"rgb(212,0,0)"},
          		"DE931":{"n":"Celle","id":"DE931","name":"Celle","q":20,"r":18,"colour":"rgb(212,0,0)"},
          		"DE932":{"n":"Cuxhaven","id":"DE932","name":"Cuxhaven","q":21,"r":18,"colour":"rgb(212,0,0)"},
          		"DE933":{"n":"Harburg","id":"DE933","name":"Harburg","q":22,"r":18,"colour":"rgb(212,0,0)"},
          		"DE934":{"n":"Lüchow-Dannenberg","id":"DE934","name":"Lüchow-Dannenberg","q":0,"r":19,"colour":"rgb(212,0,0)"},
          		"DE935":{"n":"Lüneburg, Landkreis","id":"DE935","name":"Lüneburg, Landkreis","q":1,"r":19,"colour":"rgb(212,0,0)"},
          		"DE936":{"n":"Osterholz","id":"DE936","name":"Osterholz","q":2,"r":19,"colour":"rgb(212,0,0)"},
          		"DE937":{"n":"Rotenburg (Wümme)","id":"DE937","name":"Rotenburg (Wümme)","q":3,"r":19,"colour":"rgb(212,0,0)"},
          		"DE938":{"n":"Heidekreis","id":"DE938","name":"Heidekreis","q":4,"r":19,"colour":"rgb(212,0,0)"},
          		"DE939":{"n":"Stade","id":"DE939","name":"Stade","q":5,"r":19,"colour":"rgb(212,0,0)"},
          		"DE93A":{"n":"Uelzen","id":"DE93A","name":"Uelzen","q":6,"r":19,"colour":"rgb(212,0,0)"},
          		"DE93B":{"n":"Verden","id":"DE93B","name":"Verden","q":7,"r":19,"colour":"rgb(212,0,0)"},
          		"DE941":{"n":"Delmenhorst, Kreisfreie Stadt","id":"DE941","name":"Delmenhorst, Kreisfreie Stadt","q":8,"r":19,"colour":"rgb(212,0,0)"},
          		"ES709":{"n":"Tenerife","id":"ES709","name":"Tenerife","q":-17,"r":-4,"colour":"rgb(0,30,30)"},
          		"ES111":{"n":"A Coruña","id":"ES111","name":"A Coruña","q":-16,"r":-4,"colour":"rgb(0,30,30)"},
          		"ES112":{"n":"Lugo","id":"ES112","name":"Lugo","q":-15,"r":-4,"colour":"rgb(0,30,30)"},
          		"ES113":{"n":"Ourense","id":"ES113","name":"Ourense","q":-14,"r":-4,"colour":"rgb(0,30,30)"},
          		"ES114":{"n":"Pontevedra","id":"ES114","name":"Pontevedra","q":-13,"r":-4,"colour":"rgb(0,30,30)"},
          		"ES120":{"n":"Asturias","id":"ES120","name":"Asturias","q":-12,"r":-4,"colour":"rgb(0,30,30)"},
          		"ES130":{"n":"Cantabria","id":"ES130","name":"Cantabria","q":-11,"r":-4,"colour":"rgb(0,30,30)"},
          		"ES211":{"n":"Araba/Álava","id":"ES211","name":"Araba/Álava","q":-10,"r":-4,"colour":"rgb(0,30,30)"},
          		"ES212":{"n":"Gipuzkoa","id":"ES212","name":"Gipuzkoa","q":-9,"r":-4,"colour":"rgb(0,30,30)"},
          		"ES213":{"n":"Bizkaia","id":"ES213","name":"Bizkaia","q":-17,"r":-5,"colour":"rgb(0,30,30)"},
          		"ES220":{"n":"Navarra","id":"ES220","name":"Navarra","q":-16,"r":-5,"colour":"rgb(0,30,30)"},
          		"ES230":{"n":"La Rioja","id":"ES230","name":"La Rioja","q":-15,"r":-5,"colour":"rgb(0,30,30)"},
          		"ES241":{"n":"Huesca","id":"ES241","name":"Huesca","q":-14,"r":-5,"colour":"rgb(0,30,30)"},
          		"ES242":{"n":"Teruel","id":"ES242","name":"Teruel","q":-13,"r":-5,"colour":"rgb(0,30,30)"},
          		"ES243":{"n":"Zaragoza","id":"ES243","name":"Zaragoza","q":-12,"r":-5,"colour":"rgb(0,30,30)"},
          		"ES300":{"n":"Madrid","id":"ES300","name":"Madrid","q":-11,"r":-5,"colour":"rgb(0,30,30)"},
          		"ES411":{"n":"Ávila","id":"ES411","name":"Ávila","q":-10,"r":-5,"colour":"rgb(0,30,30)"},
          		"ES412":{"n":"Burgos","id":"ES412","name":"Burgos","q":-9,"r":-5,"colour":"rgb(0,30,30)"},
          		"ES413":{"n":"León","id":"ES413","name":"León","q":-17,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES414":{"n":"Palencia","id":"ES414","name":"Palencia","q":-16,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES415":{"n":"Salamanca","id":"ES415","name":"Salamanca","q":-15,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES416":{"n":"Segovia","id":"ES416","name":"Segovia","q":-14,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES417":{"n":"Soria","id":"ES417","name":"Soria","q":-13,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES418":{"n":"Valladolid","id":"ES418","name":"Valladolid","q":-12,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES419":{"n":"Zamora","id":"ES419","name":"Zamora","q":-11,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES421":{"n":"Albacete","id":"ES421","name":"Albacete","q":-10,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES422":{"n":"Ciudad Real","id":"ES422","name":"Ciudad Real","q":-9,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES423":{"n":"Cuenca","id":"ES423","name":"Cuenca","q":-16,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES424":{"n":"Guadalajara","id":"ES424","name":"Guadalajara","q":-15,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES425":{"n":"Toledo","id":"ES425","name":"Toledo","q":-14,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES431":{"n":"Badajoz","id":"ES431","name":"Badajoz","q":-13,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES432":{"n":"Cáceres","id":"ES432","name":"Cáceres","q":-12,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES511":{"n":"Barcelona","id":"ES511","name":"Barcelona","q":-11,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES512":{"n":"Girona","id":"ES512","name":"Girona","q":-10,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES513":{"n":"Lleida","id":"ES513","name":"Lleida","q":-9,"r":-6,"colour":"rgb(0,30,30)"},
          		"ES514":{"n":"Tarragona","id":"ES514","name":"Tarragona","q":-16,"r":-7,"colour":"rgb(0,30,30)"},
          		"ES521":{"n":"Alicante/Alacant","id":"ES521","name":"Alicante/Alacant","q":-15,"r":-7,"colour":"rgb(0,30,30)"},
          		"ES522":{"n":"Castellón/Castelló","id":"ES522","name":"Castellón/Castelló","q":-14,"r":-7,"colour":"rgb(0,30,30)"},
          		"ES523":{"n":"Valencia/València","id":"ES523","name":"Valencia/València","q":-13,"r":-7,"colour":"rgb(0,30,30)"},
          		"ES531":{"n":"Eivissa y Formentera","id":"ES531","name":"Eivissa y Formentera","q":-12,"r":-7,"colour":"rgb(0,30,30)"},
          		"ES532":{"n":"Mallorca","id":"ES532","name":"Mallorca","q":-11,"r":-7,"colour":"rgb(0,30,30)"},
          		"ES533":{"n":"Menorca","id":"ES533","name":"Menorca","q":-10,"r":-7,"colour":"rgb(0,30,30)"},
          		"ES611":{"n":"Almería","id":"ES611","name":"Almería","q":-9,"r":-7,"colour":"rgb(0,30,30)"},
          		"ES612":{"n":"Cádiz","id":"ES612","name":"Cádiz","q":-16,"r":-8,"colour":"rgb(0,30,30)"},
          		"ES613":{"n":"Córdoba","id":"ES613","name":"Córdoba","q":-15,"r":-8,"colour":"rgb(0,30,30)"},
          		"ES614":{"n":"Granada","id":"ES614","name":"Granada","q":-14,"r":-8,"colour":"rgb(0,30,30)"},
          		"ES615":{"n":"Huelva","id":"ES615","name":"Huelva","q":-13,"r":-8,"colour":"rgb(0,30,30)"},
          		"ES616":{"n":"Jaén","id":"ES616","name":"Jaén","q":-12,"r":-8,"colour":"rgb(0,30,30)"},
          		"ES617":{"n":"Málaga","id":"ES617","name":"Málaga","q":-11,"r":-8,"colour":"rgb(0,30,30)"},
          		"ES618":{"n":"Sevilla","id":"ES618","name":"Sevilla","q":-10,"r":-8,"colour":"rgb(0,30,30)"},
          		"ES620":{"n":"Murcia","id":"ES620","name":"Murcia","q":-9,"r":-8,"colour":"rgb(0,30,30)"},
          		"ES630":{"n":"Ceuta","id":"ES630","name":"Ceuta","q":-16,"r":-9,"colour":"rgb(0,30,30)"},
          		"ES640":{"n":"Melilla","id":"ES640","name":"Melilla","q":-15,"r":-9,"colour":"rgb(0,30,30)"},
          		"ES703":{"n":"El Hierro","id":"ES703","name":"El Hierro","q":-14,"r":-9,"colour":"rgb(0,30,30)"},
          		"ES704":{"n":"Fuerteventura","id":"ES704","name":"Fuerteventura","q":-13,"r":-9,"colour":"rgb(0,30,30)"},
          		"ES705":{"n":"Gran Canaria","id":"ES705","name":"Gran Canaria","q":-12,"r":-9,"colour":"rgb(0,30,30)"},
          		"ES706":{"n":"La Gomera","id":"ES706","name":"La Gomera","q":-11,"r":-9,"colour":"rgb(0,30,30)"},
          		"ES707":{"n":"La Palma","id":"ES707","name":"La Palma","q":-10,"r":-9,"colour":"rgb(0,30,30)"},
          		"ES708":{"n":"Lanzarote","id":"ES708","name":"Lanzarote","q":-9,"r":-9,"colour":"rgb(0,30,30)"},
          		"PT16D":{"n":"Região de Aveiro","id":"PT16D","name":"Região de Aveiro","q":-20,"r":-4,"colour":"rgb(53,60,60)"},
          		"PT16E":{"n":"Região de Coimbra","id":"PT16E","name":"Região de Coimbra","q":-19,"r":-4,"colour":"rgb(53,60,60)"},
          		"PT16F":{"n":"Região de Leiria","id":"PT16F","name":"Região de Leiria","q":-18,"r":-4,"colour":"rgb(53,60,60)"},
          		"PT16G":{"n":"Viseu Dão Lafões","id":"PT16G","name":"Viseu Dão Lafões","q":-20,"r":-5,"colour":"rgb(53,60,60)"},
          		"PT16H":{"n":"Beira Baixa","id":"PT16H","name":"Beira Baixa","q":-19,"r":-5,"colour":"rgb(53,60,60)"},
          		"PT16I":{"n":"Médio Tejo","id":"PT16I","name":"Médio Tejo","q":-18,"r":-5,"colour":"rgb(53,60,60)"},
          		"PT16J":{"n":"Beiras e Serra da Estrela","id":"PT16J","name":"Beiras e Serra da Estrela","q":-20,"r":-6,"colour":"rgb(53,60,60)"},
          		"PT170":{"n":"Área Metropolitana de Lisboa","id":"PT170","name":"Área Metropolitana de Lisboa","q":-19,"r":-6,"colour":"rgb(53,60,60)"},
          		"PT181":{"n":"Alentejo Litoral","id":"PT181","name":"Alentejo Litoral","q":-18,"r":-6,"colour":"rgb(53,60,60)"},
          		"PT184":{"n":"Baixo Alentejo","id":"PT184","name":"Baixo Alentejo","q":-20,"r":-7,"colour":"rgb(53,60,60)"},
          		"PT185":{"n":"Lezíria do Tejo","id":"PT185","name":"Lezíria do Tejo","q":-19,"r":-7,"colour":"rgb(53,60,60)"},
          		"PT186":{"n":"Alto Alentejo","id":"PT186","name":"Alto Alentejo","q":-18,"r":-7,"colour":"rgb(53,60,60)"},
          		"PT187":{"n":"Alentejo Central","id":"PT187","name":"Alentejo Central","q":-17,"r":-7,"colour":"rgb(53,60,60)"},
          		"PT111":{"n":"Alto Minho","id":"PT111","name":"Alto Minho","q":-20,"r":-8,"colour":"rgb(53,60,60)"},
          		"PT112":{"n":"Cávado","id":"PT112","name":"Cávado","q":-19,"r":-8,"colour":"rgb(53,60,60)"},
          		"PT119":{"n":"Ave","id":"PT119","name":"Ave","q":-18,"r":-8,"colour":"rgb(53,60,60)"},
          		"PT11A":{"n":"Área Metropolitana do Porto","id":"PT11A","name":"Área Metropolitana do Porto","q":-17,"r":-8,"colour":"rgb(53,60,60)"},
          		"PT11B":{"n":"Alto Tâmega","id":"PT11B","name":"Alto Tâmega","q":-20,"r":-9,"colour":"rgb(53,60,60)"},
          		"PT11C":{"n":"Tâmega e Sousa","id":"PT11C","name":"Tâmega e Sousa","q":-19,"r":-9,"colour":"rgb(53,60,60)"},
          		"PT11D":{"n":"Douro","id":"PT11D","name":"Douro","q":-18,"r":-9,"colour":"rgb(53,60,60)"},
          		"PT11E":{"n":"Terras de Trás-os-Montes","id":"PT11E","name":"Terras de Trás-os-Montes","q":-17,"r":-9,"colour":"rgb(53,60,60)"},
          		"PT150":{"n":"Algarve","id":"PT150","name":"Algarve","q":-20,"r":-10,"colour":"rgb(53,60,60)"},
          		"PT16B":{"n":"Oeste","id":"PT16B","name":"Oeste","q":-19,"r":-10,"colour":"rgb(53,60,60)"},
          		"PT200":{"n":"Região Autónoma dos Açores","id":"PT200","name":"Região Autónoma dos Açores","q":-18,"r":-10,"colour":"rgb(53,60,60)"},
          		"PT300":{"n":"Região Autónoma da Madeira","id":"PT300","name":"Região Autónoma da Madeira","q":-17,"r":-10,"colour":"rgb(53,60,60)"},
          		"ITF35":{"n":"Salerno","id":"ITF35","name":"Salerno","q":-4,"r":-4,"colour":"rgb(106,90,90)"},
          		"ITF43":{"n":"Taranto","id":"ITF43","name":"Taranto","q":-3,"r":-4,"colour":"rgb(106,90,90)"},
          		"ITF44":{"n":"Brindisi","id":"ITF44","name":"Brindisi","q":-2,"r":-4,"colour":"rgb(106,90,90)"},
          		"ITF45":{"n":"Lecce","id":"ITF45","name":"Lecce","q":-1,"r":-4,"colour":"rgb(106,90,90)"},
          		"ITF46":{"n":"Foggia","id":"ITF46","name":"Foggia","q":0,"r":-4,"colour":"rgb(106,90,90)"},
          		"ITF47":{"n":"Bari","id":"ITF47","name":"Bari","q":1,"r":-4,"colour":"rgb(106,90,90)"},
          		"ITF48":{"n":"Barletta-Andria-Trani","id":"ITF48","name":"Barletta-Andria-Trani","q":2,"r":-4,"colour":"rgb(106,90,90)"},
          		"ITF51":{"n":"Potenza","id":"ITF51","name":"Potenza","q":3,"r":-4,"colour":"rgb(106,90,90)"},
          		"ITF52":{"n":"Matera","id":"ITF52","name":"Matera","q":-4,"r":-5,"colour":"rgb(106,90,90)"},
          		"ITF61":{"n":"Cosenza","id":"ITF61","name":"Cosenza","q":-3,"r":-5,"colour":"rgb(106,90,90)"},
          		"ITC4C":{"n":"Milano","id":"ITC4C","name":"Milano","q":-2,"r":-5,"colour":"rgb(106,90,90)"},
          		"ITC4D":{"n":"Monza e della Brianza","id":"ITC4D","name":"Monza e della Brianza","q":-1,"r":-5,"colour":"rgb(106,90,90)"},
          		"ITF11":{"n":"L’Aquila","id":"ITF11","name":"L’Aquila","q":0,"r":-5,"colour":"rgb(106,90,90)"},
          		"ITF12":{"n":"Teramo","id":"ITF12","name":"Teramo","q":1,"r":-5,"colour":"rgb(106,90,90)"},
          		"ITF13":{"n":"Pescara","id":"ITF13","name":"Pescara","q":2,"r":-5,"colour":"rgb(106,90,90)"},
          		"ITF14":{"n":"Chieti","id":"ITF14","name":"Chieti","q":3,"r":-5,"colour":"rgb(106,90,90)"},
          		"ITF21":{"n":"Isernia","id":"ITF21","name":"Isernia","q":-4,"r":-6,"colour":"rgb(106,90,90)"},
          		"ITF22":{"n":"Campobasso","id":"ITF22","name":"Campobasso","q":-3,"r":-6,"colour":"rgb(106,90,90)"},
          		"ITF31":{"n":"Caserta","id":"ITF31","name":"Caserta","q":-2,"r":-6,"colour":"rgb(106,90,90)"},
          		"ITF32":{"n":"Benevento","id":"ITF32","name":"Benevento","q":-1,"r":-6,"colour":"rgb(106,90,90)"},
          		"ITF33":{"n":"Napoli","id":"ITF33","name":"Napoli","q":0,"r":-6,"colour":"rgb(106,90,90)"},
          		"ITF34":{"n":"Avellino","id":"ITF34","name":"Avellino","q":1,"r":-6,"colour":"rgb(106,90,90)"},
          		"ITF62":{"n":"Crotone","id":"ITF62","name":"Crotone","q":2,"r":-6,"colour":"rgb(106,90,90)"},
          		"ITF63":{"n":"Catanzaro","id":"ITF63","name":"Catanzaro","q":3,"r":-6,"colour":"rgb(106,90,90)"},
          		"ITF64":{"n":"Vibo Valentia","id":"ITF64","name":"Vibo Valentia","q":-4,"r":-7,"colour":"rgb(106,90,90)"},
          		"ITF65":{"n":"Reggio di Calabria","id":"ITF65","name":"Reggio di Calabria","q":-3,"r":-7,"colour":"rgb(106,90,90)"},
          		"ITG11":{"n":"Trapani","id":"ITG11","name":"Trapani","q":-2,"r":-7,"colour":"rgb(106,90,90)"},
          		"ITG12":{"n":"Palermo","id":"ITG12","name":"Palermo","q":-1,"r":-7,"colour":"rgb(106,90,90)"},
          		"ITG13":{"n":"Messina","id":"ITG13","name":"Messina","q":0,"r":-7,"colour":"rgb(106,90,90)"},
          		"ITG14":{"n":"Agrigento","id":"ITG14","name":"Agrigento","q":1,"r":-7,"colour":"rgb(106,90,90)"},
          		"ITG15":{"n":"Caltanissetta","id":"ITG15","name":"Caltanissetta","q":2,"r":-7,"colour":"rgb(106,90,90)"},
          		"ITG16":{"n":"Enna","id":"ITG16","name":"Enna","q":3,"r":-7,"colour":"rgb(106,90,90)"},
          		"ITG17":{"n":"Catania","id":"ITG17","name":"Catania","q":-4,"r":-8,"colour":"rgb(106,90,90)"},
          		"ITG18":{"n":"Ragusa","id":"ITG18","name":"Ragusa","q":-3,"r":-8,"colour":"rgb(106,90,90)"},
          		"ITG19":{"n":"Siracusa","id":"ITG19","name":"Siracusa","q":-2,"r":-8,"colour":"rgb(106,90,90)"},
          		"ITG2D":{"n":"Sassari","id":"ITG2D","name":"Sassari","q":-1,"r":-8,"colour":"rgb(106,90,90)"},
          		"ITG2E":{"n":"Nuoro","id":"ITG2E","name":"Nuoro","q":0,"r":-8,"colour":"rgb(106,90,90)"},
          		"ITG2H":{"n":"Sud Sardegna","id":"ITG2H","name":"Sud Sardegna","q":1,"r":-8,"colour":"rgb(106,90,90)"},
          		"ITG2G":{"n":"Oristano","id":"ITG2G","name":"Oristano","q":2,"r":-8,"colour":"rgb(106,90,90)"},
          		"ITH10":{"n":"Bolzano-Bozen","id":"ITH10","name":"Bolzano-Bozen","q":3,"r":-8,"colour":"rgb(106,90,90)"},
          		"ITH20":{"n":"Trento","id":"ITH20","name":"Trento","q":-4,"r":-9,"colour":"rgb(106,90,90)"},
          		"ITH31":{"n":"Verona","id":"ITH31","name":"Verona","q":-3,"r":-9,"colour":"rgb(106,90,90)"},
          		"ITH32":{"n":"Vicenza","id":"ITH32","name":"Vicenza","q":-2,"r":-9,"colour":"rgb(106,90,90)"},
          		"ITH33":{"n":"Belluno","id":"ITH33","name":"Belluno","q":-1,"r":-9,"colour":"rgb(106,90,90)"},
          		"ITH34":{"n":"Treviso","id":"ITH34","name":"Treviso","q":0,"r":-9,"colour":"rgb(106,90,90)"},
          		"ITH35":{"n":"Venezia","id":"ITH35","name":"Venezia","q":1,"r":-9,"colour":"rgb(106,90,90)"},
          		"ITH36":{"n":"Padova","id":"ITH36","name":"Padova","q":2,"r":-9,"colour":"rgb(106,90,90)"},
          		"ITH37":{"n":"Rovigo","id":"ITH37","name":"Rovigo","q":3,"r":-9,"colour":"rgb(106,90,90)"},
          		"ITH41":{"n":"Pordenone","id":"ITH41","name":"Pordenone","q":-4,"r":-10,"colour":"rgb(106,90,90)"},
          		"ITH42":{"n":"Udine","id":"ITH42","name":"Udine","q":-3,"r":-10,"colour":"rgb(106,90,90)"},
          		"ITH43":{"n":"Gorizia","id":"ITH43","name":"Gorizia","q":-2,"r":-10,"colour":"rgb(106,90,90)"},
          		"ITH44":{"n":"Trieste","id":"ITH44","name":"Trieste","q":-1,"r":-10,"colour":"rgb(106,90,90)"},
          		"ITH51":{"n":"Piacenza","id":"ITH51","name":"Piacenza","q":0,"r":-10,"colour":"rgb(106,90,90)"},
          		"ITH52":{"n":"Parma","id":"ITH52","name":"Parma","q":1,"r":-10,"colour":"rgb(106,90,90)"},
          		"ITH53":{"n":"Reggio nell’Emilia","id":"ITH53","name":"Reggio nell’Emilia","q":2,"r":-10,"colour":"rgb(106,90,90)"},
          		"ITH54":{"n":"Modena","id":"ITH54","name":"Modena","q":3,"r":-10,"colour":"rgb(106,90,90)"},
          		"ITH55":{"n":"Bologna","id":"ITH55","name":"Bologna","q":-4,"r":-11,"colour":"rgb(106,90,90)"},
          		"ITH56":{"n":"Ferrara","id":"ITH56","name":"Ferrara","q":-3,"r":-11,"colour":"rgb(106,90,90)"},
          		"ITH57":{"n":"Ravenna","id":"ITH57","name":"Ravenna","q":-2,"r":-11,"colour":"rgb(106,90,90)"},
          		"ITH58":{"n":"Forlì-Cesena","id":"ITH58","name":"Forlì-Cesena","q":-1,"r":-11,"colour":"rgb(106,90,90)"},
          		"ITH59":{"n":"Rimini","id":"ITH59","name":"Rimini","q":0,"r":-11,"colour":"rgb(106,90,90)"},
          		"ITI11":{"n":"Massa-Carrara","id":"ITI11","name":"Massa-Carrara","q":1,"r":-11,"colour":"rgb(106,90,90)"},
          		"ITI12":{"n":"Lucca","id":"ITI12","name":"Lucca","q":2,"r":-11,"colour":"rgb(106,90,90)"},
          		"ITI13":{"n":"Pistoia","id":"ITI13","name":"Pistoia","q":3,"r":-11,"colour":"rgb(106,90,90)"},
          		"ITI14":{"n":"Firenze","id":"ITI14","name":"Firenze","q":-4,"r":-12,"colour":"rgb(106,90,90)"},
          		"ITI15":{"n":"Prato","id":"ITI15","name":"Prato","q":-3,"r":-12,"colour":"rgb(106,90,90)"},
          		"ITI16":{"n":"Livorno","id":"ITI16","name":"Livorno","q":-2,"r":-12,"colour":"rgb(106,90,90)"},
          		"ITI17":{"n":"Pisa","id":"ITI17","name":"Pisa","q":-1,"r":-12,"colour":"rgb(106,90,90)"},
          		"ITI18":{"n":"Arezzo","id":"ITI18","name":"Arezzo","q":0,"r":-12,"colour":"rgb(106,90,90)"},
          		"ITI19":{"n":"Siena","id":"ITI19","name":"Siena","q":1,"r":-12,"colour":"rgb(106,90,90)"},
          		"ITI1A":{"n":"Grosseto","id":"ITI1A","name":"Grosseto","q":2,"r":-12,"colour":"rgb(106,90,90)"},
          		"ITI21":{"n":"Perugia","id":"ITI21","name":"Perugia","q":3,"r":-12,"colour":"rgb(106,90,90)"},
          		"ITI22":{"n":"Terni","id":"ITI22","name":"Terni","q":-4,"r":-13,"colour":"rgb(106,90,90)"},
          		"ITI31":{"n":"Pesaro e Urbino","id":"ITI31","name":"Pesaro e Urbino","q":-3,"r":-13,"colour":"rgb(106,90,90)"},
          		"ITI32":{"n":"Ancona","id":"ITI32","name":"Ancona","q":-2,"r":-13,"colour":"rgb(106,90,90)"},
          		"ITI33":{"n":"Macerata","id":"ITI33","name":"Macerata","q":-1,"r":-13,"colour":"rgb(106,90,90)"},
          		"ITI34":{"n":"Ascoli Piceno","id":"ITI34","name":"Ascoli Piceno","q":0,"r":-13,"colour":"rgb(106,90,90)"},
          		"ITI35":{"n":"Fermo","id":"ITI35","name":"Fermo","q":1,"r":-13,"colour":"rgb(106,90,90)"},
          		"ITI41":{"n":"Viterbo","id":"ITI41","name":"Viterbo","q":2,"r":-13,"colour":"rgb(106,90,90)"},
          		"ITI42":{"n":"Rieti","id":"ITI42","name":"Rieti","q":3,"r":-13,"colour":"rgb(106,90,90)"},
          		"ITI43":{"n":"Roma","id":"ITI43","name":"Roma","q":-4,"r":-14,"colour":"rgb(106,90,90)"},
          		"ITI44":{"n":"Latina","id":"ITI44","name":"Latina","q":-3,"r":-14,"colour":"rgb(106,90,90)"},
          		"ITI45":{"n":"Frosinone","id":"ITI45","name":"Frosinone","q":-2,"r":-14,"colour":"rgb(106,90,90)"},
          		"ITC11":{"n":"Torino","id":"ITC11","name":"Torino","q":-1,"r":-14,"colour":"rgb(106,90,90)"},
          		"ITC12":{"n":"Vercelli","id":"ITC12","name":"Vercelli","q":0,"r":-14,"colour":"rgb(106,90,90)"},
          		"ITC13":{"n":"Biella","id":"ITC13","name":"Biella","q":1,"r":-14,"colour":"rgb(106,90,90)"},
          		"ITC14":{"n":"Verbano-Cusio-Ossola","id":"ITC14","name":"Verbano-Cusio-Ossola","q":2,"r":-14,"colour":"rgb(106,90,90)"},
          		"ITC15":{"n":"Novara","id":"ITC15","name":"Novara","q":3,"r":-14,"colour":"rgb(106,90,90)"},
          		"ITC16":{"n":"Cuneo","id":"ITC16","name":"Cuneo","q":-4,"r":-15,"colour":"rgb(106,90,90)"},
          		"ITC17":{"n":"Asti","id":"ITC17","name":"Asti","q":-3,"r":-15,"colour":"rgb(106,90,90)"},
          		"ITC18":{"n":"Alessandria","id":"ITC18","name":"Alessandria","q":-2,"r":-15,"colour":"rgb(106,90,90)"},
          		"ITC20":{"n":"Valle d’Aosta/Vallée d’Aoste","id":"ITC20","name":"Valle d’Aosta/Vallée d’Aoste","q":-1,"r":-15,"colour":"rgb(106,90,90)"},
          		"ITC31":{"n":"Imperia","id":"ITC31","name":"Imperia","q":0,"r":-15,"colour":"rgb(106,90,90)"},
          		"ITC32":{"n":"Savona","id":"ITC32","name":"Savona","q":1,"r":-15,"colour":"rgb(106,90,90)"},
          		"ITC33":{"n":"Genova","id":"ITC33","name":"Genova","q":2,"r":-15,"colour":"rgb(106,90,90)"},
          		"ITC34":{"n":"La Spezia","id":"ITC34","name":"La Spezia","q":3,"r":-15,"colour":"rgb(106,90,90)"},
          		"ITC41":{"n":"Varese","id":"ITC41","name":"Varese","q":-4,"r":-16,"colour":"rgb(106,90,90)"},
          		"ITC42":{"n":"Como","id":"ITC42","name":"Como","q":-3,"r":-16,"colour":"rgb(106,90,90)"},
          		"ITC43":{"n":"Lecco","id":"ITC43","name":"Lecco","q":-2,"r":-16,"colour":"rgb(106,90,90)"},
          		"ITC44":{"n":"Sondrio","id":"ITC44","name":"Sondrio","q":-1,"r":-16,"colour":"rgb(106,90,90)"},
          		"ITC46":{"n":"Bergamo","id":"ITC46","name":"Bergamo","q":0,"r":-16,"colour":"rgb(106,90,90)"},
          		"ITC47":{"n":"Brescia","id":"ITC47","name":"Brescia","q":1,"r":-16,"colour":"rgb(106,90,90)"},
          		"ITC48":{"n":"Pavia","id":"ITC48","name":"Pavia","q":2,"r":-16,"colour":"rgb(106,90,90)"},
          		"ITC49":{"n":"Lodi","id":"ITC49","name":"Lodi","q":3,"r":-16,"colour":"rgb(106,90,90)"},
          		"ITC4A":{"n":"Cremona","id":"ITC4A","name":"Cremona","q":-3,"r":-17,"colour":"rgb(106,90,90)"},
          		"ITC4B":{"n":"Mantova","id":"ITC4B","name":"Mantova","q":-2,"r":-17,"colour":"rgb(106,90,90)"},
          		"ITG2F":{"n":"Cagliari","id":"ITG2F","name":"Cagliari","q":-1,"r":-17,"colour":"rgb(106,90,90)"},
          		"MT001":{"n":"Malta","id":"MT001","name":"Malta","q":-4,"r":-18,"colour":"rgb(159,120,120)"},
          		"MT002":{"n":"Gozo and Comino/Għawdex u Kemmuna","id":"MT002","name":"Gozo and Comino/Għawdex u Kemmuna","q":-5,"r":-18,"colour":"rgb(159,120,120)"},
          		"PL213":{"n":"Miasto Kraków","id":"PL213","name":"Miasto Kraków","q":25,"r":21,"colour":"rgb(212,150,150)"},
          		"PL214":{"n":"Krakowski","id":"PL214","name":"Krakowski","q":26,"r":21,"colour":"rgb(212,150,150)"},
          		"PL217":{"n":"Tarnowski","id":"PL217","name":"Tarnowski","q":27,"r":21,"colour":"rgb(212,150,150)"},
          		"PL218":{"n":"Nowosądecki","id":"PL218","name":"Nowosądecki","q":28,"r":21,"colour":"rgb(212,150,150)"},
          		"PL219":{"n":"Nowotarski","id":"PL219","name":"Nowotarski","q":29,"r":21,"colour":"rgb(212,150,150)"},
          		"PL21A":{"n":"Oświęcimski","id":"PL21A","name":"Oświęcimski","q":26,"r":20,"colour":"rgb(212,150,150)"},
          		"PL224":{"n":"Częstochowski","id":"PL224","name":"Częstochowski","q":27,"r":20,"colour":"rgb(212,150,150)"},
          		"PL225":{"n":"Bielski","id":"PL225","name":"Bielski","q":28,"r":20,"colour":"rgb(212,150,150)"},
          		"PL227":{"n":"Rybnicki","id":"PL227","name":"Rybnicki","q":29,"r":20,"colour":"rgb(212,150,150)"},
          		"PL228":{"n":"Bytomski","id":"PL228","name":"Bytomski","q":26,"r":19,"colour":"rgb(212,150,150)"},
          		"PL229":{"n":"Gliwicki","id":"PL229","name":"Gliwicki","q":27,"r":19,"colour":"rgb(212,150,150)"},
          		"PL22A":{"n":"Katowicki","id":"PL22A","name":"Katowicki","q":28,"r":19,"colour":"rgb(212,150,150)"},
          		"PL22B":{"n":"Sosnowiecki","id":"PL22B","name":"Sosnowiecki","q":29,"r":19,"colour":"rgb(212,150,150)"},
          		"PL22C":{"n":"Tyski","id":"PL22C","name":"Tyski","q":23,"r":18,"colour":"rgb(212,150,150)"},
          		"PL411":{"n":"Pilski","id":"PL411","name":"Pilski","q":24,"r":18,"colour":"rgb(212,150,150)"},
          		"PL414":{"n":"Koniński","id":"PL414","name":"Koniński","q":25,"r":18,"colour":"rgb(212,150,150)"},
          		"PL415":{"n":"Miasto Poznań","id":"PL415","name":"Miasto Poznań","q":26,"r":18,"colour":"rgb(212,150,150)"},
          		"PL416":{"n":"Kaliski","id":"PL416","name":"Kaliski","q":27,"r":18,"colour":"rgb(212,150,150)"},
          		"PL417":{"n":"Leszczyński","id":"PL417","name":"Leszczyński","q":28,"r":18,"colour":"rgb(212,150,150)"},
          		"PL418":{"n":"Poznański","id":"PL418","name":"Poznański","q":29,"r":18,"colour":"rgb(212,150,150)"},
          		"PL424":{"n":"Miasto Szczecin","id":"PL424","name":"Miasto Szczecin","q":23,"r":17,"colour":"rgb(212,150,150)"},
          		"PL426":{"n":"Koszaliński","id":"PL426","name":"Koszaliński","q":24,"r":17,"colour":"rgb(212,150,150)"},
          		"PL427":{"n":"Szczecinecko-pyrzycki","id":"PL427","name":"Szczecinecko-pyrzycki","q":25,"r":17,"colour":"rgb(212,150,150)"},
          		"PL428":{"n":"Szczeciński","id":"PL428","name":"Szczeciński","q":26,"r":17,"colour":"rgb(212,150,150)"},
          		"PL431":{"n":"Gorzowski","id":"PL431","name":"Gorzowski","q":27,"r":17,"colour":"rgb(212,150,150)"},
          		"PL432":{"n":"Zielonogórski","id":"PL432","name":"Zielonogórski","q":28,"r":17,"colour":"rgb(212,150,150)"},
          		"PL514":{"n":"Miasto Wrocław","id":"PL514","name":"Miasto Wrocław","q":29,"r":17,"colour":"rgb(212,150,150)"},
          		"PL515":{"n":"Jeleniogórski","id":"PL515","name":"Jeleniogórski","q":23,"r":16,"colour":"rgb(212,150,150)"},
          		"PL516":{"n":"Legnicko-głogowski","id":"PL516","name":"Legnicko-głogowski","q":24,"r":16,"colour":"rgb(212,150,150)"},
          		"PL517":{"n":"Wałbrzyski","id":"PL517","name":"Wałbrzyski","q":25,"r":16,"colour":"rgb(212,150,150)"},
          		"PL518":{"n":"Wrocławski","id":"PL518","name":"Wrocławski","q":26,"r":16,"colour":"rgb(212,150,150)"},
          		"PL523":{"n":"Nyski","id":"PL523","name":"Nyski","q":27,"r":16,"colour":"rgb(212,150,150)"},
          		"PL524":{"n":"Opolski","id":"PL524","name":"Opolski","q":28,"r":16,"colour":"rgb(212,150,150)"},
          		"PL613":{"n":"Bydgosko-toruński","id":"PL613","name":"Bydgosko-toruński","q":29,"r":16,"colour":"rgb(212,150,150)"},
          		"PL616":{"n":"Grudziądzki","id":"PL616","name":"Grudziądzki","q":23,"r":15,"colour":"rgb(212,150,150)"},
          		"PL617":{"n":"Inowrocławski","id":"PL617","name":"Inowrocławski","q":24,"r":15,"colour":"rgb(212,150,150)"},
          		"PL618":{"n":"Świecki","id":"PL618","name":"Świecki","q":25,"r":15,"colour":"rgb(212,150,150)"},
          		"PL619":{"n":"Włocławski","id":"PL619","name":"Włocławski","q":26,"r":15,"colour":"rgb(212,150,150)"},
          		"PL621":{"n":"Elbląski","id":"PL621","name":"Elbląski","q":27,"r":15,"colour":"rgb(212,150,150)"},
          		"PL622":{"n":"Olsztyński","id":"PL622","name":"Olsztyński","q":28,"r":15,"colour":"rgb(212,150,150)"},
          		"PL623":{"n":"Ełcki","id":"PL623","name":"Ełcki","q":29,"r":15,"colour":"rgb(212,150,150)"},
          		"PL633":{"n":"Trójmiejski","id":"PL633","name":"Trójmiejski","q":23,"r":14,"colour":"rgb(212,150,150)"},
          		"PL634":{"n":"Gdański","id":"PL634","name":"Gdański","q":24,"r":14,"colour":"rgb(212,150,150)"},
          		"PL636":{"n":"Słupski","id":"PL636","name":"Słupski","q":25,"r":14,"colour":"rgb(212,150,150)"},
          		"PL637":{"n":"Chojnicki","id":"PL637","name":"Chojnicki","q":26,"r":14,"colour":"rgb(212,150,150)"},
          		"PL638":{"n":"Starogardzki","id":"PL638","name":"Starogardzki","q":27,"r":14,"colour":"rgb(212,150,150)"},
          		"PL711":{"n":"Miasto Łódź","id":"PL711","name":"Miasto Łódź","q":28,"r":14,"colour":"rgb(212,150,150)"},
          		"PL712":{"n":"Łódzki","id":"PL712","name":"Łódzki","q":29,"r":14,"colour":"rgb(212,150,150)"},
          		"PL713":{"n":"Piotrkowski","id":"PL713","name":"Piotrkowski","q":23,"r":13,"colour":"rgb(212,150,150)"},
          		"PL714":{"n":"Sieradzki","id":"PL714","name":"Sieradzki","q":24,"r":13,"colour":"rgb(212,150,150)"},
          		"PL715":{"n":"Skierniewicki","id":"PL715","name":"Skierniewicki","q":25,"r":13,"colour":"rgb(212,150,150)"},
          		"PL721":{"n":"Kielecki","id":"PL721","name":"Kielecki","q":26,"r":13,"colour":"rgb(212,150,150)"},
          		"PL722":{"n":"Sandomiersko-jędrzejowski","id":"PL722","name":"Sandomiersko-jędrzejowski","q":27,"r":13,"colour":"rgb(212,150,150)"},
          		"PL811":{"n":"Bialski","id":"PL811","name":"Bialski","q":28,"r":13,"colour":"rgb(212,150,150)"},
          		"PL812":{"n":"Chełmsko-zamojski","id":"PL812","name":"Chełmsko-zamojski","q":29,"r":13,"colour":"rgb(212,150,150)"},
          		"PL814":{"n":"Lubelski","id":"PL814","name":"Lubelski","q":23,"r":12,"colour":"rgb(212,150,150)"},
          		"PL815":{"n":"Puławski","id":"PL815","name":"Puławski","q":24,"r":12,"colour":"rgb(212,150,150)"},
          		"PL821":{"n":"Krośnieński","id":"PL821","name":"Krośnieński","q":25,"r":12,"colour":"rgb(212,150,150)"},
          		"PL822":{"n":"Przemyski","id":"PL822","name":"Przemyski","q":26,"r":12,"colour":"rgb(212,150,150)"},
          		"PL823":{"n":"Rzeszowski","id":"PL823","name":"Rzeszowski","q":27,"r":12,"colour":"rgb(212,150,150)"},
          		"PL824":{"n":"Tarnobrzeski","id":"PL824","name":"Tarnobrzeski","q":28,"r":12,"colour":"rgb(212,150,150)"},
          		"PL841":{"n":"Białostocki","id":"PL841","name":"Białostocki","q":29,"r":12,"colour":"rgb(212,150,150)"},
          		"PL842":{"n":"Łomżyński","id":"PL842","name":"Łomżyński","q":23,"r":11,"colour":"rgb(212,150,150)"},
          		"PL843":{"n":"Suwalski","id":"PL843","name":"Suwalski","q":24,"r":11,"colour":"rgb(212,150,150)"},
          		"PL911":{"n":"Miasto Warszawa","id":"PL911","name":"Miasto Warszawa","q":25,"r":11,"colour":"rgb(212,150,150)"},
          		"PL912":{"n":"Warszawski wschodni","id":"PL912","name":"Warszawski wschodni","q":26,"r":11,"colour":"rgb(212,150,150)"},
          		"PL913":{"n":"Warszawski zachodni","id":"PL913","name":"Warszawski zachodni","q":27,"r":11,"colour":"rgb(212,150,150)"},
          		"PL921":{"n":"Radomski","id":"PL921","name":"Radomski","q":28,"r":11,"colour":"rgb(212,150,150)"},
          		"PL922":{"n":"Ciechanowski","id":"PL922","name":"Ciechanowski","q":29,"r":11,"colour":"rgb(212,150,150)"},
          		"PL923":{"n":"Płocki","id":"PL923","name":"Płocki","q":26,"r":10,"colour":"rgb(212,150,150)"},
          		"PL924":{"n":"Ostrołęcki","id":"PL924","name":"Ostrołęcki","q":27,"r":10,"colour":"rgb(212,150,150)"},
          		"PL925":{"n":"Siedlecki","id":"PL925","name":"Siedlecki","q":28,"r":10,"colour":"rgb(212,150,150)"},
          		"PL926":{"n":"Żyrardowski","id":"PL926","name":"Żyrardowski","q":29,"r":10,"colour":"rgb(212,150,150)"},
          		"IS001":{"n":"Höfuðborgarsvæði","id":"IS001","name":"Höfuðborgarsvæði","q":3,"r":22,"colour":"rgb(0,180,180)"},
          		"IS002":{"n":"Landsbyggð","id":"IS002","name":"Landsbyggð","q":3,"r":23,"colour":"rgb(0,180,180)"},
          		"DK032":{"n":"Sydjylland","id":"DK032","name":"Sydjylland","q":4,"r":20,"colour":"rgb(53,210,210)"},
          		"DK041":{"n":"Vestjylland","id":"DK041","name":"Vestjylland","q":5,"r":20,"colour":"rgb(53,210,210)"},
          		"DK042":{"n":"Østjylland","id":"DK042","name":"Østjylland","q":6,"r":20,"colour":"rgb(53,210,210)"},
          		"DK050":{"n":"Nordjylland","id":"DK050","name":"Nordjylland","q":7,"r":20,"colour":"rgb(53,210,210)"},
          		"DK011":{"n":"Byen København","id":"DK011","name":"Byen København","q":4,"r":21,"colour":"rgb(53,210,210)"},
          		"DK012":{"n":"Københavns omegn","id":"DK012","name":"Københavns omegn","q":5,"r":21,"colour":"rgb(53,210,210)"},
          		"DK013":{"n":"Nordsjælland","id":"DK013","name":"Nordsjælland","q":6,"r":21,"colour":"rgb(53,210,210)"},
          		"DK014":{"n":"Bornholm","id":"DK014","name":"Bornholm","q":7,"r":21,"colour":"rgb(53,210,210)"},
          		"DK021":{"n":"Østsjælland","id":"DK021","name":"Østsjælland","q":5,"r":22,"colour":"rgb(53,210,210)"},
          		"DK022":{"n":"Vest- og Sydsjælland","id":"DK022","name":"Vest- og Sydsjælland","q":6,"r":22,"colour":"rgb(53,210,210)"},
          		"DK031":{"n":"Fyn","id":"DK031","name":"Fyn","q":7,"r":22,"colour":"rgb(53,210,210)"},
          		"NO020":{"n":"Innlandet","id":"NO020","name":"Innlandet","q":8,"r":20,"colour":"rgb(106,240,240)"},
          		"NO082":{"n":"Viken","id":"NO082","name":"Viken","q":9,"r":20,"colour":"rgb(106,240,240)"},
          		"NO091":{"n":"Vestfold og Telemark","id":"NO091","name":"Vestfold og Telemark","q":9,"r":19,"colour":"rgb(106,240,240)"},
          		"NO092":{"n":"Agder","id":"NO092","name":"Agder","q":8,"r":21,"colour":"rgb(106,240,240)"},
          		"NO0A1":{"n":"Rogaland","id":"NO0A1","name":"Rogaland","q":9,"r":21,"colour":"rgb(106,240,240)"},
          		"NO0A2":{"n":"Vestland","id":"NO0A2","name":"Vestland","q":8,"r":22,"colour":"rgb(106,240,240)"},
          		"NO0A3":{"n":"Møre og Romsdal","id":"NO0A3","name":"Møre og Romsdal","q":9,"r":22,"colour":"rgb(106,240,240)"},
          		"NO060":{"n":"Trøndelag","id":"NO060","name":"Trøndelag","q":8,"r":23,"colour":"rgb(106,240,240)"},
          		"NO081":{"n":"Oslo","id":"NO081","name":"Oslo","q":9,"r":23,"colour":"rgb(106,240,240)"},
          		"NO071":{"n":"Nordland","id":"NO071","name":"Nordland","q":8,"r":24,"colour":"rgb(106,240,240)"},
          		"NO074":{"n":"Troms og Finnmark","id":"NO074","name":"Troms og Finnmark","q":9,"r":24,"colour":"rgb(106,240,240)"},
          		"NO0B2":{"n":"Svalbard","id":"NO0B2","name":"Svalbard","q":8,"r":25,"colour":"rgb(106,240,240)"},
          		"NO0B1":{"n":"Jan Mayen","id":"NO0B1","name":"Jan Mayen","q":9,"r":25,"colour":"rgb(106,240,240)"},
          		"SE313":{"n":"Gävleborgs län","id":"SE313","name":"Gävleborgs län","q":10,"r":19,"colour":"rgb(159,0,0)"},
          		"SE321":{"n":"Västernorrlands län","id":"SE321","name":"Västernorrlands län","q":11,"r":19,"colour":"rgb(159,0,0)"},
          		"SE322":{"n":"Jämtlands län","id":"SE322","name":"Jämtlands län","q":12,"r":19,"colour":"rgb(159,0,0)"},
          		"SE331":{"n":"Västerbottens län","id":"SE331","name":"Västerbottens län","q":10,"r":20,"colour":"rgb(159,0,0)"},
          		"SE332":{"n":"Norrbottens län","id":"SE332","name":"Norrbottens län","q":11,"r":20,"colour":"rgb(159,0,0)"},
          		"SE231":{"n":"Hallands län","id":"SE231","name":"Hallands län","q":12,"r":20,"colour":"rgb(159,0,0)"},
          		"SE232":{"n":"Västra Götalands län","id":"SE232","name":"Västra Götalands län","q":10,"r":21,"colour":"rgb(159,0,0)"},
          		"SE311":{"n":"Värmlands län","id":"SE311","name":"Värmlands län","q":11,"r":21,"colour":"rgb(159,0,0)"},
          		"SE312":{"n":"Dalarnas län","id":"SE312","name":"Dalarnas län","q":12,"r":21,"colour":"rgb(159,0,0)"},
          		"SE110":{"n":"Stockholms län","id":"SE110","name":"Stockholms län","q":10,"r":22,"colour":"rgb(159,0,0)"},
          		"SE121":{"n":"Uppsala län","id":"SE121","name":"Uppsala län","q":11,"r":22,"colour":"rgb(159,0,0)"},
          		"SE122":{"n":"Södermanlands län","id":"SE122","name":"Södermanlands län","q":12,"r":22,"colour":"rgb(159,0,0)"},
          		"SE123":{"n":"Östergötlands län","id":"SE123","name":"Östergötlands län","q":10,"r":23,"colour":"rgb(159,0,0)"},
          		"SE124":{"n":"Örebro län","id":"SE124","name":"Örebro län","q":11,"r":23,"colour":"rgb(159,0,0)"},
          		"SE125":{"n":"Västmanlands län","id":"SE125","name":"Västmanlands län","q":12,"r":23,"colour":"rgb(159,0,0)"},
          		"SE211":{"n":"Jönköpings län","id":"SE211","name":"Jönköpings län","q":10,"r":24,"colour":"rgb(159,0,0)"},
          		"SE212":{"n":"Kronobergs län","id":"SE212","name":"Kronobergs län","q":11,"r":24,"colour":"rgb(159,0,0)"},
          		"SE213":{"n":"Kalmar län","id":"SE213","name":"Kalmar län","q":12,"r":24,"colour":"rgb(159,0,0)"},
          		"SE214":{"n":"Gotlands län","id":"SE214","name":"Gotlands län","q":10,"r":25,"colour":"rgb(159,0,0)"},
          		"SE221":{"n":"Blekinge län","id":"SE221","name":"Blekinge län","q":11,"r":25,"colour":"rgb(159,0,0)"},
          		"SE224":{"n":"Skåne län","id":"SE224","name":"Skåne län","q":12,"r":25,"colour":"rgb(159,0,0)"},
          		"FI193":{"n":"Keski-Suomi","id":"FI193","name":"Keski-Suomi","q":13,"r":19,"colour":"rgb(212,30,30)"},
          		"FI194":{"n":"Etelä-Pohjanmaa","id":"FI194","name":"Etelä-Pohjanmaa","q":14,"r":19,"colour":"rgb(212,30,30)"},
          		"FI195":{"n":"Pohjanmaa","id":"FI195","name":"Pohjanmaa","q":15,"r":19,"colour":"rgb(212,30,30)"},
          		"FI196":{"n":"Satakunta","id":"FI196","name":"Satakunta","q":16,"r":19,"colour":"rgb(212,30,30)"},
          		"FI197":{"n":"Pirkanmaa","id":"FI197","name":"Pirkanmaa","q":13,"r":20,"colour":"rgb(212,30,30)"},
          		"FI1B1":{"n":"Helsinki-Uusimaa","id":"FI1B1","name":"Helsinki-Uusimaa","q":14,"r":20,"colour":"rgb(212,30,30)"},
          		"FI1D7":{"n":"Lappi","id":"FI1D7","name":"Lappi","q":15,"r":20,"colour":"rgb(212,30,30)"},
          		"FI1D8":{"n":"Kainuu","id":"FI1D8","name":"Kainuu","q":16,"r":20,"colour":"rgb(212,30,30)"},
          		"FI1D9":{"n":"Pohjois-Pohjanmaa","id":"FI1D9","name":"Pohjois-Pohjanmaa","q":13,"r":21,"colour":"rgb(212,30,30)"},
          		"FI200":{"n":"Åland","id":"FI200","name":"Åland","q":14,"r":21,"colour":"rgb(212,30,30)"},
          		"FI1C1":{"n":"Varsinais-Suomi","id":"FI1C1","name":"Varsinais-Suomi","q":15,"r":21,"colour":"rgb(212,30,30)"},
          		"FI1C2":{"n":"Kanta-Häme","id":"FI1C2","name":"Kanta-Häme","q":16,"r":21,"colour":"rgb(212,30,30)"},
          		"FI1C3":{"n":"Päijät-Häme","id":"FI1C3","name":"Päijät-Häme","q":13,"r":22,"colour":"rgb(212,30,30)"},
          		"FI1C4":{"n":"Kymenlaakso","id":"FI1C4","name":"Kymenlaakso","q":14,"r":22,"colour":"rgb(212,30,30)"},
          		"FI1C5":{"n":"Etelä-Karjala","id":"FI1C5","name":"Etelä-Karjala","q":15,"r":22,"colour":"rgb(212,30,30)"},
          		"FI1D1":{"n":"Etelä-Savo","id":"FI1D1","name":"Etelä-Savo","q":16,"r":22,"colour":"rgb(212,30,30)"},
          		"FI1D2":{"n":"Pohjois-Savo","id":"FI1D2","name":"Pohjois-Savo","q":13,"r":23,"colour":"rgb(212,30,30)"},
          		"FI1D3":{"n":"Pohjois-Karjala","id":"FI1D3","name":"Pohjois-Karjala","q":14,"r":23,"colour":"rgb(212,30,30)"},
          		"FI1D5":{"n":"Keski-Pohjanmaa","id":"FI1D5","name":"Keski-Pohjanmaa","q":15,"r":23,"colour":"rgb(212,30,30)"},
          		"EE001":{"n":"Põhja-Eesti","id":"EE001","name":"Põhja-Eesti","q":17,"r":19,"colour":"rgb(0,60,60)"},
          		"EE004":{"n":"Lääne-Eesti","id":"EE004","name":"Lääne-Eesti","q":18,"r":19,"colour":"rgb(0,60,60)"},
          		"EE009":{"n":"Kesk-Eesti","id":"EE009","name":"Kesk-Eesti","q":19,"r":19,"colour":"rgb(0,60,60)"},
          		"EE00A":{"n":"Kirde-Eesti","id":"EE00A","name":"Kirde-Eesti","q":17,"r":20,"colour":"rgb(0,60,60)"},
          		"EE008":{"n":"Lõuna-Eesti","id":"EE008","name":"Lõuna-Eesti","q":18,"r":20,"colour":"rgb(0,60,60)"},
          		"LV003":{"n":"Kurzeme","id":"LV003","name":"Kurzeme","q":20,"r":19,"colour":"rgb(53,90,90)"},
          		"LV005":{"n":"Latgale","id":"LV005","name":"Latgale","q":21,"r":19,"colour":"rgb(53,90,90)"},
          		"LV006":{"n":"Rīga","id":"LV006","name":"Rīga","q":22,"r":19,"colour":"rgb(53,90,90)"},
          		"LV007":{"n":"Pierīga","id":"LV007","name":"Pierīga","q":19,"r":20,"colour":"rgb(53,90,90)"},
          		"LV008":{"n":"Vidzeme","id":"LV008","name":"Vidzeme","q":20,"r":20,"colour":"rgb(53,90,90)"},
          		"LV009":{"n":"Zemgale","id":"LV009","name":"Zemgale","q":21,"r":20,"colour":"rgb(53,90,90)"},
          		"LT021":{"n":"Alytaus apskritis","id":"LT021","name":"Alytaus apskritis","q":23,"r":19,"colour":"rgb(106,120,120)"},
          		"LT022":{"n":"Kauno apskritis","id":"LT022","name":"Kauno apskritis","q":24,"r":19,"colour":"rgb(106,120,120)"},
          		"LT023":{"n":"Klaipėdos apskritis","id":"LT023","name":"Klaipėdos apskritis","q":25,"r":19,"colour":"rgb(106,120,120)"},
          		"LT024":{"n":"Marijampolės apskritis","id":"LT024","name":"Marijampolės apskritis","q":22,"r":20,"colour":"rgb(106,120,120)"},
          		"LT025":{"n":"Panevėžio apskritis","id":"LT025","name":"Panevėžio apskritis","q":23,"r":20,"colour":"rgb(106,120,120)"},
          		"LT026":{"n":"Šiaulių apskritis","id":"LT026","name":"Šiaulių apskritis","q":24,"r":20,"colour":"rgb(106,120,120)"},
          		"LT027":{"n":"Tauragės apskritis","id":"LT027","name":"Tauragės apskritis","q":25,"r":20,"colour":"rgb(106,120,120)"},
          		"LT028":{"n":"Telšių apskritis","id":"LT028","name":"Telšių apskritis","q":22,"r":21,"colour":"rgb(106,120,120)"},
          		"LT029":{"n":"Utenos apskritis","id":"LT029","name":"Utenos apskritis","q":23,"r":21,"colour":"rgb(106,120,120)"},
          		"LT011":{"n":"Vilniaus apskritis","id":"LT011","name":"Vilniaus apskritis","q":24,"r":21,"colour":"rgb(106,120,120)"},
          		"UKJ46":{"n":"West Kent","id":"UKJ46","name":"West Kent","q":-21,"r":20,"colour":"rgb(159,150,150)"},
          		"UKK11":{"n":"Bristol, City of","id":"UKK11","name":"Bristol, City of","q":-20,"r":20,"colour":"rgb(159,150,150)"},
          		"UKG31":{"n":"Birmingham","id":"UKG31","name":"Birmingham","q":-19,"r":20,"colour":"rgb(159,150,150)"},
          		"UKG32":{"n":"Solihull","id":"UKG32","name":"Solihull","q":-18,"r":20,"colour":"rgb(159,150,150)"},
          		"UKG33":{"n":"Coventry","id":"UKG33","name":"Coventry","q":-17,"r":20,"colour":"rgb(159,150,150)"},
          		"UKG36":{"n":"Dudley","id":"UKG36","name":"Dudley","q":-16,"r":20,"colour":"rgb(159,150,150)"},
          		"UKG37":{"n":"Sandwell","id":"UKG37","name":"Sandwell","q":-15,"r":20,"colour":"rgb(159,150,150)"},
          		"UKG38":{"n":"Walsall","id":"UKG38","name":"Walsall","q":-14,"r":20,"colour":"rgb(159,150,150)"},
          		"UKG39":{"n":"Wolverhampton","id":"UKG39","name":"Wolverhampton","q":-13,"r":20,"colour":"rgb(159,150,150)"},
          		"UKH11":{"n":"Peterborough","id":"UKH11","name":"Peterborough","q":-22,"r":19,"colour":"rgb(159,150,150)"},
          		"UKH12":{"n":"Cambridgeshire CC","id":"UKH12","name":"Cambridgeshire CC","q":-21,"r":19,"colour":"rgb(159,150,150)"},
          		"UKH14":{"n":"Suffolk","id":"UKH14","name":"Suffolk","q":-20,"r":19,"colour":"rgb(159,150,150)"},
          		"UKH15":{"n":"Norwich and East Norfolk","id":"UKH15","name":"Norwich and East Norfolk","q":-19,"r":19,"colour":"rgb(159,150,150)"},
          		"UKH16":{"n":"North and West Norfolk","id":"UKH16","name":"North and West Norfolk","q":-18,"r":19,"colour":"rgb(159,150,150)"},
          		"UKH17":{"n":"Breckland and South Norfolk","id":"UKH17","name":"Breckland and South Norfolk","q":-17,"r":19,"colour":"rgb(159,150,150)"},
          		"UKI43":{"n":"Haringey and Islington","id":"UKI43","name":"Haringey and Islington","q":-16,"r":19,"colour":"rgb(159,150,150)"},
          		"UKI44":{"n":"Lewisham and Southwark","id":"UKI44","name":"Lewisham and Southwark","q":-15,"r":19,"colour":"rgb(159,150,150)"},
          		"UKI45":{"n":"Lambeth","id":"UKI45","name":"Lambeth","q":-14,"r":19,"colour":"rgb(159,150,150)"},
          		"UKI51":{"n":"Bexley and Greenwich","id":"UKI51","name":"Bexley and Greenwich","q":-13,"r":19,"colour":"rgb(159,150,150)"},
          		"UKI52":{"n":"Barking & Dagenham and Havering","id":"UKI52","name":"Barking & Dagenham and Havering","q":-22,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI53":{"n":"Redbridge and Waltham Forest","id":"UKI53","name":"Redbridge and Waltham Forest","q":-21,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI54":{"n":"Enfield","id":"UKI54","name":"Enfield","q":-20,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI61":{"n":"Bromley","id":"UKI61","name":"Bromley","q":-19,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI62":{"n":"Croydon","id":"UKI62","name":"Croydon","q":-18,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI63":{"n":"Merton, Kingston upon Thames and Sutton","id":"UKI63","name":"Merton, Kingston upon Thames and Sutton","q":-17,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI71":{"n":"Barnet","id":"UKI71","name":"Barnet","q":-16,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI72":{"n":"Brent","id":"UKI72","name":"Brent","q":-15,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI73":{"n":"Ealing","id":"UKI73","name":"Ealing","q":-14,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI74":{"n":"Harrow and Hillingdon","id":"UKI74","name":"Harrow and Hillingdon","q":-13,"r":18,"colour":"rgb(159,150,150)"},
          		"UKI75":{"n":"Hounslow and Richmond upon Thames","id":"UKI75","name":"Hounslow and Richmond upon Thames","q":-22,"r":17,"colour":"rgb(159,150,150)"},
          		"UKJ11":{"n":"Berkshire","id":"UKJ11","name":"Berkshire","q":-21,"r":17,"colour":"rgb(159,150,150)"},
          		"UKJ12":{"n":"Milton Keynes","id":"UKJ12","name":"Milton Keynes","q":-20,"r":17,"colour":"rgb(159,150,150)"},
          		"UKJ13":{"n":"Buckinghamshire CC","id":"UKJ13","name":"Buckinghamshire CC","q":-19,"r":17,"colour":"rgb(159,150,150)"},
          		"UKJ14":{"n":"Oxfordshire","id":"UKJ14","name":"Oxfordshire","q":-18,"r":17,"colour":"rgb(159,150,150)"},
          		"UKJ21":{"n":"Brighton and Hove","id":"UKJ21","name":"Brighton and Hove","q":-17,"r":17,"colour":"rgb(159,150,150)"},
          		"UKJ22":{"n":"East Sussex CC","id":"UKJ22","name":"East Sussex CC","q":-16,"r":17,"colour":"rgb(159,150,150)"},
          		"UKN0F":{"n":"Mid and East Antrim","id":"UKN0F","name":"Mid and East Antrim","q":-15,"r":17,"colour":"rgb(159,150,150)"},
          		"UKN0G":{"n":"Fermanagh and Omagh","id":"UKN0G","name":"Fermanagh and Omagh","q":-14,"r":17,"colour":"rgb(159,150,150)"},
          		"UKK41":{"n":"Plymouth","id":"UKK41","name":"Plymouth","q":-13,"r":17,"colour":"rgb(159,150,150)"},
          		"UKK42":{"n":"Torbay","id":"UKK42","name":"Torbay","q":-22,"r":16,"colour":"rgb(159,150,150)"},
          		"UKK43":{"n":"Devon CC","id":"UKK43","name":"Devon CC","q":-21,"r":16,"colour":"rgb(159,150,150)"},
          		"UKL11":{"n":"Isle of Anglesey","id":"UKL11","name":"Isle of Anglesey","q":-20,"r":16,"colour":"rgb(159,150,150)"},
          		"UKL12":{"n":"Gwynedd","id":"UKL12","name":"Gwynedd","q":-19,"r":16,"colour":"rgb(159,150,150)"},
          		"UKL13":{"n":"Conwy and Denbighshire","id":"UKL13","name":"Conwy and Denbighshire","q":-18,"r":16,"colour":"rgb(159,150,150)"},
          		"UKL14":{"n":"South West Wales","id":"UKL14","name":"South West Wales","q":-17,"r":16,"colour":"rgb(159,150,150)"},
          		"UKL15":{"n":"Central Valleys","id":"UKL15","name":"Central Valleys","q":-16,"r":16,"colour":"rgb(159,150,150)"},
          		"UKL16":{"n":"Gwent Valleys","id":"UKL16","name":"Gwent Valleys","q":-15,"r":16,"colour":"rgb(159,150,150)"},
          		"UKL17":{"n":"Bridgend and Neath Port Talbot","id":"UKL17","name":"Bridgend and Neath Port Talbot","q":-14,"r":16,"colour":"rgb(159,150,150)"},
          		"UKL18":{"n":"Swansea","id":"UKL18","name":"Swansea","q":-13,"r":16,"colour":"rgb(159,150,150)"},
          		"UKL21":{"n":"Monmouthshire and Newport","id":"UKL21","name":"Monmouthshire and Newport","q":-22,"r":15,"colour":"rgb(159,150,150)"},
          		"UKL22":{"n":"Cardiff and Vale of Glamorgan","id":"UKL22","name":"Cardiff and Vale of Glamorgan","q":-21,"r":15,"colour":"rgb(159,150,150)"},
          		"UKC12":{"n":"South Teesside","id":"UKC12","name":"South Teesside","q":-20,"r":15,"colour":"rgb(159,150,150)"},
          		"UKC13":{"n":"Darlington","id":"UKC13","name":"Darlington","q":-19,"r":15,"colour":"rgb(159,150,150)"},
          		"UKC14":{"n":"Durham CC","id":"UKC14","name":"Durham CC","q":-18,"r":15,"colour":"rgb(159,150,150)"},
          		"UKC21":{"n":"Northumberland","id":"UKC21","name":"Northumberland","q":-17,"r":15,"colour":"rgb(159,150,150)"},
          		"UKC22":{"n":"Tyneside","id":"UKC22","name":"Tyneside","q":-16,"r":15,"colour":"rgb(159,150,150)"},
          		"UKC23":{"n":"Sunderland","id":"UKC23","name":"Sunderland","q":-15,"r":15,"colour":"rgb(159,150,150)"},
          		"UKD11":{"n":"West Cumbria","id":"UKD11","name":"West Cumbria","q":-14,"r":15,"colour":"rgb(159,150,150)"},
          		"UKD12":{"n":"East Cumbria","id":"UKD12","name":"East Cumbria","q":-13,"r":15,"colour":"rgb(159,150,150)"},
          		"UKD33":{"n":"Manchester","id":"UKD33","name":"Manchester","q":-22,"r":14,"colour":"rgb(159,150,150)"},
          		"UKD34":{"n":"Greater Manchester South West","id":"UKD34","name":"Greater Manchester South West","q":-21,"r":14,"colour":"rgb(159,150,150)"},
          		"UKD35":{"n":"Greater Manchester South East","id":"UKD35","name":"Greater Manchester South East","q":-20,"r":14,"colour":"rgb(159,150,150)"},
          		"UKD36":{"n":"Greater Manchester North West","id":"UKD36","name":"Greater Manchester North West","q":-19,"r":14,"colour":"rgb(159,150,150)"},
          		"UKD37":{"n":"Greater Manchester North East","id":"UKD37","name":"Greater Manchester North East","q":-18,"r":14,"colour":"rgb(159,150,150)"},
          		"UKD41":{"n":"Blackburn with Darwen","id":"UKD41","name":"Blackburn with Darwen","q":-17,"r":14,"colour":"rgb(159,150,150)"},
          		"UKJ25":{"n":"West Surrey","id":"UKJ25","name":"West Surrey","q":-16,"r":14,"colour":"rgb(159,150,150)"},
          		"UKJ26":{"n":"East Surrey","id":"UKJ26","name":"East Surrey","q":-15,"r":14,"colour":"rgb(159,150,150)"},
          		"UKJ27":{"n":"West Sussex (South West)","id":"UKJ27","name":"West Sussex (South West)","q":-14,"r":14,"colour":"rgb(159,150,150)"},
          		"UKJ28":{"n":"West Sussex (North East)","id":"UKJ28","name":"West Sussex (North East)","q":-13,"r":14,"colour":"rgb(159,150,150)"},
          		"UKJ31":{"n":"Portsmouth","id":"UKJ31","name":"Portsmouth","q":-22,"r":13,"colour":"rgb(159,150,150)"},
          		"UKJ32":{"n":"Southampton","id":"UKJ32","name":"Southampton","q":-21,"r":13,"colour":"rgb(159,150,150)"},
          		"UKJ34":{"n":"Isle of Wight","id":"UKJ34","name":"Isle of Wight","q":-20,"r":13,"colour":"rgb(159,150,150)"},
          		"UKJ35":{"n":"South Hampshire","id":"UKJ35","name":"South Hampshire","q":-19,"r":13,"colour":"rgb(159,150,150)"},
          		"UKJ36":{"n":"Central Hampshire","id":"UKJ36","name":"Central Hampshire","q":-18,"r":13,"colour":"rgb(159,150,150)"},
          		"UKJ37":{"n":"North Hampshire","id":"UKJ37","name":"North Hampshire","q":-17,"r":13,"colour":"rgb(159,150,150)"},
          		"UKJ41":{"n":"Medway","id":"UKJ41","name":"Medway","q":-16,"r":13,"colour":"rgb(159,150,150)"},
          		"UKJ43":{"n":"Kent Thames Gateway","id":"UKJ43","name":"Kent Thames Gateway","q":-15,"r":13,"colour":"rgb(159,150,150)"},
          		"UKJ44":{"n":"East Kent","id":"UKJ44","name":"East Kent","q":-14,"r":13,"colour":"rgb(159,150,150)"},
          		"UKJ45":{"n":"Mid Kent","id":"UKJ45","name":"Mid Kent","q":-13,"r":13,"colour":"rgb(159,150,150)"},
          		"UKL23":{"n":"Flintshire and Wrexham","id":"UKL23","name":"Flintshire and Wrexham","q":-22,"r":12,"colour":"rgb(159,150,150)"},
          		"UKL24":{"n":"Powys","id":"UKL24","name":"Powys","q":-21,"r":12,"colour":"rgb(159,150,150)"},
          		"UKK12":{"n":"Bath and North East Somerset, North Somerset and South Gloucestershire","id":"UKK12","name":"Bath and North East Somerset, North Somerset and South Gloucestershire","q":-20,"r":12,"colour":"rgb(159,150,150)"},
          		"UKK13":{"n":"Gloucestershire","id":"UKK13","name":"Gloucestershire","q":-19,"r":12,"colour":"rgb(159,150,150)"},
          		"UKK14":{"n":"Swindon","id":"UKK14","name":"Swindon","q":-18,"r":12,"colour":"rgb(159,150,150)"},
          		"UKK15":{"n":"Wiltshire CC","id":"UKK15","name":"Wiltshire CC","q":-17,"r":12,"colour":"rgb(159,150,150)"},
          		"UKK24":{"n":"Bournemouth, Christchurch and Poole","id":"UKK24","name":"Bournemouth, Christchurch and Poole","q":-16,"r":12,"colour":"rgb(159,150,150)"},
          		"UKK25":{"n":"Dorset","id":"UKK25","name":"Dorset","q":-15,"r":12,"colour":"rgb(159,150,150)"},
          		"UKK23":{"n":"Somerset","id":"UKK23","name":"Somerset","q":-14,"r":12,"colour":"rgb(159,150,150)"},
          		"UKK30":{"n":"Cornwall and Isles of Scilly","id":"UKK30","name":"Cornwall and Isles of Scilly","q":-13,"r":12,"colour":"rgb(159,150,150)"},
          		"UKM84":{"n":"North Lanarkshire","id":"UKM84","name":"North Lanarkshire","q":-22,"r":11,"colour":"rgb(159,150,150)"},
          		"UKM91":{"n":"Scottish Borders","id":"UKM91","name":"Scottish Borders","q":-21,"r":11,"colour":"rgb(159,150,150)"},
          		"UKM92":{"n":"Dumfries & Galloway","id":"UKM92","name":"Dumfries & Galloway","q":-20,"r":11,"colour":"rgb(159,150,150)"},
          		"UKM93":{"n":"East Ayrshire and North Ayrshire mainland","id":"UKM93","name":"East Ayrshire and North Ayrshire mainland","q":-19,"r":11,"colour":"rgb(159,150,150)"},
          		"UKM94":{"n":"South Ayrshire","id":"UKM94","name":"South Ayrshire","q":-18,"r":11,"colour":"rgb(159,150,150)"},
          		"UKM95":{"n":"South Lanarkshire","id":"UKM95","name":"South Lanarkshire","q":-17,"r":11,"colour":"rgb(159,150,150)"},
          		"UKN06":{"n":"Belfast","id":"UKN06","name":"Belfast","q":-16,"r":11,"colour":"rgb(159,150,150)"},
          		"UKN07":{"n":"Armagh City, Banbridge and Craigavon","id":"UKN07","name":"Armagh City, Banbridge and Craigavon","q":-15,"r":11,"colour":"rgb(159,150,150)"},
          		"UKN08":{"n":"Newry, Mourne and Down","id":"UKN08","name":"Newry, Mourne and Down","q":-14,"r":11,"colour":"rgb(159,150,150)"},
          		"UKN09":{"n":"Ards and North Down","id":"UKN09","name":"Ards and North Down","q":-13,"r":11,"colour":"rgb(159,150,150)"},
          		"UKN0A":{"n":"Derry City and Strabane","id":"UKN0A","name":"Derry City and Strabane","q":-22,"r":10,"colour":"rgb(159,150,150)"},
          		"UKN0B":{"n":"Mid Ulster","id":"UKN0B","name":"Mid Ulster","q":-21,"r":10,"colour":"rgb(159,150,150)"},
          		"UKN0C":{"n":"Causeway Coast and Glens","id":"UKN0C","name":"Causeway Coast and Glens","q":-20,"r":10,"colour":"rgb(159,150,150)"},
          		"UKN0D":{"n":"Antrim and Newtownabbey","id":"UKN0D","name":"Antrim and Newtownabbey","q":-19,"r":10,"colour":"rgb(159,150,150)"},
          		"UKN0E":{"n":"Lisburn and Castlereagh","id":"UKN0E","name":"Lisburn and Castlereagh","q":-18,"r":10,"colour":"rgb(159,150,150)"},
          		"UKC11":{"n":"Hartlepool and Stockton-on-Tees","id":"UKC11","name":"Hartlepool and Stockton-on-Tees","q":-17,"r":10,"colour":"rgb(159,150,150)"},
          		"UKD42":{"n":"Blackpool","id":"UKD42","name":"Blackpool","q":-16,"r":10,"colour":"rgb(159,150,150)"},
          		"UKD44":{"n":"Lancaster and Wyre","id":"UKD44","name":"Lancaster and Wyre","q":-15,"r":10,"colour":"rgb(159,150,150)"},
          		"UKD45":{"n":"Mid Lancashire","id":"UKD45","name":"Mid Lancashire","q":-14,"r":10,"colour":"rgb(159,150,150)"},
          		"UKD46":{"n":"East Lancashire","id":"UKD46","name":"East Lancashire","q":-13,"r":10,"colour":"rgb(159,150,150)"},
          		"UKD47":{"n":"Chorley and West Lancashire","id":"UKD47","name":"Chorley and West Lancashire","q":-22,"r":9,"colour":"rgb(159,150,150)"},
          		"UKD61":{"n":"Warrington","id":"UKD61","name":"Warrington","q":-21,"r":9,"colour":"rgb(159,150,150)"},
          		"UKD62":{"n":"Cheshire East","id":"UKD62","name":"Cheshire East","q":-20,"r":9,"colour":"rgb(159,150,150)"},
          		"UKD63":{"n":"Cheshire West and Chester","id":"UKD63","name":"Cheshire West and Chester","q":-19,"r":9,"colour":"rgb(159,150,150)"},
          		"UKD71":{"n":"East Merseyside","id":"UKD71","name":"East Merseyside","q":-18,"r":9,"colour":"rgb(159,150,150)"},
          		"UKD72":{"n":"Liverpool","id":"UKD72","name":"Liverpool","q":-17,"r":9,"colour":"rgb(159,150,150)"},
          		"UKD73":{"n":"Sefton","id":"UKD73","name":"Sefton","q":-16,"r":9,"colour":"rgb(159,150,150)"},
          		"UKD74":{"n":"Wirral","id":"UKD74","name":"Wirral","q":-15,"r":9,"colour":"rgb(159,150,150)"},
          		"UKE11":{"n":"Kingston upon Hull, City of","id":"UKE11","name":"Kingston upon Hull, City of","q":-14,"r":9,"colour":"rgb(159,150,150)"},
          		"UKE12":{"n":"East Riding of Yorkshire","id":"UKE12","name":"East Riding of Yorkshire","q":-13,"r":9,"colour":"rgb(159,150,150)"},
          		"UKE13":{"n":"North and North East Lincolnshire","id":"UKE13","name":"North and North East Lincolnshire","q":-22,"r":8,"colour":"rgb(159,150,150)"},
          		"UKE21":{"n":"York","id":"UKE21","name":"York","q":-21,"r":8,"colour":"rgb(159,150,150)"},
          		"UKE22":{"n":"North Yorkshire CC","id":"UKE22","name":"North Yorkshire CC","q":-20,"r":8,"colour":"rgb(159,150,150)"},
          		"UKE31":{"n":"Barnsley, Doncaster and Rotherham","id":"UKE31","name":"Barnsley, Doncaster and Rotherham","q":-19,"r":8,"colour":"rgb(159,150,150)"},
          		"UKE32":{"n":"Sheffield","id":"UKE32","name":"Sheffield","q":-18,"r":8,"colour":"rgb(159,150,150)"},
          		"UKE41":{"n":"Bradford","id":"UKE41","name":"Bradford","q":-17,"r":8,"colour":"rgb(159,150,150)"},
          		"UKE42":{"n":"Leeds","id":"UKE42","name":"Leeds","q":-16,"r":8,"colour":"rgb(159,150,150)"},
          		"UKE44":{"n":"Calderdale and Kirklees","id":"UKE44","name":"Calderdale and Kirklees","q":-15,"r":8,"colour":"rgb(159,150,150)"},
          		"UKE45":{"n":"Wakefield","id":"UKE45","name":"Wakefield","q":-14,"r":8,"colour":"rgb(159,150,150)"},
          		"UKF11":{"n":"Derby","id":"UKF11","name":"Derby","q":-13,"r":8,"colour":"rgb(159,150,150)"},
          		"UKF12":{"n":"East Derbyshire","id":"UKF12","name":"East Derbyshire","q":-22,"r":7,"colour":"rgb(159,150,150)"},
          		"UKF13":{"n":"South and West Derbyshire","id":"UKF13","name":"South and West Derbyshire","q":-21,"r":7,"colour":"rgb(159,150,150)"},
          		"UKF14":{"n":"Nottingham","id":"UKF14","name":"Nottingham","q":-20,"r":7,"colour":"rgb(159,150,150)"},
          		"UKF15":{"n":"North Nottinghamshire","id":"UKF15","name":"North Nottinghamshire","q":-19,"r":7,"colour":"rgb(159,150,150)"},
          		"UKF16":{"n":"South Nottinghamshire","id":"UKF16","name":"South Nottinghamshire","q":-18,"r":7,"colour":"rgb(159,150,150)"},
          		"UKF21":{"n":"Leicester","id":"UKF21","name":"Leicester","q":-17,"r":7,"colour":"rgb(159,150,150)"},
          		"UKF22":{"n":"Leicestershire CC and Rutland","id":"UKF22","name":"Leicestershire CC and Rutland","q":-16,"r":7,"colour":"rgb(159,150,150)"},
          		"UKF24":{"n":"West Northamptonshire","id":"UKF24","name":"West Northamptonshire","q":-15,"r":7,"colour":"rgb(159,150,150)"},
          		"UKF25":{"n":"North Northamptonshire","id":"UKF25","name":"North Northamptonshire","q":-14,"r":7,"colour":"rgb(159,150,150)"},
          		"UKF30":{"n":"Lincolnshire","id":"UKF30","name":"Lincolnshire","q":-13,"r":7,"colour":"rgb(159,150,150)"},
          		"UKG11":{"n":"Herefordshire, County of","id":"UKG11","name":"Herefordshire, County of","q":-22,"r":6,"colour":"rgb(159,150,150)"},
          		"UKG12":{"n":"Worcestershire","id":"UKG12","name":"Worcestershire","q":-21,"r":6,"colour":"rgb(159,150,150)"},
          		"UKG13":{"n":"Warwickshire","id":"UKG13","name":"Warwickshire","q":-20,"r":6,"colour":"rgb(159,150,150)"},
          		"UKG21":{"n":"Telford and Wrekin","id":"UKG21","name":"Telford and Wrekin","q":-19,"r":6,"colour":"rgb(159,150,150)"},
          		"UKG22":{"n":"Shropshire CC","id":"UKG22","name":"Shropshire CC","q":-18,"r":6,"colour":"rgb(159,150,150)"},
          		"UKG23":{"n":"Stoke-on-Trent","id":"UKG23","name":"Stoke-on-Trent","q":-17,"r":6,"colour":"rgb(159,150,150)"},
          		"UKG24":{"n":"Staffordshire CC","id":"UKG24","name":"Staffordshire CC","q":-16,"r":6,"colour":"rgb(159,150,150)"},
          		"UKM50":{"n":"Aberdeen City and Aberdeenshire","id":"UKM50","name":"Aberdeen City and Aberdeenshire","q":-15,"r":6,"colour":"rgb(159,150,150)"},
          		"UKM61":{"n":"Caithness & Sutherland and Ross & Cromarty","id":"UKM61","name":"Caithness & Sutherland and Ross & Cromarty","q":-14,"r":6,"colour":"rgb(159,150,150)"},
          		"UKM62":{"n":"Inverness & Nairn and Moray, Badenoch & Strathspey","id":"UKM62","name":"Inverness & Nairn and Moray, Badenoch & Strathspey","q":-13,"r":6,"colour":"rgb(159,150,150)"},
          		"UKM63":{"n":"Lochaber, Skye & Lochalsh, Arran & Cumbrae and Argyll & Bute","id":"UKM63","name":"Lochaber, Skye & Lochalsh, Arran & Cumbrae and Argyll & Bute","q":-22,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM64":{"n":"Na h-Eileanan Siar (Western Isles)","id":"UKM64","name":"Na h-Eileanan Siar (Western Isles)","q":-21,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM65":{"n":"Orkney Islands","id":"UKM65","name":"Orkney Islands","q":-20,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM66":{"n":"Shetland Islands","id":"UKM66","name":"Shetland Islands","q":-19,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM71":{"n":"Angus and Dundee City","id":"UKM71","name":"Angus and Dundee City","q":-18,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM72":{"n":"Clackmannanshire and Fife","id":"UKM72","name":"Clackmannanshire and Fife","q":-17,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM73":{"n":"East Lothian and Midlothian","id":"UKM73","name":"East Lothian and Midlothian","q":-16,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM75":{"n":"Edinburgh, City of","id":"UKM75","name":"Edinburgh, City of","q":-15,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM76":{"n":"Falkirk","id":"UKM76","name":"Falkirk","q":-14,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM77":{"n":"Perth & Kinross and Stirling","id":"UKM77","name":"Perth & Kinross and Stirling","q":-13,"r":5,"colour":"rgb(159,150,150)"},
          		"UKM78":{"n":"West Lothian","id":"UKM78","name":"West Lothian","q":-22,"r":4,"colour":"rgb(159,150,150)"},
          		"UKM81":{"n":"East Dunbartonshire, West Dunbartonshire and Helensburgh & Lomond","id":"UKM81","name":"East Dunbartonshire, West Dunbartonshire and Helensburgh & Lomond","q":-21,"r":4,"colour":"rgb(159,150,150)"},
          		"UKM82":{"n":"Glasgow City","id":"UKM82","name":"Glasgow City","q":-20,"r":4,"colour":"rgb(159,150,150)"},
          		"UKM83":{"n":"Inverclyde, East Renfrewshire and Renfrewshire","id":"UKM83","name":"Inverclyde, East Renfrewshire and Renfrewshire","q":-19,"r":4,"colour":"rgb(159,150,150)"},
          		"UKH21":{"n":"Luton","id":"UKH21","name":"Luton","q":-18,"r":4,"colour":"rgb(159,150,150)"},
          		"UKH23":{"n":"Hertfordshire","id":"UKH23","name":"Hertfordshire","q":-17,"r":4,"colour":"rgb(159,150,150)"},
          		"UKH24":{"n":"Bedford","id":"UKH24","name":"Bedford","q":-16,"r":4,"colour":"rgb(159,150,150)"},
          		"UKH25":{"n":"Central Bedfordshire","id":"UKH25","name":"Central Bedfordshire","q":-15,"r":4,"colour":"rgb(159,150,150)"},
          		"UKH31":{"n":"Southend-on-Sea","id":"UKH31","name":"Southend-on-Sea","q":-14,"r":4,"colour":"rgb(159,150,150)"},
          		"UKH32":{"n":"Thurrock","id":"UKH32","name":"Thurrock","q":-13,"r":4,"colour":"rgb(159,150,150)"},
          		"UKH34":{"n":"Essex Haven Gateway","id":"UKH34","name":"Essex Haven Gateway","q":-22,"r":3,"colour":"rgb(159,150,150)"},
          		"UKH35":{"n":"West Essex","id":"UKH35","name":"West Essex","q":-21,"r":3,"colour":"rgb(159,150,150)"},
          		"UKH36":{"n":"Heart of Essex","id":"UKH36","name":"Heart of Essex","q":-20,"r":3,"colour":"rgb(159,150,150)"},
          		"UKH37":{"n":"Essex Thames Gateway","id":"UKH37","name":"Essex Thames Gateway","q":-19,"r":3,"colour":"rgb(159,150,150)"},
          		"UKI31":{"n":"Camden and City of London","id":"UKI31","name":"Camden and City of London","q":-18,"r":3,"colour":"rgb(159,150,150)"},
          		"UKI32":{"n":"Westminster","id":"UKI32","name":"Westminster","q":-17,"r":3,"colour":"rgb(159,150,150)"},
          		"UKI33":{"n":"Kensington & Chelsea and Hammersmith & Fulham","id":"UKI33","name":"Kensington & Chelsea and Hammersmith & Fulham","q":-16,"r":3,"colour":"rgb(159,150,150)"},
          		"UKI34":{"n":"Wandsworth","id":"UKI34","name":"Wandsworth","q":-15,"r":3,"colour":"rgb(159,150,150)"},
          		"UKI41":{"n":"Hackney and Newham","id":"UKI41","name":"Hackney and Newham","q":-14,"r":3,"colour":"rgb(159,150,150)"},
          		"UKI42":{"n":"Tower Hamlets","id":"UKI42","name":"Tower Hamlets","q":-13,"r":3,"colour":"rgb(159,150,150)"},
          		"IE041":{"n":"Border","id":"IE041","name":"Border","q":-25,"r":17,"colour":"rgb(212,180,180)"},
          		"IE042":{"n":"West","id":"IE042","name":"West","q":-24,"r":17,"colour":"rgb(212,180,180)"},
          		"IE051":{"n":"Mid-West","id":"IE051","name":"Mid-West","q":-25,"r":16,"colour":"rgb(212,180,180)"},
          		"IE052":{"n":"South-East","id":"IE052","name":"South-East","q":-24,"r":16,"colour":"rgb(212,180,180)"},
          		"IE053":{"n":"South-West","id":"IE053","name":"South-West","q":-25,"r":15,"colour":"rgb(212,180,180)"},
          		"IE061":{"n":"Dublin","id":"IE061","name":"Dublin","q":-24,"r":15,"colour":"rgb(212,180,180)"},
          		"IE062":{"n":"Mid-East","id":"IE062","name":"Mid-East","q":-25,"r":14,"colour":"rgb(212,180,180)"},
          		"IE063":{"n":"Midland","id":"IE063","name":"Midland","q":-24,"r":14,"colour":"rgb(212,180,180)"},
          		"HU110":{"n":"Budapest","id":"HU110","name":"Budapest","q":8,"r":1,"colour":"rgb(0,210,210)"},
          		"HU120":{"n":"Pest","id":"HU120","name":"Pest","q":9,"r":1,"colour":"rgb(0,210,210)"},
          		"HU211":{"n":"Fejér","id":"HU211","name":"Fejér","q":10,"r":1,"colour":"rgb(0,210,210)"},
          		"HU212":{"n":"Komárom-Esztergom","id":"HU212","name":"Komárom-Esztergom","q":11,"r":1,"colour":"rgb(0,210,210)"},
          		"HU213":{"n":"Veszprém","id":"HU213","name":"Veszprém","q":12,"r":1,"colour":"rgb(0,210,210)"},
          		"HU221":{"n":"Győr-Moson-Sopron","id":"HU221","name":"Győr-Moson-Sopron","q":8,"r":0,"colour":"rgb(0,210,210)"},
          		"HU222":{"n":"Vas","id":"HU222","name":"Vas","q":9,"r":0,"colour":"rgb(0,210,210)"},
          		"HU223":{"n":"Zala","id":"HU223","name":"Zala","q":10,"r":0,"colour":"rgb(0,210,210)"},
          		"HU231":{"n":"Baranya","id":"HU231","name":"Baranya","q":11,"r":0,"colour":"rgb(0,210,210)"},
          		"HU232":{"n":"Somogy","id":"HU232","name":"Somogy","q":12,"r":0,"colour":"rgb(0,210,210)"},
          		"HU233":{"n":"Tolna","id":"HU233","name":"Tolna","q":7,"r":-1,"colour":"rgb(0,210,210)"},
          		"HU311":{"n":"Borsod-Abaúj-Zemplén","id":"HU311","name":"Borsod-Abaúj-Zemplén","q":8,"r":-1,"colour":"rgb(0,210,210)"},
          		"HU312":{"n":"Heves","id":"HU312","name":"Heves","q":9,"r":-1,"colour":"rgb(0,210,210)"},
          		"HU313":{"n":"Nógrád","id":"HU313","name":"Nógrád","q":10,"r":-1,"colour":"rgb(0,210,210)"},
          		"HU321":{"n":"Hajdú-Bihar","id":"HU321","name":"Hajdú-Bihar","q":11,"r":-1,"colour":"rgb(0,210,210)"},
          		"HU322":{"n":"Jász-Nagykun-Szolnok","id":"HU322","name":"Jász-Nagykun-Szolnok","q":7,"r":-2,"colour":"rgb(0,210,210)"},
          		"HU323":{"n":"Szabolcs-Szatmár-Bereg","id":"HU323","name":"Szabolcs-Szatmár-Bereg","q":8,"r":-2,"colour":"rgb(0,210,210)"},
          		"HU331":{"n":"Bács-Kiskun","id":"HU331","name":"Bács-Kiskun","q":9,"r":-2,"colour":"rgb(0,210,210)"},
          		"HU332":{"n":"Békés","id":"HU332","name":"Békés","q":10,"r":-2,"colour":"rgb(0,210,210)"},
          		"HU333":{"n":"Csongrád","id":"HU333","name":"Csongrád","q":11,"r":-2,"colour":"rgb(0,210,210)"},
          		"CZ010":{"n":"Hlavní město Praha","id":"CZ010","name":"Hlavní město Praha","q":13,"r":1,"colour":"rgb(53,240,240)"},
          		"CZ020":{"n":"Středočeský kraj","id":"CZ020","name":"Středočeský kraj","q":14,"r":1,"colour":"rgb(53,240,240)"},
          		"CZ031":{"n":"Jihočeský kraj","id":"CZ031","name":"Jihočeský kraj","q":13,"r":0,"colour":"rgb(53,240,240)"},
          		"CZ032":{"n":"Plzeňský kraj","id":"CZ032","name":"Plzeňský kraj","q":14,"r":0,"colour":"rgb(53,240,240)"},
          		"CZ041":{"n":"Karlovarský kraj","id":"CZ041","name":"Karlovarský kraj","q":12,"r":-1,"colour":"rgb(53,240,240)"},
          		"CZ042":{"n":"Ústecký kraj","id":"CZ042","name":"Ústecký kraj","q":13,"r":-1,"colour":"rgb(53,240,240)"},
          		"CZ051":{"n":"Liberecký kraj","id":"CZ051","name":"Liberecký kraj","q":14,"r":-1,"colour":"rgb(53,240,240)"},
          		"CZ052":{"n":"Královéhradecký kraj","id":"CZ052","name":"Královéhradecký kraj","q":12,"r":-2,"colour":"rgb(53,240,240)"},
          		"CZ053":{"n":"Pardubický kraj","id":"CZ053","name":"Pardubický kraj","q":13,"r":-2,"colour":"rgb(53,240,240)"},
          		"CZ063":{"n":"Kraj Vysočina","id":"CZ063","name":"Kraj Vysočina","q":14,"r":-2,"colour":"rgb(53,240,240)"},
          		"CZ064":{"n":"Jihomoravský kraj","id":"CZ064","name":"Jihomoravský kraj","q":12,"r":-3,"colour":"rgb(53,240,240)"},
          		"CZ071":{"n":"Olomoucký kraj","id":"CZ071","name":"Olomoucký kraj","q":13,"r":-3,"colour":"rgb(53,240,240)"},
          		"CZ072":{"n":"Zlínský kraj","id":"CZ072","name":"Zlínský kraj","q":14,"r":-3,"colour":"rgb(53,240,240)"},
          		"CZ080":{"n":"Moravskoslezský kraj","id":"CZ080","name":"Moravskoslezský kraj","q":12,"r":-4,"colour":"rgb(53,240,240)"},
          		"SK010":{"n":"Bratislavský kraj","id":"SK010","name":"Bratislavský kraj","q":15,"r":1,"colour":"rgb(106,0,0)"},
          		"SK021":{"n":"Trnavský kraj","id":"SK021","name":"Trnavský kraj","q":15,"r":0,"colour":"rgb(106,0,0)"},
          		"SK022":{"n":"Trenčiansky kraj","id":"SK022","name":"Trenčiansky kraj","q":15,"r":-1,"colour":"rgb(106,0,0)"},
          		"SK023":{"n":"Nitriansky kraj","id":"SK023","name":"Nitriansky kraj","q":15,"r":-2,"colour":"rgb(106,0,0)"},
          		"SK031":{"n":"Žilinský kraj","id":"SK031","name":"Žilinský kraj","q":15,"r":-3,"colour":"rgb(106,0,0)"},
          		"SK032":{"n":"Banskobystrický kraj","id":"SK032","name":"Banskobystrický kraj","q":13,"r":-4,"colour":"rgb(106,0,0)"},
          		"SK041":{"n":"Prešovský kraj","id":"SK041","name":"Prešovský kraj","q":14,"r":-4,"colour":"rgb(106,0,0)"},
          		"SK042":{"n":"Košický kraj","id":"SK042","name":"Košický kraj","q":15,"r":-4,"colour":"rgb(106,0,0)"},
          		"SI031":{"n":"Pomurska","id":"SI031","name":"Pomurska","q":4,"r":-4,"colour":"rgb(159,30,30)"},
          		"SI042":{"n":"Gorenjska","id":"SI042","name":"Gorenjska","q":5,"r":-4,"colour":"rgb(159,30,30)"},
          		"SI043":{"n":"Goriška","id":"SI043","name":"Goriška","q":6,"r":-4,"colour":"rgb(159,30,30)"},
          		"SI044":{"n":"Obalno-kraška","id":"SI044","name":"Obalno-kraška","q":4,"r":-5,"colour":"rgb(159,30,30)"},
          		"SI032":{"n":"Podravska","id":"SI032","name":"Podravska","q":5,"r":-5,"colour":"rgb(159,30,30)"},
          		"SI033":{"n":"Koroška","id":"SI033","name":"Koroška","q":6,"r":-5,"colour":"rgb(159,30,30)"},
          		"SI034":{"n":"Savinjska","id":"SI034","name":"Savinjska","q":4,"r":-6,"colour":"rgb(159,30,30)"},
          		"SI035":{"n":"Zasavska","id":"SI035","name":"Zasavska","q":5,"r":-6,"colour":"rgb(159,30,30)"},
          		"SI036":{"n":"Posavska","id":"SI036","name":"Posavska","q":6,"r":-6,"colour":"rgb(159,30,30)"},
          		"SI037":{"n":"Jugovzhodna Slovenija","id":"SI037","name":"Jugovzhodna Slovenija","q":4,"r":-7,"colour":"rgb(159,30,30)"},
          		"SI038":{"n":"Primorsko-notranjska","id":"SI038","name":"Primorsko-notranjska","q":5,"r":-7,"colour":"rgb(159,30,30)"},
          		"SI041":{"n":"Osrednjeslovenska","id":"SI041","name":"Osrednjeslovenska","q":6,"r":-7,"colour":"rgb(159,30,30)"},
          		"RS110":{"n":"City of Belgrade","id":"RS110","name":"City of Belgrade","q":7,"r":-3,"colour":"rgb(212,60,60)"},
          		"RS121":{"n":"Zapadnobačka oblast","id":"RS121","name":"Zapadnobačka oblast","q":8,"r":-3,"colour":"rgb(212,60,60)"},
          		"RS122":{"n":"Južnobanatska oblast","id":"RS122","name":"Južnobanatska oblast","q":9,"r":-3,"colour":"rgb(212,60,60)"},
          		"RS123":{"n":"Južnobačka oblast","id":"RS123","name":"Južnobačka oblast","q":10,"r":-3,"colour":"rgb(212,60,60)"},
          		"RS124":{"n":"Severnobanatska oblast","id":"RS124","name":"Severnobanatska oblast","q":11,"r":-3,"colour":"rgb(212,60,60)"},
          		"RS125":{"n":"Severnobačka oblast","id":"RS125","name":"Severnobačka oblast","q":7,"r":-4,"colour":"rgb(212,60,60)"},
          		"RS126":{"n":"Srednjobanatska oblast","id":"RS126","name":"Srednjobanatska oblast","q":8,"r":-4,"colour":"rgb(212,60,60)"},
          		"RS127":{"n":"Sremska oblast","id":"RS127","name":"Sremska oblast","q":9,"r":-4,"colour":"rgb(212,60,60)"},
          		"RS211":{"n":"Zlatiborska oblast","id":"RS211","name":"Zlatiborska oblast","q":10,"r":-4,"colour":"rgb(212,60,60)"},
          		"RS212":{"n":"Kolubarska oblast","id":"RS212","name":"Kolubarska oblast","q":11,"r":-4,"colour":"rgb(212,60,60)"},
          		"RS213":{"n":"Mačvanska oblast","id":"RS213","name":"Mačvanska oblast","q":7,"r":-5,"colour":"rgb(212,60,60)"},
          		"RS214":{"n":"Moravička oblast","id":"RS214","name":"Moravička oblast","q":8,"r":-5,"colour":"rgb(212,60,60)"},
          		"RS215":{"n":"Pomoravska oblast","id":"RS215","name":"Pomoravska oblast","q":9,"r":-5,"colour":"rgb(212,60,60)"},
          		"RS216":{"n":"Rasinska oblast","id":"RS216","name":"Rasinska oblast","q":10,"r":-5,"colour":"rgb(212,60,60)"},
          		"RS217":{"n":"Raška oblast","id":"RS217","name":"Raška oblast","q":11,"r":-5,"colour":"rgb(212,60,60)"},
          		"RS218":{"n":"Šumadijska oblast","id":"RS218","name":"Šumadijska oblast","q":7,"r":-6,"colour":"rgb(212,60,60)"},
          		"RS221":{"n":"Borska oblast","id":"RS221","name":"Borska oblast","q":8,"r":-6,"colour":"rgb(212,60,60)"},
          		"RS222":{"n":"Braničevska oblast","id":"RS222","name":"Braničevska oblast","q":9,"r":-6,"colour":"rgb(212,60,60)"},
          		"RS223":{"n":"Zaječarska oblast","id":"RS223","name":"Zaječarska oblast","q":10,"r":-6,"colour":"rgb(212,60,60)"},
          		"RS224":{"n":"Jablanička oblast","id":"RS224","name":"Jablanička oblast","q":11,"r":-6,"colour":"rgb(212,60,60)"},
          		"RS225":{"n":"Nišavska oblast","id":"RS225","name":"Nišavska oblast","q":7,"r":-7,"colour":"rgb(212,60,60)"},
          		"RS226":{"n":"Pirotska oblast","id":"RS226","name":"Pirotska oblast","q":8,"r":-7,"colour":"rgb(212,60,60)"},
          		"RS227":{"n":"Podunavska oblast","id":"RS227","name":"Podunavska oblast","q":9,"r":-7,"colour":"rgb(212,60,60)"},
          		"RS228":{"n":"Pčinjska oblast","id":"RS228","name":"Pčinjska oblast","q":10,"r":-7,"colour":"rgb(212,60,60)"},
          		"RS229":{"n":"Toplička oblast","id":"RS229","name":"Toplička oblast","q":11,"r":-7,"colour":"rgb(212,60,60)"},
          		"RO122":{"n":"Braşov","id":"RO122","name":"Braşov","q":12,"r":-5,"colour":"rgb(0,90,90)"},
          		"RO123":{"n":"Covasna","id":"RO123","name":"Covasna","q":13,"r":-5,"colour":"rgb(0,90,90)"},
          		"RO124":{"n":"Harghita","id":"RO124","name":"Harghita","q":14,"r":-5,"colour":"rgb(0,90,90)"},
          		"RO125":{"n":"Mureş","id":"RO125","name":"Mureş","q":15,"r":-5,"colour":"rgb(0,90,90)"},
          		"RO126":{"n":"Sibiu","id":"RO126","name":"Sibiu","q":16,"r":-5,"colour":"rgb(0,90,90)"},
          		"RO211":{"n":"Bacău","id":"RO211","name":"Bacău","q":17,"r":-5,"colour":"rgb(0,90,90)"},
          		"RO212":{"n":"Botoşani","id":"RO212","name":"Botoşani","q":18,"r":-5,"colour":"rgb(0,90,90)"},
          		"RO213":{"n":"Iaşi","id":"RO213","name":"Iaşi","q":12,"r":-6,"colour":"rgb(0,90,90)"},
          		"RO214":{"n":"Neamţ","id":"RO214","name":"Neamţ","q":13,"r":-6,"colour":"rgb(0,90,90)"},
          		"RO215":{"n":"Suceava","id":"RO215","name":"Suceava","q":14,"r":-6,"colour":"rgb(0,90,90)"},
          		"RO216":{"n":"Vaslui","id":"RO216","name":"Vaslui","q":15,"r":-6,"colour":"rgb(0,90,90)"},
          		"RO221":{"n":"Brăila","id":"RO221","name":"Brăila","q":16,"r":-6,"colour":"rgb(0,90,90)"},
          		"RO222":{"n":"Buzău","id":"RO222","name":"Buzău","q":17,"r":-6,"colour":"rgb(0,90,90)"},
          		"RO223":{"n":"Constanţa","id":"RO223","name":"Constanţa","q":18,"r":-6,"colour":"rgb(0,90,90)"},
          		"RO224":{"n":"Galaţi","id":"RO224","name":"Galaţi","q":12,"r":-7,"colour":"rgb(0,90,90)"},
          		"RO225":{"n":"Tulcea","id":"RO225","name":"Tulcea","q":13,"r":-7,"colour":"rgb(0,90,90)"},
          		"RO226":{"n":"Vrancea","id":"RO226","name":"Vrancea","q":14,"r":-7,"colour":"rgb(0,90,90)"},
          		"RO311":{"n":"Argeş","id":"RO311","name":"Argeş","q":15,"r":-7,"colour":"rgb(0,90,90)"},
          		"RO312":{"n":"Călăraşi","id":"RO312","name":"Călăraşi","q":16,"r":-7,"colour":"rgb(0,90,90)"},
          		"RO313":{"n":"Dâmboviţa","id":"RO313","name":"Dâmboviţa","q":17,"r":-7,"colour":"rgb(0,90,90)"},
          		"RO314":{"n":"Giurgiu","id":"RO314","name":"Giurgiu","q":18,"r":-7,"colour":"rgb(0,90,90)"},
          		"RO315":{"n":"Ialomiţa","id":"RO315","name":"Ialomiţa","q":12,"r":-8,"colour":"rgb(0,90,90)"},
          		"RO316":{"n":"Prahova","id":"RO316","name":"Prahova","q":13,"r":-8,"colour":"rgb(0,90,90)"},
          		"RO317":{"n":"Teleorman","id":"RO317","name":"Teleorman","q":14,"r":-8,"colour":"rgb(0,90,90)"},
          		"RO321":{"n":"Bucureşti","id":"RO321","name":"Bucureşti","q":15,"r":-8,"colour":"rgb(0,90,90)"},
          		"RO322":{"n":"Ilfov","id":"RO322","name":"Ilfov","q":16,"r":-8,"colour":"rgb(0,90,90)"},
          		"RO411":{"n":"Dolj","id":"RO411","name":"Dolj","q":17,"r":-8,"colour":"rgb(0,90,90)"},
          		"RO412":{"n":"Gorj","id":"RO412","name":"Gorj","q":18,"r":-8,"colour":"rgb(0,90,90)"},
          		"RO413":{"n":"Mehedinţi","id":"RO413","name":"Mehedinţi","q":12,"r":-9,"colour":"rgb(0,90,90)"},
          		"RO414":{"n":"Olt","id":"RO414","name":"Olt","q":13,"r":-9,"colour":"rgb(0,90,90)"},
          		"RO415":{"n":"Vâlcea","id":"RO415","name":"Vâlcea","q":14,"r":-9,"colour":"rgb(0,90,90)"},
          		"RO421":{"n":"Arad","id":"RO421","name":"Arad","q":15,"r":-9,"colour":"rgb(0,90,90)"},
          		"RO422":{"n":"Caraş-Severin","id":"RO422","name":"Caraş-Severin","q":16,"r":-9,"colour":"rgb(0,90,90)"},
          		"RO423":{"n":"Hunedoara","id":"RO423","name":"Hunedoara","q":17,"r":-9,"colour":"rgb(0,90,90)"},
          		"RO424":{"n":"Timiş","id":"RO424","name":"Timiş","q":18,"r":-9,"colour":"rgb(0,90,90)"},
          		"RO111":{"n":"Bihor","id":"RO111","name":"Bihor","q":12,"r":-10,"colour":"rgb(0,90,90)"},
          		"RO112":{"n":"Bistriţa-Năsăud","id":"RO112","name":"Bistriţa-Năsăud","q":13,"r":-10,"colour":"rgb(0,90,90)"},
          		"RO113":{"n":"Cluj","id":"RO113","name":"Cluj","q":14,"r":-10,"colour":"rgb(0,90,90)"},
          		"RO114":{"n":"Maramureş","id":"RO114","name":"Maramureş","q":15,"r":-10,"colour":"rgb(0,90,90)"},
          		"RO115":{"n":"Satu Mare","id":"RO115","name":"Satu Mare","q":16,"r":-10,"colour":"rgb(0,90,90)"},
          		"RO116":{"n":"Sălaj","id":"RO116","name":"Sălaj","q":17,"r":-10,"colour":"rgb(0,90,90)"},
          		"RO121":{"n":"Alba","id":"RO121","name":"Alba","q":18,"r":-10,"colour":"rgb(0,90,90)"},
          		"ME000":{"n":"Crna Gora","id":"ME000","name":"Crna Gora","q":8,"r":-8,"colour":"rgb(53,120,120)"},
          		"MK001":{"n":"Vardarski","id":"MK001","name":"Vardarski","q":9,"r":-8,"colour":"rgb(106,150,150)"},
          		"MK002":{"n":"Istočen","id":"MK002","name":"Istočen","q":10,"r":-8,"colour":"rgb(106,150,150)"},
          		"MK003":{"n":"Jugozapaden","id":"MK003","name":"Jugozapaden","q":11,"r":-8,"colour":"rgb(106,150,150)"},
          		"MK004":{"n":"Jugoistočen","id":"MK004","name":"Jugoistočen","q":8,"r":-9,"colour":"rgb(106,150,150)"},
          		"MK005":{"n":"Pelagoniski","id":"MK005","name":"Pelagoniski","q":9,"r":-9,"colour":"rgb(106,150,150)"},
          		"MK006":{"n":"Pološki","id":"MK006","name":"Pološki","q":10,"r":-9,"colour":"rgb(106,150,150)"},
          		"MK007":{"n":"Severoistočen","id":"MK007","name":"Severoistočen","q":11,"r":-9,"colour":"rgb(106,150,150)"},
          		"MK008":{"n":"Skopski","id":"MK008","name":"Skopski","q":8,"r":-10,"colour":"rgb(106,150,150)"},
          		"HR031":{"n":"Primorsko-goranska županija","id":"HR031","name":"Primorsko-goranska županija","q":5,"r":-8,"colour":"rgb(159,180,180)"},
          		"HR032":{"n":"Ličko-senjska županija","id":"HR032","name":"Ličko-senjska županija","q":6,"r":-8,"colour":"rgb(159,180,180)"},
          		"HR033":{"n":"Zadarska županija","id":"HR033","name":"Zadarska županija","q":7,"r":-8,"colour":"rgb(159,180,180)"},
          		"HR034":{"n":"Šibensko-kninska županija","id":"HR034","name":"Šibensko-kninska županija","q":5,"r":-9,"colour":"rgb(159,180,180)"},
          		"HR035":{"n":"Splitsko-dalmatinska županija","id":"HR035","name":"Splitsko-dalmatinska županija","q":6,"r":-9,"colour":"rgb(159,180,180)"},
          		"HR036":{"n":"Istarska županija","id":"HR036","name":"Istarska županija","q":7,"r":-9,"colour":"rgb(159,180,180)"},
          		"HR037":{"n":"Dubrovačko-neretvanska županija","id":"HR037","name":"Dubrovačko-neretvanska županija","q":5,"r":-10,"colour":"rgb(159,180,180)"},
          		"HR050":{"n":"Grad Zagreb","id":"HR050","name":"Grad Zagreb","q":6,"r":-10,"colour":"rgb(159,180,180)"},
          		"HR065":{"n":"Zagrebačka županija","id":"HR065","name":"Zagrebačka županija","q":7,"r":-10,"colour":"rgb(159,180,180)"},
          		"HR064":{"n":"Krapinsko-zagorska županija","id":"HR064","name":"Krapinsko-zagorska županija","q":5,"r":-11,"colour":"rgb(159,180,180)"},
          		"HR062":{"n":"Varaždinska županija","id":"HR062","name":"Varaždinska županija","q":6,"r":-11,"colour":"rgb(159,180,180)"},
          		"HR063":{"n":"Koprivničko-križevačka županija","id":"HR063","name":"Koprivničko-križevačka županija","q":7,"r":-11,"colour":"rgb(159,180,180)"},
          		"HR061":{"n":"Međimurska županija","id":"HR061","name":"Međimurska županija","q":5,"r":-12,"colour":"rgb(159,180,180)"},
          		"HR021":{"n":"Bjelovarsko-bilogorska županija","id":"HR021","name":"Bjelovarsko-bilogorska županija","q":6,"r":-12,"colour":"rgb(159,180,180)"},
          		"HR022":{"n":"Virovitičko-podravska županija","id":"HR022","name":"Virovitičko-podravska županija","q":7,"r":-12,"colour":"rgb(159,180,180)"},
          		"HR023":{"n":"Požeško-slavonska županija","id":"HR023","name":"Požeško-slavonska županija","q":5,"r":-13,"colour":"rgb(159,180,180)"},
          		"HR024":{"n":"Brodsko-posavska županija","id":"HR024","name":"Brodsko-posavska županija","q":6,"r":-13,"colour":"rgb(159,180,180)"},
          		"HR025":{"n":"Osječko-baranjska županija","id":"HR025","name":"Osječko-baranjska županija","q":7,"r":-13,"colour":"rgb(159,180,180)"},
          		"HR026":{"n":"Vukovarsko-srijemska županija","id":"HR026","name":"Vukovarsko-srijemska županija","q":5,"r":-14,"colour":"rgb(159,180,180)"},
          		"HR027":{"n":"Karlovačka županija","id":"HR027","name":"Karlovačka županija","q":6,"r":-14,"colour":"rgb(159,180,180)"},
          		"HR028":{"n":"Sisačko-moslavačka županija","id":"HR028","name":"Sisačko-moslavačka županija","q":7,"r":-14,"colour":"rgb(159,180,180)"},
          		"AL013":{"n":"Kukës","id":"AL013","name":"Kukës","q":8,"r":-11,"colour":"rgb(212,210,210)"},
          		"AL015":{"n":"Shkodër","id":"AL015","name":"Shkodër","q":8,"r":-12,"colour":"rgb(212,210,210)"},
          		"AL014":{"n":"Lezhë","id":"AL014","name":"Lezhë","q":8,"r":-13,"colour":"rgb(212,210,210)"},
          		"AL011":{"n":"Dibër","id":"AL011","name":"Dibër","q":8,"r":-14,"colour":"rgb(212,210,210)"},
          		"AL012":{"n":"Durrës","id":"AL012","name":"Durrës","q":5,"r":-15,"colour":"rgb(212,210,210)"},
          		"AL021":{"n":"Elbasan","id":"AL021","name":"Elbasan","q":6,"r":-15,"colour":"rgb(212,210,210)"},
          		"AL022":{"n":"Tiranë","id":"AL022","name":"Tiranë","q":7,"r":-15,"colour":"rgb(212,210,210)"},
          		"AL034":{"n":"Korcë","id":"AL034","name":"Korcë","q":8,"r":-15,"colour":"rgb(212,210,210)"},
          		"AL031":{"n":"Berat","id":"AL031","name":"Berat","q":5,"r":-16,"colour":"rgb(212,210,210)"},
          		"AL032":{"n":"Fier","id":"AL032","name":"Fier","q":6,"r":-16,"colour":"rgb(212,210,210)"},
          		"AL035":{"n":"Vlorë","id":"AL035","name":"Vlorë","q":7,"r":-16,"colour":"rgb(212,210,210)"},
          		"AL033":{"n":"Gjirokastër","id":"AL033","name":"Gjirokastër","q":8,"r":-16,"colour":"rgb(212,210,210)"},
          		"EL422":{"n":"Andros, Thira, Kea, Milos, Mykonos, Naxos, Paros, Syros, Tinos","id":"EL422","name":"Andros, Thira, Kea, Milos, Mykonos, Naxos, Paros, Syros, Tinos","q":9,"r":-10,"colour":"rgb(0,240,240)"},
          		"EL431":{"n":"Irakleio","id":"EL431","name":"Irakleio","q":10,"r":-10,"colour":"rgb(0,240,240)"},
          		"EL432":{"n":"Lasithi","id":"EL432","name":"Lasithi","q":11,"r":-10,"colour":"rgb(0,240,240)"},
          		"EL433":{"n":"Rethymni","id":"EL433","name":"Rethymni","q":9,"r":-11,"colour":"rgb(0,240,240)"},
          		"EL434":{"n":"Chania","id":"EL434","name":"Chania","q":10,"r":-11,"colour":"rgb(0,240,240)"},
          		"EL511":{"n":"Evros","id":"EL511","name":"Evros","q":11,"r":-11,"colour":"rgb(0,240,240)"},
          		"EL512":{"n":"Xanthi","id":"EL512","name":"Xanthi","q":9,"r":-12,"colour":"rgb(0,240,240)"},
          		"EL513":{"n":"Rodopi","id":"EL513","name":"Rodopi","q":10,"r":-12,"colour":"rgb(0,240,240)"},
          		"EL514":{"n":"Drama","id":"EL514","name":"Drama","q":11,"r":-12,"colour":"rgb(0,240,240)"},
          		"EL515":{"n":"Thasos, Kavala","id":"EL515","name":"Thasos, Kavala","q":9,"r":-13,"colour":"rgb(0,240,240)"},
          		"EL521":{"n":"Imathia","id":"EL521","name":"Imathia","q":10,"r":-13,"colour":"rgb(0,240,240)"},
          		"EL421":{"n":"Kalymnos, Karpathos, Kasos, Kos, Rodos","id":"EL421","name":"Kalymnos, Karpathos, Kasos, Kos, Rodos","q":11,"r":-13,"colour":"rgb(0,240,240)"},
          		"EL522":{"n":"Thessaloniki","id":"EL522","name":"Thessaloniki","q":9,"r":-14,"colour":"rgb(0,240,240)"},
          		"EL523":{"n":"Kilkis","id":"EL523","name":"Kilkis","q":10,"r":-14,"colour":"rgb(0,240,240)"},
          		"EL524":{"n":"Pella","id":"EL524","name":"Pella","q":11,"r":-14,"colour":"rgb(0,240,240)"},
          		"EL525":{"n":"Pieria","id":"EL525","name":"Pieria","q":9,"r":-15,"colour":"rgb(0,240,240)"},
          		"EL526":{"n":"Serres","id":"EL526","name":"Serres","q":10,"r":-15,"colour":"rgb(0,240,240)"},
          		"EL527":{"n":"Chalkidiki","id":"EL527","name":"Chalkidiki","q":11,"r":-15,"colour":"rgb(0,240,240)"},
          		"EL531":{"n":"Grevena, Kozani","id":"EL531","name":"Grevena, Kozani","q":9,"r":-16,"colour":"rgb(0,240,240)"},
          		"EL532":{"n":"Kastoria","id":"EL532","name":"Kastoria","q":10,"r":-16,"colour":"rgb(0,240,240)"},
          		"EL533":{"n":"Florina","id":"EL533","name":"Florina","q":11,"r":-16,"colour":"rgb(0,240,240)"},
          		"EL541":{"n":"Arta, Preveza","id":"EL541","name":"Arta, Preveza","q":5,"r":-17,"colour":"rgb(0,240,240)"},
          		"EL542":{"n":"Thesprotia","id":"EL542","name":"Thesprotia","q":6,"r":-17,"colour":"rgb(0,240,240)"},
          		"EL543":{"n":"Ioannina","id":"EL543","name":"Ioannina","q":7,"r":-17,"colour":"rgb(0,240,240)"},
          		"EL611":{"n":"Karditsa, Trikala","id":"EL611","name":"Karditsa, Trikala","q":8,"r":-17,"colour":"rgb(0,240,240)"},
          		"EL612":{"n":"Larisa","id":"EL612","name":"Larisa","q":9,"r":-17,"colour":"rgb(0,240,240)"},
          		"EL613":{"n":"Magnisia, Sporades","id":"EL613","name":"Magnisia, Sporades","q":10,"r":-17,"colour":"rgb(0,240,240)"},
          		"EL301":{"n":"Voreios Tomeas Athinon","id":"EL301","name":"Voreios Tomeas Athinon","q":11,"r":-17,"colour":"rgb(0,240,240)"},
          		"EL302":{"n":"Dytikos Tomeas Athinon","id":"EL302","name":"Dytikos Tomeas Athinon","q":5,"r":-18,"colour":"rgb(0,240,240)"},
          		"EL303":{"n":"Kentrikos Tomeas Athinon","id":"EL303","name":"Kentrikos Tomeas Athinon","q":6,"r":-18,"colour":"rgb(0,240,240)"},
          		"EL304":{"n":"Notios Tomeas Athinon","id":"EL304","name":"Notios Tomeas Athinon","q":7,"r":-18,"colour":"rgb(0,240,240)"},
          		"EL621":{"n":"Zakynthos","id":"EL621","name":"Zakynthos","q":8,"r":-18,"colour":"rgb(0,240,240)"},
          		"EL622":{"n":"Kerkyra","id":"EL622","name":"Kerkyra","q":9,"r":-18,"colour":"rgb(0,240,240)"},
          		"EL623":{"n":"Ithaki, Kefallinia","id":"EL623","name":"Ithaki, Kefallinia","q":10,"r":-18,"colour":"rgb(0,240,240)"},
          		"EL624":{"n":"Lefkada","id":"EL624","name":"Lefkada","q":11,"r":-18,"colour":"rgb(0,240,240)"},
          		"EL631":{"n":"Aitoloakarnania","id":"EL631","name":"Aitoloakarnania","q":12,"r":-18,"colour":"rgb(0,240,240)"},
          		"EL632":{"n":"Achaia","id":"EL632","name":"Achaia","q":5,"r":-19,"colour":"rgb(0,240,240)"},
          		"EL633":{"n":"Ileia","id":"EL633","name":"Ileia","q":6,"r":-19,"colour":"rgb(0,240,240)"},
          		"EL641":{"n":"Voiotia","id":"EL641","name":"Voiotia","q":7,"r":-19,"colour":"rgb(0,240,240)"},
          		"EL642":{"n":"Evvoia","id":"EL642","name":"Evvoia","q":8,"r":-19,"colour":"rgb(0,240,240)"},
          		"EL643":{"n":"Evrytania","id":"EL643","name":"Evrytania","q":9,"r":-19,"colour":"rgb(0,240,240)"},
          		"EL644":{"n":"Fthiotida","id":"EL644","name":"Fthiotida","q":10,"r":-19,"colour":"rgb(0,240,240)"},
          		"EL645":{"n":"Fokida","id":"EL645","name":"Fokida","q":11,"r":-19,"colour":"rgb(0,240,240)"},
          		"EL651":{"n":"Argolida, Arkadia","id":"EL651","name":"Argolida, Arkadia","q":12,"r":-19,"colour":"rgb(0,240,240)"},
          		"EL652":{"n":"Korinthia","id":"EL652","name":"Korinthia","q":5,"r":-20,"colour":"rgb(0,240,240)"},
          		"EL653":{"n":"Lakonia, Messinia","id":"EL653","name":"Lakonia, Messinia","q":6,"r":-20,"colour":"rgb(0,240,240)"},
          		"EL305":{"n":"Anatoliki Attiki","id":"EL305","name":"Anatoliki Attiki","q":7,"r":-20,"colour":"rgb(0,240,240)"},
          		"EL306":{"n":"Dytiki Attiki","id":"EL306","name":"Dytiki Attiki","q":8,"r":-20,"colour":"rgb(0,240,240)"},
          		"EL307":{"n":"Peiraias, Nisoi","id":"EL307","name":"Peiraias, Nisoi","q":9,"r":-20,"colour":"rgb(0,240,240)"},
          		"EL411":{"n":"Lesvos, Limnos","id":"EL411","name":"Lesvos, Limnos","q":10,"r":-20,"colour":"rgb(0,240,240)"},
          		"EL412":{"n":"Ikaria, Samos","id":"EL412","name":"Ikaria, Samos","q":11,"r":-20,"colour":"rgb(0,240,240)"},
          		"EL413":{"n":"Chios","id":"EL413","name":"Chios","q":12,"r":-20,"colour":"rgb(0,240,240)"},
          		"CY000":{"n":"Kýpros","id":"CY000","name":"Kýpros","q":13,"r":-22,"colour":"rgb(53,0,0)"},
          		"BG341":{"n":"Burgas","id":"BG341","name":"Burgas","q":12,"r":-11,"colour":"rgb(106,30,30)"},
          		"BG342":{"n":"Sliven","id":"BG342","name":"Sliven","q":13,"r":-11,"colour":"rgb(106,30,30)"},
          		"BG343":{"n":"Yambol","id":"BG343","name":"Yambol","q":14,"r":-11,"colour":"rgb(106,30,30)"},
          		"BG344":{"n":"Stara Zagora","id":"BG344","name":"Stara Zagora","q":15,"r":-11,"colour":"rgb(106,30,30)"},
          		"BG411":{"n":"Sofia (stolitsa)","id":"BG411","name":"Sofia (stolitsa)","q":16,"r":-11,"colour":"rgb(106,30,30)"},
          		"BG412":{"n":"Sofia","id":"BG412","name":"Sofia","q":17,"r":-11,"colour":"rgb(106,30,30)"},
          		"BG413":{"n":"Blagoevgrad","id":"BG413","name":"Blagoevgrad","q":18,"r":-11,"colour":"rgb(106,30,30)"},
          		"BG414":{"n":"Pernik","id":"BG414","name":"Pernik","q":12,"r":-12,"colour":"rgb(106,30,30)"},
          		"BG415":{"n":"Kyustendil","id":"BG415","name":"Kyustendil","q":13,"r":-12,"colour":"rgb(106,30,30)"},
          		"BG421":{"n":"Plovdiv","id":"BG421","name":"Plovdiv","q":14,"r":-12,"colour":"rgb(106,30,30)"},
          		"BG422":{"n":"Haskovo","id":"BG422","name":"Haskovo","q":15,"r":-12,"colour":"rgb(106,30,30)"},
          		"BG423":{"n":"Pazardzhik","id":"BG423","name":"Pazardzhik","q":16,"r":-12,"colour":"rgb(106,30,30)"},
          		"BG424":{"n":"Smolyan","id":"BG424","name":"Smolyan","q":17,"r":-12,"colour":"rgb(106,30,30)"},
          		"BG425":{"n":"Kardzhali","id":"BG425","name":"Kardzhali","q":12,"r":-13,"colour":"rgb(106,30,30)"},
          		"BG311":{"n":"Vidin","id":"BG311","name":"Vidin","q":13,"r":-13,"colour":"rgb(106,30,30)"},
          		"BG312":{"n":"Montana","id":"BG312","name":"Montana","q":14,"r":-13,"colour":"rgb(106,30,30)"},
          		"BG313":{"n":"Vratsa","id":"BG313","name":"Vratsa","q":12,"r":-14,"colour":"rgb(106,30,30)"},
          		"BG314":{"n":"Pleven","id":"BG314","name":"Pleven","q":13,"r":-14,"colour":"rgb(106,30,30)"},
          		"BG315":{"n":"Lovech","id":"BG315","name":"Lovech","q":14,"r":-14,"colour":"rgb(106,30,30)"},
          		"BG321":{"n":"Veliko Tarnovo","id":"BG321","name":"Veliko Tarnovo","q":12,"r":-15,"colour":"rgb(106,30,30)"},
          		"BG322":{"n":"Gabrovo","id":"BG322","name":"Gabrovo","q":13,"r":-15,"colour":"rgb(106,30,30)"},
          		"BG323":{"n":"Ruse","id":"BG323","name":"Ruse","q":14,"r":-15,"colour":"rgb(106,30,30)"},
          		"BG324":{"n":"Razgrad","id":"BG324","name":"Razgrad","q":12,"r":-16,"colour":"rgb(106,30,30)"},
          		"BG325":{"n":"Silistra","id":"BG325","name":"Silistra","q":13,"r":-16,"colour":"rgb(106,30,30)"},
          		"BG331":{"n":"Varna","id":"BG331","name":"Varna","q":14,"r":-16,"colour":"rgb(106,30,30)"},
          		"BG332":{"n":"Dobrich","id":"BG332","name":"Dobrich","q":12,"r":-17,"colour":"rgb(106,30,30)"},
          		"BG333":{"n":"Shumen","id":"BG333","name":"Shumen","q":13,"r":-17,"colour":"rgb(106,30,30)"},
          		"BG334":{"n":"Targovishte","id":"BG334","name":"Targovishte","q":14,"r":-17,"colour":"rgb(106,30,30)"},
          		"TR510":{"n":"Ankara","id":"TR510","name":"Ankara","q":15,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR521":{"n":"Konya","id":"TR521","name":"Konya","q":16,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR522":{"n":"Karaman","id":"TR522","name":"Karaman","q":17,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR611":{"n":"Antalya","id":"TR611","name":"Antalya","q":18,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR612":{"n":"Isparta","id":"TR612","name":"Isparta","q":19,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR613":{"n":"Burdur","id":"TR613","name":"Burdur","q":20,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR621":{"n":"Adana","id":"TR621","name":"Adana","q":21,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR622":{"n":"Mersin","id":"TR622","name":"Mersin","q":22,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR631":{"n":"Hatay","id":"TR631","name":"Hatay","q":23,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR632":{"n":"Kahramanmaraş","id":"TR632","name":"Kahramanmaraş","q":24,"r":-13,"colour":"rgb(159,60,60)"},
          		"TR222":{"n":"Çanakkale","id":"TR222","name":"Çanakkale","q":15,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR310":{"n":"İzmir","id":"TR310","name":"İzmir","q":16,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR321":{"n":"Aydın","id":"TR321","name":"Aydın","q":17,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR322":{"n":"Denizli","id":"TR322","name":"Denizli","q":18,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR323":{"n":"Muğla","id":"TR323","name":"Muğla","q":19,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR331":{"n":"Manisa","id":"TR331","name":"Manisa","q":20,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR332":{"n":"Afyonkarahisar","id":"TR332","name":"Afyonkarahisar","q":21,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR333":{"n":"Kütahya","id":"TR333","name":"Kütahya","q":22,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR334":{"n":"Uşak","id":"TR334","name":"Uşak","q":23,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR411":{"n":"Bursa","id":"TR411","name":"Bursa","q":24,"r":-14,"colour":"rgb(159,60,60)"},
          		"TR412":{"n":"Eskişehir","id":"TR412","name":"Eskişehir","q":15,"r":-15,"colour":"rgb(159,60,60)"},
          		"TR413":{"n":"Bilecik","id":"TR413","name":"Bilecik","q":16,"r":-15,"colour":"rgb(159,60,60)"},
          		"TR421":{"n":"Kocaeli","id":"TR421","name":"Kocaeli","q":17,"r":-15,"colour":"rgb(159,60,60)"},
          		"TR422":{"n":"Sakarya","id":"TR422","name":"Sakarya","q":18,"r":-15,"colour":"rgb(159,60,60)"},
          		"TR423":{"n":"Düzce","id":"TR423","name":"Düzce","q":19,"r":-15,"colour":"rgb(159,60,60)"},
          		"TR424":{"n":"Bolu","id":"TR424","name":"Bolu","q":20,"r":-15,"colour":"rgb(159,60,60)"},
          		"TR425":{"n":"Yalova","id":"TR425","name":"Yalova","q":21,"r":-15,"colour":"rgb(159,60,60)"},
          		"TRC31":{"n":"Mardin","id":"TRC31","name":"Mardin","q":22,"r":-15,"colour":"rgb(159,60,60)"},
          		"TRC32":{"n":"Batman","id":"TRC32","name":"Batman","q":23,"r":-15,"colour":"rgb(159,60,60)"},
          		"TRC33":{"n":"Şırnak","id":"TRC33","name":"Şırnak","q":24,"r":-15,"colour":"rgb(159,60,60)"},
          		"TRC34":{"n":"Siirt","id":"TRC34","name":"Siirt","q":15,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR100":{"n":"İstanbul","id":"TR100","name":"İstanbul","q":16,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR211":{"n":"Tekirdağ","id":"TR211","name":"Tekirdağ","q":17,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR212":{"n":"Edirne","id":"TR212","name":"Edirne","q":18,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR213":{"n":"Kırklareli","id":"TR213","name":"Kırklareli","q":19,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR221":{"n":"Balıkesir","id":"TR221","name":"Balıkesir","q":20,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR633":{"n":"Osmaniye","id":"TR633","name":"Osmaniye","q":21,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR711":{"n":"Kırıkkale","id":"TR711","name":"Kırıkkale","q":22,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR712":{"n":"Aksaray","id":"TR712","name":"Aksaray","q":23,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR713":{"n":"Niğde","id":"TR713","name":"Niğde","q":24,"r":-16,"colour":"rgb(159,60,60)"},
          		"TR714":{"n":"Nevşehir","id":"TR714","name":"Nevşehir","q":15,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR715":{"n":"Kırşehir","id":"TR715","name":"Kırşehir","q":16,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR721":{"n":"Kayseri","id":"TR721","name":"Kayseri","q":17,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR722":{"n":"Sivas","id":"TR722","name":"Sivas","q":18,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR723":{"n":"Yozgat","id":"TR723","name":"Yozgat","q":19,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR811":{"n":"Zonguldak","id":"TR811","name":"Zonguldak","q":20,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR812":{"n":"Karabük","id":"TR812","name":"Karabük","q":21,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR813":{"n":"Bartın","id":"TR813","name":"Bartın","q":22,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR821":{"n":"Kastamonu","id":"TR821","name":"Kastamonu","q":23,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR822":{"n":"Çankırı","id":"TR822","name":"Çankırı","q":24,"r":-17,"colour":"rgb(159,60,60)"},
          		"TR823":{"n":"Sinop","id":"TR823","name":"Sinop","q":15,"r":-19,"colour":"rgb(159,60,60)"},
          		"TR831":{"n":"Samsun","id":"TR831","name":"Samsun","q":16,"r":-19,"colour":"rgb(159,60,60)"},
          		"TR832":{"n":"Tokat","id":"TR832","name":"Tokat","q":20,"r":-19,"colour":"rgb(159,60,60)"},
          		"TR833":{"n":"Çorum","id":"TR833","name":"Çorum","q":21,"r":-19,"colour":"rgb(159,60,60)"},
          		"TR834":{"n":"Amasya","id":"TR834","name":"Amasya","q":22,"r":-19,"colour":"rgb(159,60,60)"},
          		"TR901":{"n":"Trabzon","id":"TR901","name":"Trabzon","q":23,"r":-19,"colour":"rgb(159,60,60)"},
          		"TR902":{"n":"Ordu","id":"TR902","name":"Ordu","q":24,"r":-19,"colour":"rgb(159,60,60)"},
          		"TR903":{"n":"Giresun","id":"TR903","name":"Giresun","q":17,"r":-19,"colour":"rgb(159,60,60)"},
          		"TR904":{"n":"Rize","id":"TR904","name":"Rize","q":18,"r":-19,"colour":"rgb(159,60,60)"},
          		"TRB24":{"n":"Hakkari","id":"TRB24","name":"Hakkari","q":19,"r":-19,"colour":"rgb(159,60,60)"},
          		"TR905":{"n":"Artvin","id":"TR905","name":"Artvin","q":15,"r":-18,"colour":"rgb(159,60,60)"},
          		"TR906":{"n":"Gümüşhane","id":"TR906","name":"Gümüşhane","q":16,"r":-18,"colour":"rgb(159,60,60)"},
          		"TRA11":{"n":"Erzurum","id":"TRA11","name":"Erzurum","q":17,"r":-18,"colour":"rgb(159,60,60)"},
          		"TRA12":{"n":"Erzincan","id":"TRA12","name":"Erzincan","q":18,"r":-18,"colour":"rgb(159,60,60)"},
          		"TRA13":{"n":"Bayburt","id":"TRA13","name":"Bayburt","q":19,"r":-18,"colour":"rgb(159,60,60)"},
          		"TRA21":{"n":"Ağrı","id":"TRA21","name":"Ağrı","q":20,"r":-18,"colour":"rgb(159,60,60)"},
          		"TRA22":{"n":"Kars","id":"TRA22","name":"Kars","q":21,"r":-18,"colour":"rgb(159,60,60)"},
          		"TRA23":{"n":"Iğdır","id":"TRA23","name":"Iğdır","q":22,"r":-18,"colour":"rgb(159,60,60)"},
          		"TRA24":{"n":"Ardahan","id":"TRA24","name":"Ardahan","q":23,"r":-18,"colour":"rgb(159,60,60)"},
          		"TRB11":{"n":"Malatya","id":"TRB11","name":"Malatya","q":24,"r":-18,"colour":"rgb(159,60,60)"},
          		"TRB12":{"n":"Elazığ","id":"TRB12","name":"Elazığ","q":15,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRB13":{"n":"Bingöl","id":"TRB13","name":"Bingöl","q":16,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRB14":{"n":"Tunceli","id":"TRB14","name":"Tunceli","q":17,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRB21":{"n":"Van","id":"TRB21","name":"Van","q":18,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRB22":{"n":"Muş","id":"TRB22","name":"Muş","q":19,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRB23":{"n":"Bitlis","id":"TRB23","name":"Bitlis","q":20,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRC22":{"n":"Diyarbakır","id":"TRC22","name":"Diyarbakır","q":21,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRC11":{"n":"Gaziantep","id":"TRC11","name":"Gaziantep","q":22,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRC12":{"n":"Adıyaman","id":"TRC12","name":"Adıyaman","q":23,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRC13":{"n":"Kilis","id":"TRC13","name":"Kilis","q":24,"r":-20,"colour":"rgb(159,60,60)"},
          		"TRC21":{"n":"Şanlıurfa","id":"TRC21","name":"Şanlıurfa","q":15,"r":-21,"colour":"rgb(159,60,60)"}
          	}
          }
        });
        }



        </script>

      </div>

      <div class="container-fluid py-4 all_data_container">
        <h3>Similarity highlights</h3>
      </div>

      <div class="row mt-4">

        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">

          <div class="card container">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary  text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">arrow_circle_up</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Most similar</p>
                  <h4 class="mb-0">Overall</h4>
                </div>
              </div>

              <div id="all_top_0" class="row p-3 align-items-center">

                <div class="col-2 2ndcol">
                  <canvas id="chart_all_top_0"></canvas>
                </div>

                <div class="col-7 1stcol">
                  <span id="text_all_top_0" class=""></span>
                </div>

                <div class="col-3 3rdcol">
                  <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_all_top_0">
                    More...
                  </button>
                </div>

              </div>

              <!-- modal -->
                <div class="modal fade" id="modal_all_top_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h4>Data</h4>
                        <table class="table">
                          <thead>
                              <tr>
                                  <th class="text-left">&nbsp;</th>
                                  <th class="text-center" id="modal_all_top_0_0_code"></th>
                                  <th class="text-center">#</th>
                                  <th class="text-center" id="modal_all_top_0_1_code"></th>
                                  <th class="text-center">#</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td class="text-left">Population</td>
                                  <td class="text-centre" id="modal_all_top_0_0_pop">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_0_poprank">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_pop">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_poprank">&nbsp</td>
                              </tr>
                              <tr>
                                  <td class="text-left">Population NUTS 0</td>
                                  <td class="text-centre" id="modal_all_top_0_0_nuts0pop">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_0_nuts0poprank">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_nuts0pop">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_nuts0poprank">&nbsp</td>
                              </tr>

                              <tr>
                                  <td class="text-left">Density</td>
                                  <td class="text-centre" id="modal_all_top_0_0_density">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_0_densityrank">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_density">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_densityrank">&nbsp</td>
                              </tr>
                              <tr>
                                  <td class="text-left">Fertility</td>
                                  <td class="text-centre" id="modal_all_top_0_0_fertility">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_0_fertilityrank">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_fertility">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_fertilityrank">&nbsp</td>
                              </tr>
                              <tr>
                                  <td class="text-left">Women:men</td>
                                  <td class="text-centre" id="modal_all_top_0_0_womenratio">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_0_womenratiorank">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_womenratio">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_womenratiorank">&nbsp</td>
                              </tr>
                              <tr>
                                  <td class="text-left">GDPPPS</td>
                                  <td class="text-centre" id="modal_all_top_0_0_gdppps">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_0_gdpppsrank">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_gdppps">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_gdpppsrank">&nbsp</td>
                              </tr>
                              <tr>
                                  <td class="text-left">GVA</td>
                                  <td class="text-centre" id="modal_all_top_0_0_gva">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_0_gvarank">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_gva">&nbsp</td>
                                  <td class="text-centre" id="modal_all_top_0_1_gvarank">&nbsp</td>
                              </tr>
                              </tr>
                          </tbody>
                      </table>

                        <h4>Rank comparison</h4>
                        <canvas id="spider_all_top_0"></canvas>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


          </div>
        </div>

        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
          <div class="card container">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary  text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10 fa-rotate-180">arrow_circle_up</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Least similar </p>
                <h4 class="mb-0">Overall</h4>
              </div>
            </div>
            <div id="all_bottom_0" class="row p-3 align-items-center">
              <div class="col-2 2ndcol">
                <canvas id="chart_all_bottom_0"></canvas>
              </div>
              <div class="col-7 1stcol">
                <span id="text_all_bottom_0" class=""></span>
              </div>
              <div class="col-3 3rdcol">
                <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_all_bottom_0">
                  More...
                </button>
              </div>
            </div>
            <!-- modal -->
            <div class="modal fade" id="modal_all_bottom_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h4>Data</h4>
                    <table class="table">
                      <thead>
                          <tr>
                              <th class="text-left">&nbsp;</th>
                              <th class="text-center" id="modal_all_bottom_0_0_code"></th>
                              <th class="text-center">#</th>
                              <th class="text-center" id="modal_all_bottom_0_1_code"></th>
                              <th class="text-center">#</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="text-left">Population</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_pop">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_poprank">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_pop">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_poprank">&nbsp</td>
                          </tr>
                          <tr>
                              <td class="text-left">Population NUTS 0</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_nuts0pop">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_nuts0poprank">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_nuts0pop">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_nuts0poprank">&nbsp</td>
                          </tr>

                          <tr>
                              <td class="text-left">Density</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_density">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_densityrank">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_density">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_densityrank">&nbsp</td>
                          </tr>
                          <tr>
                              <td class="text-left">Fertility</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_fertility">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_fertilityrank">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_fertility">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_fertilityrank">&nbsp</td>
                          </tr>
                          <tr>
                              <td class="text-left">Women:men</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_womenratio">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_womenratiorank">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_womenratio">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_womenratiorank">&nbsp</td>
                          </tr>
                          <tr>
                              <td class="text-left">GDPPPS</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_gdppps">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_gdpppsrank">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_gdppps">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_gdpppsrank">&nbsp</td>
                          </tr>
                          <tr>
                              <td class="text-left">GVA</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_gva">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_gvarank">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_gva">&nbsp</td>
                              <td class="text-centre" id="modal_all_bottom_0_1_gvarank">&nbsp</td>
                          </tr>
                          </tr>
                      </tbody>
                  </table>

                    <h4>Rank comparison</h4>
                    <canvas id="spider_all_bottom_0"></canvas>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>

</div>

<div class="row mt-4">

  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card container">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">arrow_circle_up</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Most similar</p>
            <h4 class="mb-0">Same country</h4>
          </div>
        </div>

        <div id="same_country_top_0" class="row p-3 align-items-center">


          <div class="col-2 2ndcol">
            <canvas id="chart_same_country_top_0"></canvas>
          </div>
          <div class="col-7 1stcol">
            <span id="text_same_country_top_0" class=""></span>
          </div>

          <div class="col-3 3rdcol">
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_same_country_top_0">
              More...
            </button>
          </div>

        </div>
        <!-- modal -->
        <div class="modal fade" id="modal_same_country_top_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h4>Data</h4>
                <table class="table">
                  <thead>
                      <tr>
                          <th class="text-left">&nbsp;</th>
                          <th class="text-center" id="modal_same_country_top_0_0_code"></th>
                          <th class="text-center">#</th>
                          <th class="text-center" id="modal_same_country_top_0_1_code"></th>
                          <th class="text-center">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-left">Population</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_pop">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_poprank">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_pop">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_poprank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Population NUTS 0</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_nuts0pop">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_nuts0poprank">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_nuts0pop">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_nuts0poprank">&nbsp</td>
                      </tr>

                      <tr>
                          <td class="text-left">Density</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_density">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_densityrank">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_density">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_densityrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Fertility</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_fertility">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_fertilityrank">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_fertility">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_fertilityrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Women:men</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_womenratio">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_womenratiorank">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_womenratio">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_womenratiorank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">GDPPPS</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_gdppps">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_gdpppsrank">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_gdppps">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_gdpppsrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">GVA</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_gva">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_gvarank">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_gva">&nbsp</td>
                          <td class="text-centre" id="modal_same_country_top_0_1_gvarank">&nbsp</td>
                      </tr>
                      </tr>
                  </tbody>
              </table>

                <h4>Rank comparison</h4>
                <canvas id="spider_same_country_top_0"></canvas>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


    </div>
  </div>

  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card container">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary  text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10 fa-rotate-180">arrow_circle_up</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">Least similar </p>
          <h4 class="mb-0">Same country</h4>
        </div>
      </div>
      <div id="same_country_bottom_0" class="row p-3 align-items-center">
        <div class="col-2 2ndcol">
          <canvas id="chart_same_country_bottom_0"></canvas>
        </div>
        <div class="col-7 1stcol">
          <span id="text_same_country_bottom_0" class=""></span>
        </div>

        <div class="col-3 3rdcol">
          <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_same_country_bottom_0">
            More...
          </button>
        </div>
      </div>
      <!-- modal -->
      <div class="modal fade" id="modal_same_country_bottom_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>Data</h4>
              <table class="table">
                <thead>
                    <tr>
                        <th class="text-left">&nbsp;</th>
                        <th class="text-center" id="modal_same_country_bottom_0_0_code"></th>
                        <th class="text-center">#</th>
                        <th class="text-center" id="modal_same_country_bottom_0_1_code"></th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Population</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_pop">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_poprank">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_pop">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_poprank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Population NUTS 0</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_nuts0pop">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_nuts0poprank">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_nuts0pop">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_nuts0poprank">&nbsp</td>
                    </tr>

                    <tr>
                        <td class="text-left">Density</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_density">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_densityrank">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_density">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_densityrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Fertility</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_fertility">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_fertilityrank">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_fertility">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_fertilityrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Women:men</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_womenratio">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_womenratiorank">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_womenratio">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_womenratiorank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">GDPPPS</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_gdppps">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_gdpppsrank">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_gdppps">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_gdpppsrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">GVA</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_gva">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_gvarank">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_gva">&nbsp</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_1_gvarank">&nbsp</td>
                    </tr>
                    </tr>
                </tbody>
            </table>

              <h4>Rank comparison</h4>
              <canvas id="spider_same_country_bottom_0"></canvas>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

</div>


<div class="row mt-4">

  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card container">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary  text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">arrow_circle_up</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Most similar</p>
            <h4 class="mb-0">Different country</h4>
          </div>
        </div>

        <div id="diff_country_top_0" class="row p-3 align-items-center">

          <div class="col-2 2ndcol">
            <canvas id="chart_diff_country_top_0"></canvas>
          </div>

          <div class="col-7 1stcol">
            <span id="text_diff_country_top_0" class=""></span>
          </div>

          <div class="col-3 3rdcol">
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_diff_country_top_0">
              More...
            </button>
          </div>

        </div>
        <!--modal-->
        <div class="modal fade" id="modal_diff_country_top_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h4>Data</h4>
                <table class="table">
                  <thead>
                      <tr>
                          <th class="text-left">&nbsp;</th>
                          <th class="text-center" id="modal_diff_country_top_0_0_code"></th>
                          <th class="text-center">#</th>
                          <th class="text-center" id="modal_diff_country_top_0_1_code"></th>
                          <th class="text-center">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-left">Population</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_pop">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_poprank">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_pop">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_poprank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Population NUTS 0</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_nuts0pop">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_nuts0poprank">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_nuts0pop">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_nuts0poprank">&nbsp</td>
                      </tr>

                      <tr>
                          <td class="text-left">Density</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_density">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_densityrank">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_density">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_densityrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Fertility</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_fertility">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_fertilityrank">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_fertility">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_fertilityrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Women:men</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_womenratio">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_womenratiorank">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_womenratio">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_womenratiorank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">GDPPPS</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_gdppps">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_gdpppsrank">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_gdppps">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_gdpppsrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">GVA</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_gva">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_gvarank">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_gva">&nbsp</td>
                          <td class="text-centre" id="modal_diff_country_top_0_1_gvarank">&nbsp</td>
                      </tr>
                      </tr>
                  </tbody>
              </table>

                <h4>Rank comparison</h4>
                <canvas id="spider_diff_country_top_0"></canvas>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


    </div>
  </div>

  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card container">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary  text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10 fa-rotate-180">arrow_circle_up</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">Least similar </p>
          <h4 class="mb-0">Different country</h4>
        </div>
      </div>
      <div id="diff_country_bottom_0" class="row p-3 align-items-center">
        <div class="col-2 2ndcol">
          <canvas id="chart_diff_country_bottom_0"></canvas>
        </div>
        <div class="col-7 1stcol">
          <span id="text_diff_country_bottom_0" class=""></span>
        </div>

      <div class="col-3 3rdcol">
        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_diff_country_bottom_0">
          More...
        </button>
      </div>
      </div>
      <!--modal-->
      <div class="modal fade" id="modal_diff_country_bottom_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>Data</h4>
              <table class="table">
                <thead>
                    <tr>
                        <th class="text-left">&nbsp;</th>
                        <th class="text-center" id="modal_diff_country_bottom_0_0_code"></th>
                        <th class="text-center">#</th>
                        <th class="text-center" id="modal_diff_country_bottom_0_1_code"></th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Population</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_pop">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_poprank">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_pop">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_poprank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Population NUTS 0</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_nuts0pop">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_nuts0poprank">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_nuts0pop">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_nuts0poprank">&nbsp</td>
                    </tr>

                    <tr>
                        <td class="text-left">Density</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_density">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_densityrank">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_density">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_densityrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Fertility</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_fertility">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_fertilityrank">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_fertility">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_fertilityrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Women:men</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_womenratio">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_womenratiorank">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_womenratio">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_womenratiorank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">GDPPPS</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_gdppps">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_gdpppsrank">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_gdppps">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_gdpppsrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">GVA</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_gva">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_gvarank">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_gva">&nbsp</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_gvarank">&nbsp</td>
                    </tr>
                    </tr>
                </tbody>
            </table>

              <h4>Rank comparison</h4>
              <canvas id="spider_diff_country_bottom_0"></canvas>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>


<div class="row mt-4">

  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card container">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary  text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">arrow_circle_up</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Most similar</p>
            <h4 class="mb-0">Higher GDPPPS</h4>
          </div>
        </div>

        <div id="higher_gdppps_top_0" class="row p-3 align-items-center">

          <div class="col-2 2ndcol">
            <canvas id="chart_higher_gdppps_top_0"></canvas>
          </div>
          <div class="col-7 1stcol">
            <span id="text_higher_gdppps_top_0" class=""></span>
          </div>



          <div class="col-3 3rdcol">
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_higher_gdppps_top_0">
              More...
            </button>
          </div>
        </div>
        <!--modal-->
        <div class="modal fade" id="modal_higher_gdppps_top_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h4>Data</h4>
                <table class="table">
                  <thead>
                      <tr>
                          <th class="text-left">&nbsp;</th>
                          <th class="text-center" id="modal_higher_gdppps_top_0_0_code"></th>
                          <th class="text-center">#</th>
                          <th class="text-center" id="modal_higher_gdppps_top_0_1_code"></th>
                          <th class="text-center">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-left">Population</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_pop">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_poprank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_pop">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_poprank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Population NUTS 0</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_nuts0pop">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_nuts0poprank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_nuts0pop">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_nuts0poprank">&nbsp</td>
                      </tr>

                      <tr>
                          <td class="text-left">Density</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_density">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_densityrank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_density">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_densityrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Fertility</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_fertility">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_fertilityrank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_fertility">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_fertilityrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Women:men</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_womenratio">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_womenratiorank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_womenratio">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_womenratiorank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">GDPPPS</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_gdppps">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_gdpppsrank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_gdppps">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_gdpppsrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">GVA</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_gva">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_gvarank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_gva">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_gvarank">&nbsp</td>
                      </tr>
                      </tr>
                  </tbody>
              </table>

                <h4>Rank comparison</h4>
                <canvas id="spider_higher_gdppps_top_0"></canvas>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


    </div>
  </div>

  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card container">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary  text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10 fa-rotate-180">arrow_circle_up</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">Least similar </p>
          <h4 class="mb-0">Higher GDPPPS</h4>
        </div>
      </div>
      <div id="higher_gdppps_bottom_0" class="row p-3 align-items-center">

        <div class="col-2 2ndcol">
          <canvas id="chart_higher_gdppps_bottom_0"></canvas>
        </div>
        <div class="col-7 1stcol">
          <span id="text_higher_gdppps_bottom_0" class=""></span>
        </div>


        <div class="col-3 3rdcol">
          <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_higher_gdppps_bottom_0">
            More...
          </button>
        </div>
      </div>
      <!-- modal-->
      <div class="modal fade" id="modal_higher_gdppps_bottom_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>Data</h4>
              <table class="table">
                <thead>
                    <tr>
                        <th class="text-left">&nbsp;</th>
                        <th class="text-center" id="modal_higher_gdppps_bottom_0_0_code"></th>
                        <th class="text-center">#</th>
                        <th class="text-center" id="modal_higher_gdppps_bottom_0_1_code"></th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Population</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_pop">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_poprank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_pop">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_poprank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Population NUTS 0</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_nuts0pop">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_nuts0poprank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_nuts0pop">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_nuts0poprank">&nbsp</td>
                    </tr>

                    <tr>
                        <td class="text-left">Density</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_density">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_densityrank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_density">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_densityrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Fertility</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_fertility">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_fertilityrank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_fertility">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_fertilityrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Women:men</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_womenratio">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_womenratiorank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_womenratio">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_womenratiorank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">GDPPPS</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_gdppps">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_gdpppsrank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_gdppps">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_gdpppsrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">GVA</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_gva">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_gvarank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_gva">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_gvarank">&nbsp</td>
                    </tr>
                    </tr>
                </tbody>
            </table>

              <h4>Rank comparison</h4>
              <canvas id="spider_higher_gdppps_bottom_0"></canvas>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>


<div class="row mt-4">

  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card container">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary  text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">arrow_circle_up</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Most similar</p>
            <h4 class="mb-0">Higher GVA</h4>
          </div>
        </div>

        <div id="higher_gva_top_0" class="row p-3 align-items-center">
          <div class="col-2 2ndcol">
            <canvas id="chart_higher_gva_top_0"></canvas>
          </div>
          <div class="col-7 1stcol">
            <span id="text_higher_gva_top_0" class=""></span>
          </div>



          <div class="col-3 3rdcol">
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_higher_gva_top_0">
              More...
            </button>
          </div>

        </div>
        <!--modal-->
        <div class="modal fade" id="modal_higher_gva_top_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h4>Data</h4>
                <table class="table">
                  <thead>
                      <tr>
                          <th class="text-left">&nbsp;</th>
                          <th class="text-center" id="modal_higher_gva_top_0_0_code"></th>
                          <th class="text-center">#</th>
                          <th class="text-center" id="modal_higher_gva_top_0_1_code"></th>
                          <th class="text-center">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-left">Population</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_pop">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_poprank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_pop">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_poprank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Population NUTS 0</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_nuts0pop">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_nuts0poprank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_nuts0pop">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_nuts0poprank">&nbsp</td>
                      </tr>

                      <tr>
                          <td class="text-left">Density</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_density">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_densityrank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_density">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_densityrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Fertility</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_fertility">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_fertilityrank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_fertility">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_fertilityrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">Women:men</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_womenratio">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_womenratiorank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_womenratio">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_womenratiorank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">GDPPPS</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_gdppps">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_gdpppsrank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_gdppps">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_gdpppsrank">&nbsp</td>
                      </tr>
                      <tr>
                          <td class="text-left">GVA</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_gva">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_gvarank">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_gva">&nbsp</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_1_gvarank">&nbsp</td>
                      </tr>
                      </tr>
                  </tbody>
              </table>

                <h4>Rank comparison</h4>
                <canvas id="spider_higher_gva_top_0"></canvas>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card container">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary  text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10 fa-rotate-180">arrow_circle_up</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">Least similar </p>
          <h4 class="mb-0">Higher GVA</h4>
        </div>
      </div>
      <div id="higher_gva_bottom_0" class="row p-3 align-items-center">
        <div class="col-2 2ndcol">
          <canvas id="chart_higher_gva_bottom_0"></canvas>
        </div>
        <div class="col-7 1stcol">
          <span id="text_higher_gva_bottom_0" class=""></span>
        </div>

        <div class="col-3 3rdcol">
          <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal_higher_gva_bottom_0">
            More...
          </button>
        </div>
      </div>
      <!-- modal -->
      <div class="modal fade" id="modal_higher_gva_bottom_0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="exampleModalLabel">More...</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>Data</h4>
              <table class="table">
                <thead>
                    <tr>
                        <th class="text-left">&nbsp;</th>
                        <th class="text-center" id="modal_higher_gva_bottom_0_0_code"></th>
                        <th class="text-center">#</th>
                        <th class="text-center" id="modal_higher_gva_bottom_0_1_code"></th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Population</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_pop">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_poprank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_pop">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_poprank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Population NUTS 0</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_nuts0pop">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_nuts0poprank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_nuts0pop">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_nuts0poprank">&nbsp</td>
                    </tr>

                    <tr>
                        <td class="text-left">Density</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_density">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_densityrank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_density">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_densityrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Fertility</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_fertility">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_fertilityrank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_fertility">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_fertilityrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">Women:men</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_womenratio">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_womenratiorank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_womenratio">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_womenratiorank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">GDPPPS</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_gdppps">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_gdpppsrank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_gdppps">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_gdpppsrank">&nbsp</td>
                    </tr>
                    <tr>
                        <td class="text-left">GVA</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_gva">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_gvarank">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_gva">&nbsp</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_gvarank">&nbsp</td>
                    </tr>
                    </tr>
                </tbody>
            </table>

              <h4>Rank comparison</h4>
              <canvas id="spider_higher_gva_bottom_0"></canvas>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

</div>

    </div>

    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://puntofisso.net" class="font-weight-bold" target="_blank">Puntofisso</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.puntofisso.net" class="nav-link text-muted" target="_blank">Giuseppe Sollazzo</a>
              </li>
              <li class="nav-item">
                <a href="credits.html" class="nav-link text-muted" target="_blank">Credits</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/puntofisso" class="nav-link text-muted" target="_blank">GitHub</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  </main>

  <!-- Fixed HELP plugin -->
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">help</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">EU Twinnings</h5>
          <p>How does it all work?</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Similarity</h6>
        </div>
        The similarity between areas is calculated using the formula known as <a href="https://en.wikipedia.org/wiki/Cosine_similarity">cosine similarity</a> over a number of selected Eurostat statistics at either the NUTS3 area level, or at the level of one of its containers.
<br/><br/>
The list of fields on which we currently calculate similarity is: population of the NUTS3 area, population of the containing NUTS0 area, population density, fertility rate, population change since the last census, ratio of women to men, GDP per PPS, and GVA.
<br/><br/>
Although every similarity measure is, to a certain extent, arbitrary, we believe that this choice gives some food for thought.
<a href="images/similarity.png"><img src="images/similaritysmall.png"></img></a>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="https://github.com/puntofisso/data.europa.eu-eutwinnings">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/puntofisso/data.europa.eu-eutwinnings" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="EU Twinnings on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20EU%20Twinnings%20made%20by%20%40puntofisso&amp;url=https%3A%2F%2Feu-twinnings.site" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://eu-twinnings.site" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="./MD-assets/js/core/popper.min.js"></script>
  <script src="./MD-assets/js/core/bootstrap.min.js"></script>
  <script src="./MD-assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./MD-assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./MD-assets/js/plugins/chartjs.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script>
  /**
    * Initialise the autocomplete function with the nuts.json file
    */

  $(document).ready( function() {


    // get json, and set it as global variable
    $.getJSON("data/nuts-autocomplete.json", function(data){
      window.nuts = data;

    }).fail(function(){
      console.log("An error has occurred.");
    }).done(function() {
      setup_autocomplete();

    });


  <?php
    if (isset($_GET['nutsid'])) {
  ?>
    code = "<?php echo $_GET['nutsid'];?>";
    navigateToNUTS(code);
  <?php
  }
  ?>
}
);

  // Autocomplete setup
  function setup_autocomplete() {
    var nuts = window.nuts

    // in order to make search easier, we translate the letters with diacritics
    // e.g. you can search for "Gottingen" instead of "Göttingen"
    var accentMap = {
      "Ç": "C", "Č": "C", "ç": "c", "č": "c",
      "ñ": "n",
      "Á": "A", "Å": "A",
      "É": "E",
      "Í": "I",
      "Ö": "O", "Ø": "O",
      "Ú": "U",
      "ð": "d", "đ": "d",
      "ß": "b",
      "ğ": "g",
      "ħ": "h",
      "í": "i", "ì": "i", "ī": "i", "İ": "i", "ı": "i",
      "Ł": "L", "ł": "l",
      "ń": "n", "ň": "n",
      "ř": "r",
      "Ś": "s", "ś": "s", "Ş": "s", "ş": "s", "Š": "s", "š": "s",
      "ţ": "t",
      "ź": "z", "Ż": "z", "ż": "z", "Ž": "z", "ž": "z",
      "á": "a", "â": "a", "å": "a", "ä": "a", "ã": "a", "æ": "a", "ă": "a", "ą": "a",
      "é": "e", "è": "e", "ë": "e", "ė": "e", "ę": "e", "ě": "e",
      "ó": "o", "ô": "o", "ö": "o", "õ": "o", "ø": "o", "ő": "o",
      "ú": "u", "ü": "u", "ų": "u",
      "ý": "y"
    };
    var normalize = function( term ) {
      var ret = "";
      for ( var i = 0; i < term.length; i++ ) {
        ret += accentMap[ term.charAt(i) ] || term.charAt(i);
      }
      return ret;
    };

    // if you click inside the input field, empty it
    $('#inputRegion').click(function() {
      $(this).val('');
    });

    // set up autocomplete
    $("#inputRegion").autocomplete({
      minLength: 3,
      width: 300,
      max: 10,
      source: function( request, response ) {

      var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i") , results = [];

      /* Make sure each entry is only in the suggestions list once: */
      $.each(nuts, function (i, value) {
          if (matcher.test(normalize(value.label)) && $.inArray(value.label, results) < 0) {
              // note: the below code isn't very well documented
              // label and value need to be the value of the label
              obj = { 'label': value.label + " [" + value.code.substring(0, 2) +"]", 'code': value.code }
              results.push(obj);

          }
      });
      response(results.slice(0, 10));
    },
    select: function (event, ui) {
      // get json, and set it as global variable
      window.location.href = '/region.php?nutsid='+ui.item.code;
      // navigateToNUTS(ui.item.code);
    }
  });
  }

  function navigateToNUTS(code) {

    $.getJSON("getdata.php?code="+code, function(data){
        window.similarity = data;
        fillData();

    }).fail(function(){
        alert("Sorry, an error has occurred. Please try again later.");
    });
  }

  function fillData()
  {
    // General information
    $('#span_nuts1').html(window.similarity['nuts1']);
    $('#span_nuts2').html(window.similarity['nuts2']);
    $('#nametitle').html(window.similarity['name']);
    $('#subnametitle').html(window.similarity['nuts0name']);
    filename = 'images/' + window.similarity['code'] + ".png";
    $('#qgis_image').attr("src",filename);

    $('#span_nuts3').html(window.similarity['code']);
    $('#span_nuts0').html(window.similarity['nuts0']);

    $('#span_density').html(window.similarity['density']);
    $('#span_population').html(window.similarity['population']);
    $('#span_fertility').html(window.similarity['fertility']);
    $('#span_popchange').html(window.similarity['popchange']);
    $('#span_womenratio').html(window.similarity['womenratio']);
    $('#span_gdppps').html(window.similarity['gdppps']);
    $('#span_gva').html(window.similarity['gva']);
    $('#span_pop3').html(window.similarity['population']);
    $('#span_pop0').html(window.similarity['population0']);

    // Other extra info
    $('#span_urbanrural').html(window.similarity.extra['urbanrural']);

    if (window.similarity.extra['metropolitan'] == 'Y') {
      $('#span_metropolitan').html('Yes');
    } else if (window.similarity.extra['metropolitan'] == 'N') {
      $('#span_metropolitan').html('No');
    } else {
      $('#span_metropolitan').html(window.similarity.extra['metropolitan']);
    }

    $('#span_coastal').html(window.similarity.extra['coastal']);


    if (window.similarity.extra['mountain'] == 'Other regions') {
      $('#span_mountain').html('No');
    } else {
      $('#span_mountain').html(window.similarity.extra['mountain']);
    }

    if (window.similarity.extra['border'] == 'Other regions') {
      $('#span_border').html('No');
    } else if (window.similarity.extra['border'] == 'Border regions') {
      $('#span_border').html('Yes');
    } else {
      $('#span_border').html(window.similarity.extra['border']);
    }

    if (window.similarity.extra['island'] == '1') {
      $('#span_island').html('Yes');
    } else {
      $('#span_island').html('No');
    }

    $('#span_remoteness').html(window.similarity.extra['remoteness']);


    var similarities = ['all_top', 'all_bottom', 'same_country_top', 'same_country_bottom', 'diff_country_top', 'diff_country_bottom', 'higher_gdppps_top', 'higher_gdppps_bottom', 'higher_gva_top', 'higher_gva_bottom'];

    for (var i = 0; i < similarities.length; i++) {

      itemtype = similarities[i];

      for (itemindex in [0]) {

        chartitem = 'chart_'+itemtype+"_"+itemindex;
        textitem = '#text_'+itemtype+"_"+itemindex;
        similarityitemname = 'similarity_'+itemtype;
        similarityobject = window.similarity[similarityitemname][itemindex];
        var targetcode;
        try {
          targetcode = window.similarity[similarityitemname][itemindex]['code'];
        }
        catch (exc) {
          continue;
        }


        drawDonutChart(chartitem, similarityobject['similarity']);
        $(textitem).html("<a class='linktonuts' href='region.php?nutsid=" + targetcode + "'>" + similarityobject['name'] + " [" + similarityobject['country'] + "]" +" </a>" + "<br/>" + (100*similarityobject['similarity']).toFixed(2) + "%");

        // fillModal(0, "similarity_all_top", 0);
        // drawSpiderChart("spider_all_top_0", "similarity_all_top", 0);
        fillModal(itemtype, similarityitemname, 0);

        spidername = 'spider_'+itemtype+"_"+itemindex;
        drawSpiderChart(spidername, similarityitemname, 0);

      }
    }


     // generate_d3_map() ;
     displayhex();


     // fillModal(0, "similarity_all_top", 0);
     // drawSpiderChart("spider_all_top_0", "similarity_all_top", 0);
  }


  function fillModal(itemname ,comparison, index) {

      //   id="modal_all_top_0_1_value"
      var modal_id = "modal_"+itemname+"_0";


      var sm = window.similarity;
      var mycode = sm['code'];
      var comparisoncode = sm[comparison][index]['code'];


      // table heading
      $("#"+modal_id+"_0_code").html(mycode);
      $("#"+modal_id+"_1_code").html(comparisoncode);

      // table contents
      $("#"+modal_id+"_0_pop").html(sm['population']);
      $("#"+modal_id+"_1_pop").html(sm[comparison][index]['pop3']);
      $("#"+modal_id+"_0_poprank").html(sm['populationrank']);
      $("#"+modal_id+"_1_poprank").html(sm['ranks'][comparisoncode]['pop3rank']);

      $("#"+modal_id+"_0_nuts0pop").html(sm['population0']);
      $("#"+modal_id+"_1_nuts0pop").html(sm[comparison][index]['pop0']);
      $("#"+modal_id+"_0_nuts0poprank").html(sm['population0rank']);
      $("#"+modal_id+"_1_nuts0poprank").html(sm['ranks'][comparisoncode]['pop0rank']);

      $("#"+modal_id+"_0_density").html(sm['density']);
      $("#"+modal_id+"_1_density").html(sm[comparison][index]['density']);
      $("#"+modal_id+"_0_densityrank").html(sm['densityrank']);
      $("#"+modal_id+"_1_densityrank").html(sm['ranks'][comparisoncode]['densityrank']);

      $("#"+modal_id+"_0_fertility").html(sm['fertility']);
      $("#"+modal_id+"_1_fertility").html(sm[comparison][index]['fertility']);
      $("#"+modal_id+"_0_fertilityrank").html(sm['fertilityrank']);
      $("#"+modal_id+"_1_fertilityrank").html(sm['ranks'][comparisoncode]['fertilityrank']);

      $("#"+modal_id+"_0_womenratio").html(sm['womenratio']);
      $("#"+modal_id+"_1_womenratio").html(sm[comparison][index]['womenratio']);
      $("#"+modal_id+"_0_womenratiorank").html(sm['womenratiorank']);
      $("#"+modal_id+"_1_womenratiorank").html(sm['ranks'][comparisoncode]['womenratiorank']);

      $("#"+modal_id+"_0_gdppps").html(sm['gdppps']);
      $("#"+modal_id+"_1_gdppps").html(sm[comparison][index]['gdppps']);
      $("#"+modal_id+"_0_gdpppsrank").html(sm['gdpppsrank']);
      $("#"+modal_id+"_1_gdpppsrank").html(sm['ranks'][comparisoncode]['gdpppsrank']);

      $("#"+modal_id+"_0_gva").html(sm['gva']);
      $("#"+modal_id+"_1_gva").html(sm[comparison][index]['gva']);
      $("#"+modal_id+"_0_gvarank").html(sm['gvarank']);
      $("#"+modal_id+"_1_gvarank").html(sm['ranks'][comparisoncode]['gvarank']);
  }

  function drawSpiderChart(canvasElement, comparison, index) {
    var elem = document.getElementById(canvasElement);
    var ctx = elem.getContext('2d');

    var sm = window.similarity;
    var code = sm['code'];
    var comparisoncode = sm[comparison][index]['code'];

    const data = {
        labels: [
          'Population',
          'Population NUTS0',
          'Density',
          'Fertility',
          'Population change',
          'Women:Men Ratio',
          'GDPPPS',
          'GVA'
        ],
        datasets: [{
          label: code,
           // data: [650, 59, 90, 81, 56, 55, 40, 32],
          // data: [ sm['population'], sm['population0'], sm['density'], sm['fertility'], sm['popchange'], sm['womenratio'], sm['gdppps'], sm['gva'] ],
          data: [ sm['populationrank'], sm['population0rank'], sm['densityrank'], sm['fertilityrank'], sm['popchangerank'], sm['womenratiorank'], sm['gdpppsrank'], sm['gvarank'] ],
          fill: true,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(255, 99, 132)',
          pointBackgroundColor: 'rgb(255, 99, 132)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgb(255, 99, 132)'
        }, {
          label: sm[comparison][index]['code'],
          //data: [28, 48, 40, 190, 96, 27, 100, 32],
          data: [ sm['ranks'][comparisoncode]['pop3rank'], sm['ranks'][comparisoncode]['pop0rank'], sm['ranks'][comparisoncode]['densityrank'], sm['ranks'][comparisoncode]['fertilityrank'], sm['ranks'][comparisoncode]['popchangerank'], sm['ranks'][comparisoncode]['womenratiorank'], sm['ranks'][comparisoncode]['gdpppsrank'], sm['ranks'][comparisoncode]['gvarank'] ],
          fill: true,
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgb(54, 162, 235)',
          pointBackgroundColor: 'rgb(54, 162, 235)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgb(54, 162, 235)'
        }]
      };

    var myChart = new Chart(ctx, {
        type: 'radar',
        data: data,
        options: {
          scales: {
              r: {

                  suggestedMin: 1,
                  suggestedMax: 1600
              }
          }
        }
      });
  }

  function drawDonutChart(canvasElement, similarity) {

    var elem = document.getElementById(canvasElement);
    reciprocal = 1-similarity;

    fill = 'rgba(0, 0, 0, 1)'; // black
    if (similarity > 0.9) {
      fill = 'rgba(153,193,64, 1)'; // green
    } else if (similarity > 0.4) {
      fill = 'rgba(231,180,22, 1)'; // yellow
    } else if (similarity < 0.4)  {
      fill = 'rgba(204, 50, 50, 1)'; // red
    }

    var ctx = elem.getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [similarity, reciprocal],
                backgroundColor: [
                    fill,
                    'rgba(200, 200, 200, 1)',
                ]
            }]
        },
        options: {
            cutout: '70%',
            rotation: '90',
            scales: {
                x: {
                  grid: {
                  display: false,
                  drawBorder: false,
                  drawOnChartArea: false,
                  drawTicks: false
                  }
                },
                ticks: {
                  display: false
                },
              }
          ,
        plugins: {
          legend: {
                  display: false
                },
                tooltip: {
                  enabled: false
                }
              }
            }
          }
        );
  }
</script>

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
    d3.json('data/nuts3.geojson',

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

                            var div = d3.select("body").append("div")
                            .attr("class", "tooltip")
                            .attr("id", "tooltipdiv")
                            .style("opacity", 0);

              div.transition()
                .duration(100)
                .style("opacity", .9);

                div.html(d.properties.NUTS_NAME + "<br/>" + similarity*100   + "%")
                  .style("left", (d3.event.pageX) + "px")
                  .style("top", (d3.event.pageY - 28) + "px");
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


</script>


  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./MD-assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>
