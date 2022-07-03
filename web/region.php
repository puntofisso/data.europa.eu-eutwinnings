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
        This area is identified by <span class="badge bg-dark">Code</span> <span id="span_nuts3" class="general_info"></span>, with <span class="badge bg-dark">NUTS 0</span> (country) code <span id="span_nuts0" class="general_info"></span>.
        Its <span class="badge bg-dark">NUTS 2</span> region code is <span id="span_nuts2" class="general_info"></span>, and its <span class="badge bg-dark">NUTS 1</span> region code is <span id="span_nuts1" class="general_info"></span>.<br/>
        Demographically, its <span class="badge bg-secondary">Population</span> is <span id="span_population" class="general_info"></span>, with a <span class="badge bg-secondary">Density</span> of <span id="span_density" class="general_info"></span> people per sqm. For context, the <span class="badge bg-warning">NUTS0-level population</span> is <span id="span_pop0" class="general_info"></span>. Since the previous data collection, the <span class="badge bg-secondary">Population change</span> amounts to <span id="span_popchange" class="general_info"></span>. There is a <span class="badge bg-secondary">Women:Men ratio</span> of <span id="span_womenratio" class="general_info"></span>. The <span class="badge bg-secondary">Fertility</span> rate is <span id="span_fertility" class="general_info"></span> live births per woman.<br/>
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
                <span class="badge bg-dark">Urban-rural</span> <span id="span_urbanrural" class="general_info"></span><br/>
                <span class="badge bg-dark">Metropolitan</span> <span id="span_metropolitan" class="general_info"></span><br/>
                <span class="badge bg-dark">Coastal</span> <span id="span_coastal" class="general_info"></span><br/>
                <span class="badge bg-dark">Mountain</span> <span id="span_mountain" class="general_info"></span><br/>
                <span class="badge bg-dark">Border</span> <span id="span_border" class="general_info"></span><br/>
                <span class="badge bg-dark">Island</span> <span id="span_island" class="general_info"></span><br/>
                <span class="badge bg-dark">Remoteness</span> <span id="span_remoteness" class="general_info"></span><br/>
                <span class="badge bg-dark">Tourism establishments</span> <span id="span_tourism" class="general_info"></span><br/>
                <span class="badge bg-dark">Heating degree-days</span> <span id="span_heating" class="general_info"></span><br/>
                <span class="badge bg-dark">Cooling degree-days</span> <span id="span_cooling" class="general_info"></span><br/>
                <span class="badge bg-dark">Burglaries recorded</span> <span id="span_burglaries" class="general_info"></span><br/>

                <canvas id="populationpyramid"></canvas>
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
              <div id="card-map" class="card-body m-0">
                <div id="my_dataviz" class=""></div>
                <button type="button" class="btn btn-primary" id="zoom-in"><i class="fas fa-search-plus"></i></button>
                <button type="button" class="btn btn-primary" id="zoom-out"><i class="fas fa-search-minus"></i></button>
                <!--button type="button" class="btn btn-primary" id="zoom-centre"><i class="fas fa-expand"></i></button-->
              </div>
            </div>
          </div>
        </div>




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
                                  <!--th class="text-center">#</th-->
                                  <th class="text-center" id="modal_all_top_0_1_code"></th>
                                  <!--th class="text-center">#</th-->
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td class="text-left">Population</td>
                                  <td class="text-centre" id="modal_all_top_0_0_pop">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_0_poprank">&nbsp</td> -->
                                  <td class="text-centre" id="modal_all_top_0_1_pop">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_1_poprank">&nbsp</td> -->
                              </tr>
                              <tr>
                                  <td class="text-left">Population NUTS 0</td>
                                  <td class="text-centre" id="modal_all_top_0_0_nuts0pop">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_0_nuts0poprank">&nbsp</td> -->
                                  <td class="text-centre" id="modal_all_top_0_1_nuts0pop">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_1_nuts0poprank">&nbsp</td> -->
                              </tr>

                              <tr>
                                  <td class="text-left">Density</td>
                                  <td class="text-centre" id="modal_all_top_0_0_density">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_0_densityrank">&nbsp</td> -->
                                  <td class="text-centre" id="modal_all_top_0_1_density">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_1_densityrank">&nbsp</td> -->
                              </tr>
                              <tr>
                                  <td class="text-left">Fertility</td>
                                  <td class="text-centre" id="modal_all_top_0_0_fertility">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_0_fertilityrank">&nbsp</td> -->
                                  <td class="text-centre" id="modal_all_top_0_1_fertility">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_1_fertilityrank">&nbsp</td> -->
                              </tr>
                              <tr>
                                  <td class="text-left">Women:men</td>
                                  <td class="text-centre" id="modal_all_top_0_0_womenratio">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_0_womenratiorank">&nbsp</td> -->
                                  <td class="text-centre" id="modal_all_top_0_1_womenratio">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_1_womenratiorank">&nbsp</td> -->
                              </tr>
                              <tr>
                                  <td class="text-left">GDPPPS</td>
                                  <td class="text-centre" id="modal_all_top_0_0_gdppps">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_0_gdpppsrank">&nbsp</td> -->
                                  <td class="text-centre" id="modal_all_top_0_1_gdppps">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_1_gdpppsrank">&nbsp</td> -->
                              </tr>
                              <tr>
                                  <td class="text-left">GVA</td>
                                  <td class="text-centre" id="modal_all_top_0_0_gva">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_0_gvarank">&nbsp</td> -->
                                  <td class="text-centre" id="modal_all_top_0_1_gva">&nbsp</td>
                                  <!-- <td class="text-centre" id="modal_all_top_0_1_gvarank">&nbsp</td> -->
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
                              <!-- <th class="text-center">#</th> -->
                              <th class="text-center" id="modal_all_bottom_0_1_code"></th>
                              <!-- <th class="text-center">#</th> -->
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="text-left">Population</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_pop">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_0_poprank">&nbsp</td> -->
                              <td class="text-centre" id="modal_all_bottom_0_1_pop">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_1_poprank">&nbsp</td> -->
                          </tr>
                          <tr>
                              <td class="text-left">Population NUTS 0</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_nuts0pop">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_0_nuts0poprank">&nbsp</td> -->
                              <td class="text-centre" id="modal_all_bottom_0_1_nuts0pop">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_1_nuts0poprank">&nbsp</td> -->
                          </tr>

                          <tr>
                              <td class="text-left">Density</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_density">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_0_densityrank">&nbsp</td> -->
                              <td class="text-centre" id="modal_all_bottom_0_1_density">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_1_densityrank">&nbsp</td> -->
                          </tr>
                          <tr>
                              <td class="text-left">Fertility</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_fertility">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_0_fertilityrank">&nbsp</td> -->
                              <td class="text-centre" id="modal_all_bottom_0_1_fertility">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_1_fertilityrank">&nbsp</td> -->
                          </tr>
                          <tr>
                              <td class="text-left">Women:men</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_womenratio">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_0_womenratiorank">&nbsp</td> -->
                              <td class="text-centre" id="modal_all_bottom_0_1_womenratio">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_1_womenratiorank">&nbsp</td> -->
                          </tr>
                          <tr>
                              <td class="text-left">GDPPPS</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_gdppps">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_0_gdpppsrank">&nbsp</td> -->
                              <td class="text-centre" id="modal_all_bottom_0_1_gdppps">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_1_gdpppsrank">&nbsp</td> -->
                          </tr>
                          <tr>
                              <td class="text-left">GVA</td>
                              <td class="text-centre" id="modal_all_bottom_0_0_gva">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_0_gvarank">&nbsp</td> -->
                              <td class="text-centre" id="modal_all_bottom_0_1_gva">&nbsp</td>
                              <!-- <td class="text-centre" id="modal_all_bottom_0_1_gvarank">&nbsp</td> -->
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
                          <!-- <th class="text-center">#</th> -->
                          <th class="text-center" id="modal_same_country_top_0_1_code"></th>
                          <!-- <th class="text-center">#</th> -->
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-left">Population</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_0_poprank">&nbsp</td> -->
                          <td class="text-centre" id="modal_same_country_top_0_1_pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_1_poprank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Population NUTS 0</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_nuts0pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_0_nuts0poprank">&nbsp</td> -->
                          <td class="text-centre" id="modal_same_country_top_0_1_nuts0pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_1_nuts0poprank">&nbsp</td> -->
                      </tr>

                      <tr>
                          <td class="text-left">Density</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_density">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_0_densityrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_same_country_top_0_1_density">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_1_densityrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Fertility</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_fertility">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_0_fertilityrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_same_country_top_0_1_fertility">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_1_fertilityrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Women:men</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_womenratio">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_0_womenratiorank">&nbsp</td> -->
                          <td class="text-centre" id="modal_same_country_top_0_1_womenratio">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_1_womenratiorank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">GDPPPS</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_gdppps">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_0_gdpppsrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_same_country_top_0_1_gdppps">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_1_gdpppsrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">GVA</td>
                          <td class="text-centre" id="modal_same_country_top_0_0_gva">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_0_gvarank">&nbsp</td> -->
                          <td class="text-centre" id="modal_same_country_top_0_1_gva">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_same_country_top_0_1_gvarank">&nbsp</td> -->
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
                        <!-- <th class="text-center">#</th> -->
                        <th class="text-center" id="modal_same_country_bottom_0_1_code"></th>
                        <!-- <th class="text-center">#</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Population</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_0_poprank">&nbsp</td> -->
                        <td class="text-centre" id="modal_same_country_bottom_0_1_pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_1_poprank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Population NUTS 0</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_nuts0pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_0_nuts0poprank">&nbsp</td> -->
                        <td class="text-centre" id="modal_same_country_bottom_0_1_nuts0pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_1_nuts0poprank">&nbsp</td> -->
                    </tr>

                    <tr>
                        <td class="text-left">Density</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_density">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_0_densityrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_same_country_bottom_0_1_density">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_1_densityrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Fertility</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_fertility">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_0_fertilityrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_same_country_bottom_0_1_fertility">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_1_fertilityrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Women:men</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_womenratio">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_0_womenratiorank">&nbsp</td> -->
                        <td class="text-centre" id="modal_same_country_bottom_0_1_womenratio">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_1_womenratiorank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">GDPPPS</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_gdppps">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_0_gdpppsrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_same_country_bottom_0_1_gdppps">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_1_gdpppsrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">GVA</td>
                        <td class="text-centre" id="modal_same_country_bottom_0_0_gva">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_0_gvarank">&nbsp</td> -->
                        <td class="text-centre" id="modal_same_country_bottom_0_1_gva">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_same_country_bottom_0_1_gvarank">&nbsp</td> -->
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
                          <!-- <th class="text-center">#</th> -->
                          <th class="text-center" id="modal_diff_country_top_0_1_code"></th>
                          <!-- <th class="text-center">#</th> -->
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-left">Population</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_0_poprank">&nbsp</td> -->
                          <td class="text-centre" id="modal_diff_country_top_0_1_pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_1_poprank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Population NUTS 0</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_nuts0pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_0_nuts0poprank">&nbsp</td> -->
                          <td class="text-centre" id="modal_diff_country_top_0_1_nuts0pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_1_nuts0poprank">&nbsp</td> -->
                      </tr>

                      <tr>
                          <td class="text-left">Density</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_density">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_0_densityrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_diff_country_top_0_1_density">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_1_densityrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Fertility</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_fertility">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_0_fertilityrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_diff_country_top_0_1_fertility">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_1_fertilityrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Women:men</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_womenratio">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_0_womenratiorank">&nbsp</td> -->
                          <td class="text-centre" id="modal_diff_country_top_0_1_womenratio">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_1_womenratiorank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">GDPPPS</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_gdppps">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_0_gdpppsrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_diff_country_top_0_1_gdppps">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_1_gdpppsrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">GVA</td>
                          <td class="text-centre" id="modal_diff_country_top_0_0_gva">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_0_gvarank">&nbsp</td> -->
                          <td class="text-centre" id="modal_diff_country_top_0_1_gva">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_diff_country_top_0_1_gvarank">&nbsp</td> -->
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
                        <!-- <th class="text-center">#</th> -->
                        <th class="text-center" id="modal_diff_country_bottom_0_1_code"></th>
                        <!-- <th class="text-center">#</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Population</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_0_poprank">&nbsp</td> -->
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_1_poprank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Population NUTS 0</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_nuts0pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_0_nuts0poprank">&nbsp</td> -->
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_nuts0pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_1_nuts0poprank">&nbsp</td> -->
                    </tr>

                    <tr>
                        <td class="text-left">Density</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_density">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_0_densityrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_density">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_1_densityrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Fertility</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_fertility">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_0_fertilityrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_fertility">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_1_fertilityrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Women:men</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_womenratio">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_0_womenratiorank">&nbsp</td> -->
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_womenratio">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_1_womenratiorank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">GDPPPS</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_gdppps">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_0_gdpppsrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_gdppps">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_1_gdpppsrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">GVA</td>
                        <td class="text-centre" id="modal_diff_country_bottom_0_0_gva">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_0_gvarank">&nbsp</td> -->
                        <td class="text-centre" id="modal_diff_country_bottom_0_1_gva">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_diff_country_bottom_0_1_gvarank">&nbsp</td> -->
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
                          <!-- <th class="text-center">#</th> -->
                          <th class="text-center" id="modal_higher_gdppps_top_0_1_code"></th>
                          <!-- <th class="text-center">#</th> -->
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-left">Population</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_0_poprank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_1_poprank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Population NUTS 0</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_nuts0pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_0_nuts0poprank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_nuts0pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_1_nuts0poprank">&nbsp</td> -->
                      </tr>

                      <tr>
                          <td class="text-left">Density</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_density">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_0_densityrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_density">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_1_densityrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Fertility</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_fertility">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_0_fertilityrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_fertility">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_1_fertilityrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Women:men</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_womenratio">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_0_womenratiorank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_womenratio">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_1_womenratiorank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">GDPPPS</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_gdppps">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_0_gdpppsrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_gdppps">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_1_gdpppsrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">GVA</td>
                          <td class="text-centre" id="modal_higher_gdppps_top_0_0_gva">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_0_gvarank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gdppps_top_0_1_gva">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gdppps_top_0_1_gvarank">&nbsp</td> -->
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
                        <!-- <th class="text-center">#</th> -->
                        <th class="text-center" id="modal_higher_gdppps_bottom_0_1_code"></th>
                        <!-- <th class="text-center">#</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Population</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_poprank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_poprank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Population NUTS 0</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_nuts0pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_nuts0poprank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_nuts0pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_nuts0poprank">&nbsp</td> -->
                    </tr>

                    <tr>
                        <td class="text-left">Density</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_density">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_densityrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_density">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_densityrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Fertility</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_fertility">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_fertilityrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_fertility">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_fertilityrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Women:men</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_womenratio">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_womenratiorank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_womenratio">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_womenratiorank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">GDPPPS</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_gdppps">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_gdpppsrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_gdppps">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_gdpppsrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">GVA</td>
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_gva">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_0_gvarank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_gva">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gdppps_bottom_0_1_gvarank">&nbsp</td> -->
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
                          <!-- <th class="text-center">#</th> -->
                          <th class="text-center" id="modal_higher_gva_top_0_1_code"></th>
                          <!-- <th class="text-center">#</th> -->
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-left">Population</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_0_poprank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gva_top_0_1_pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_1_poprank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Population NUTS 0</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_nuts0pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_0_nuts0poprank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gva_top_0_1_nuts0pop">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_1_nuts0poprank">&nbsp</td> -->
                      </tr>

                      <tr>
                          <td class="text-left">Density</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_density">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_0_densityrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gva_top_0_1_density">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_1_densityrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Fertility</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_fertility">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_0_fertilityrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gva_top_0_1_fertility">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_1_fertilityrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">Women:men</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_womenratio">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_0_womenratiorank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gva_top_0_1_womenratio">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_1_womenratiorank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">GDPPPS</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_gdppps">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_0_gdpppsrank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gva_top_0_1_gdppps">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_1_gdpppsrank">&nbsp</td> -->
                      </tr>
                      <tr>
                          <td class="text-left">GVA</td>
                          <td class="text-centre" id="modal_higher_gva_top_0_0_gva">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_0_gvarank">&nbsp</td> -->
                          <td class="text-centre" id="modal_higher_gva_top_0_1_gva">&nbsp</td>
                          <!-- <td class="text-centre" id="modal_higher_gva_top_0_1_gvarank">&nbsp</td> -->
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
                        <!-- <th class="text-center">#</th> -->
                        <th class="text-center" id="modal_higher_gva_bottom_0_1_code"></th>
                        <!-- <th class="text-center">#</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Population</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_0_poprank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_1_poprank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Population NUTS 0</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_nuts0pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_0_nuts0poprank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_nuts0pop">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_1_nuts0poprank">&nbsp</td> -->
                    </tr>

                    <tr>
                        <td class="text-left">Density</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_density">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_0_densityrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_density">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_1_densityrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Fertility</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_fertility">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_0_fertilityrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_fertility">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_1_fertilityrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">Women:men</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_womenratio">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_0_womenratiorank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_womenratio">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_1_womenratiorank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">GDPPPS</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_gdppps">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_0_gdpppsrank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_gdppps">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_1_gdpppsrank">&nbsp</td> -->
                    </tr>
                    <tr>
                        <td class="text-left">GVA</td>
                        <td class="text-centre" id="modal_higher_gva_bottom_0_0_gva">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_0_gvarank">&nbsp</td> -->
                        <td class="text-centre" id="modal_higher_gva_bottom_0_1_gva">&nbsp</td>
                        <!-- <td class="text-centre" id="modal_higher_gva_bottom_0_1_gvarank">&nbsp</td> -->
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
    // $.getJSON("data/nuts-autocomplete.json", function(data){
    //   window.nuts = data;
    // }).fail(function(){
    //   console.log("An error has occurred.");
    // }).done(function() {
    //   setup_autocomplete();
    // });


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
  // function setup_autocomplete() {
  //   var nuts = window.nuts
  //
  //   // in order to make search easier, we translate the letters with diacritics
  //   // e.g. you can search for "Gottingen" instead of "Göttingen"
  //   var accentMap = {
  //     "Ç": "C", "Č": "C", "ç": "c", "č": "c",
  //     "ñ": "n",
  //     "Á": "A", "Å": "A",
  //     "É": "E",
  //     "Í": "I",
  //     "Ö": "O", "Ø": "O",
  //     "Ú": "U",
  //     "ð": "d", "đ": "d",
  //     "ß": "b",
  //     "ğ": "g",
  //     "ħ": "h",
  //     "í": "i", "ì": "i", "ī": "i", "İ": "i", "ı": "i",
  //     "Ł": "L", "ł": "l",
  //     "ń": "n", "ň": "n",
  //     "ř": "r",
  //     "Ś": "s", "ś": "s", "Ş": "s", "ş": "s", "Š": "s", "š": "s",
  //     "ţ": "t",
  //     "ź": "z", "Ż": "z", "ż": "z", "Ž": "z", "ž": "z",
  //     "á": "a", "â": "a", "å": "a", "ä": "a", "ã": "a", "æ": "a", "ă": "a", "ą": "a",
  //     "é": "e", "è": "e", "ë": "e", "ė": "e", "ę": "e", "ě": "e",
  //     "ó": "o", "ô": "o", "ö": "o", "õ": "o", "ø": "o", "ő": "o",
  //     "ú": "u", "ü": "u", "ų": "u",
  //     "ý": "y"
  //   };
  //   var normalize = function( term ) {
  //     var ret = "";
  //     for ( var i = 0; i < term.length; i++ ) {
  //       ret += accentMap[ term.charAt(i) ] || term.charAt(i);
  //     }
  //     return ret;
  //   };
  //
  //   // if you click inside the input field, empty it
  //   $('#inputRegion').click(function() {
  //     $(this).val('');
  //   });
  //
  //   // set up autocomplete
  //   $("#inputRegion").autocomplete({
  //     minLength: 3,
  //     width: 300,
  //     max: 10,
  //     source: function( request, response ) {
  //
  //     var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i") , results = [];
  //
  //     /* Make sure each entry is only in the suggestions list once: */
  //     $.each(nuts, function (i, value) {
  //         if (matcher.test(normalize(value.label)) && $.inArray(value.label, results) < 0) {
  //             // note: the below code isn't very well documented
  //             // label and value need to be the value of the label
  //             obj = { 'label': value.label + " [" + value.code.substring(0, 2) +"]", 'code': value.code }
  //             results.push(obj);
  //
  //         }
  //     });
  //     response(results.slice(0, 10));
  //   },
  //   select: function (event, ui) {
  //     // get json, and set it as global variable
  //     window.location.href = '/region.php?nutsid='+ui.item.code;
  //     // navigateToNUTS(ui.item.code);
  //   }
  // });
  // }

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
    if (window.similarity.extra['Urban-rural']) {
        $('#span_urbanrural').html(window.similarity.extra['Urban-rural']);
    } else {
      $('#span_urbanrural').html('n/a');
    }


    if (window.similarity.extra['Metropolitan'] == 'Y') {
      $('#span_metropolitan').html('Yes');
    } else if (window.similarity.extra['Metropolitan'] == 'N') {
      $('#span_metropolitan').html('No');
    } else if (window.similarity.extra['Metropolitan']) {
      $('#span_metropolitan').html(window.similarity.extra['Metropolitan']);
    } else {
      $('#span_metropolitan').html('n/a');
    }

    if (window.similarity.extra['Coastal'] == 'Y') {
      $('#span_coastal').html('Yes');
    } else if (window.similarity.extra['Coastal'] == 'N') {
      $('#span_coastal').html('No');
    } else if (window.similarity.extra['Coastal']) {
      $('#span_coastal').html(window.similarity.extra['Coastal']);
    } else {
      $('#span_coastal').html('n/a');
    }

    if (window.similarity.extra['Mountain'] == 'Other regions') {
      $('#span_mountain').html('No');
    } else if (window.similarity.extra['Mountain']) {
      $('#span_mountain').html(window.similarity.extra['Mountain']);
    } else {
      $('#span_mountain').html('n/a');
    }

    if (window.similarity.extra['Border'] == 'Other regions') {
      $('#span_border').html('No');
    } else if (window.similarity.extra['Border'] == 'Border regions') {
      $('#span_border').html('Yes');
    } else if (window.similarity.extra['Border']) {
      $('#span_border').html(window.similarity.extra['Border']);
    } else {
      $('#span_border').html('n/a');
    }

    if (window.similarity.extra['Island'] == '1') {
      $('#span_island').html('Yes');
    } else if (window.similarity.extra['Island'] == '0') {
      $('#span_island').html('No');
    } else {
      $('#span_island').html('n/a');
    }

    if (window.similarity.extra['Remoteness']) {
        $('#span_remoteness').html(window.similarity.extra['Remoteness']);
    } else {
      $('#span_remoteness').html('n/a');
    }



    if (window.similarity.census['tourism_establishments_2011_nuts3']) {
      $('#span_tourism').html(window.similarity.census['tourism_establishments_2011_nuts3']);
    } else {
      $('#span_tourism').html('n/a');
    }

    if (window.similarity.census['crime_burglaries_2010_nuts3']) {
      $('#span_burglaries').html(window.similarity.census['crime_burglaries_2010_nuts3']);
    } else {
      $('#span_burglaries').html('n/a');
    }

    if (window.similarity.census['energy_cooling_degdays_2011_nuts3']) {
      $('#span_cooling').html(window.similarity.census['energy_cooling_degdays_2011_nuts3']);
    } else {
      $('#span_cooling').html('n/a');
    }

    if (window.similarity.census['energy_heating_degdays_2011_nuts3']) {
      $('#span_heating').html(window.similarity.census['energy_heating_degdays_2011_nuts3']);
    } else {
      $('#span_heating').html('n/a');
    }


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


        fillModal(itemtype, similarityitemname, 0);

        spidername = 'spider_'+itemtype+"_"+itemindex;
        drawSpiderChart(spidername, similarityitemname, 0);

      }
    }


     generate_d3_map_old() ;

     draw_population_pyramid('populationpyramid');

     // fillModal(0, "similarity_all_top", 0);
     // drawSpiderChart("spider_all_top_0", "similarity_all_top", 0);
  }

  function draw_population_pyramid(canvasElement) {

    if (!window.similarity.census['census_age_TOTAL_2011_nuts3']) {
      return;
    }

    data1 = window.similarity.census['census_age_Y_LT15_2011_nuts3'] * 100 / window.similarity.census['census_age_TOTAL_2011_nuts3'];
    data2 = window.similarity.census['census_age_Y15-29_2011_nuts3'] * 100 / window.similarity.census['census_age_TOTAL_2011_nuts3']
    data3 = window.similarity.census['census_age_Y30-49_2011_nuts3'] * 100 / window.similarity.census['census_age_TOTAL_2011_nuts3']
    data4 = window.similarity.census['census_age_Y50-64_2011_nuts3'] * 100 / window.similarity.census['census_age_TOTAL_2011_nuts3']
    data5 = window.similarity.census['census_age_Y65-84_2011_nuts3'] * 100 / window.similarity.census['census_age_TOTAL_2011_nuts3']
    data6 = window.similarity.census['census_age_Y_GE85_2011_nuts3'] * 100 / window.similarity.census['census_age_TOTAL_2011_nuts3']

    var elem = document.getElementById(canvasElement);
    var ctx = elem.getContext('2d');



const data = {
  labels: ['<15','15-29','30-49','50-64','65-84','85+'],
  datasets: [{
    axis: 'y',
    label: 'Age pyramid',
    data: [data1, data2, data3, data4, data5, data6],

    fill: false,
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 99, 132, 0.2)',,
      'rgba(255, 99, 132, 0.2)',
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
    ],
    borderWidth: 1
  }]
};

var myChart = new Chart(ctx, {


    type: 'bar',
    data: data,
    options: {
      indexAxis: 'y',
      scales: {
        y: {
          ticks: {
            autoSkip: false
          }
        }
      }
    }






  });

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
      $("#"+modal_id+"_1_pop").html(sm[comparison][index]['population']);
      // $("#"+modal_id+"_0_poprank").html(sm['populationrank']);
      // $("#"+modal_id+"_1_poprank").html(sm['ranks'][comparisoncode]['poprank']);

      $("#"+modal_id+"_0_nuts0pop").html(sm['population0']);
      $("#"+modal_id+"_1_nuts0pop").html(sm[comparison][index]['pop0']);
      // $("#"+modal_id+"_0_nuts0poprank").html(sm['population0rank']);
      // $("#"+modal_id+"_1_nuts0poprank").html(sm['ranks'][comparisoncode]['pop0rank']);

      $("#"+modal_id+"_0_density").html(sm['density']);
      $("#"+modal_id+"_1_density").html(sm[comparison][index]['density']);
      // $("#"+modal_id+"_0_densityrank").html(sm['densityrank']);
      // $("#"+modal_id+"_1_densityrank").html(sm['ranks'][comparisoncode]['densityrank']);

      $("#"+modal_id+"_0_fertility").html(sm['fertility']);
      $("#"+modal_id+"_1_fertility").html(sm[comparison][index]['fertility']);
      // $("#"+modal_id+"_0_fertilityrank").html(sm['fertilityrank']);
      // $("#"+modal_id+"_1_fertilityrank").html(sm['ranks'][comparisoncode]['fertilityrank']);

      $("#"+modal_id+"_0_womenratio").html(sm['womenratio']);
      $("#"+modal_id+"_1_womenratio").html(sm[comparison][index]['womenratio']);
      // $("#"+modal_id+"_0_womenratiorank").html(sm['womenratiorank']);
      // $("#"+modal_id+"_1_womenratiorank").html(sm['ranks'][comparisoncode]['womenratiorank']);

      $("#"+modal_id+"_0_gdppps").html(sm['gdppps']);
      $("#"+modal_id+"_1_gdppps").html(sm[comparison][index]['gdppps']);
      // $("#"+modal_id+"_0_gdpppsrank").html(sm['gdpppsrank']);
      // $("#"+modal_id+"_1_gdpppsrank").html(sm['ranks'][comparisoncode]['gdpppsrank']);

      $("#"+modal_id+"_0_gva").html(sm['gva']);
      $("#"+modal_id+"_1_gva").html(sm[comparison][index]['gva']);
      // $("#"+modal_id+"_0_gvarank").html(sm['gvarank']);
      // $("#"+modal_id+"_1_gvarank").html(sm['ranks'][comparisoncode]['gvarank']);
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
          data: [ sm['ranks'][comparisoncode]['poprank'], sm['ranks'][comparisoncode]['pop0rank'], sm['ranks'][comparisoncode]['densityrank'], sm['ranks'][comparisoncode]['fertilityrank'], sm['ranks'][comparisoncode]['popchangerank'], sm['ranks'][comparisoncode]['womenratiorank'], sm['ranks'][comparisoncode]['gdpppsrank'], sm['ranks'][comparisoncode]['gvarank'] ],
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
                  suggestedMax: 2000,
                   ticks: {
                     callback: function(val, index) {
                       return '';
                     }
                   }
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

  // D3 Setup
  d3
  .select("#my_dataviz")
  .attr("width", "100%");

  const svg = d3
  .select("#my_dataviz")
  .append("svg")
  .attr("width", "100%");
  width = svg.style("width").replace(/px/g,'');
  height = svg.style("height").replace(/px/g,'');;

  const g = svg.append('g');

  // Choose NUTS3/NUTS2
  if (window.similarity.level == '3') {
    geojsonfile = 'data/nuts3.geojson';
  } else if (window.similarity.level == '2') {
    geojsonfile = 'data/nuts2.geojson';
  }

  // Download and populate
  d3.json(geojsonfile,


    function (error,data) {

      var d3data = d3.map();

      var colorScale = d3.scaleThreshold()
      .domain([0.0, 0.3, 0.6, 0.7, 0.8, 0.9, 0.95, 0.99, 1])
      .range(d3.schemeBlues[8]);
      jQuery.each(window.similarity.similarity_all, function(key, value) {
        mykey = value['code'];
        d3data.set(mykey, value['similarity']);
      });



      var projection = d3.geoMercator().fitSize([width, height], data);
      var path = d3.geoPath().projection(projection);

      g
      .selectAll("path")
      .data(data.features)
      .enter()
      .append("path")
      // draw each country
      .attr("d", d3.geoPath().projection(projection))
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

  // Zoom Buttons
  const zoom = d3.zoom()
  .on('zoom', zoomed);
  d3.select('#zoom-in').on('click', function() {
    // Ordinal zooming
    zoom.scaleBy(svg,  1.3);
  });

  d3.select('#zoom-out').on('click', function() {
    // Ordinal zooming
    zoom.scaleBy(svg, 1 / 1.3);
  });

  d3.select('#zoom-centre').on('click', function() {
    // Ordinal zooming
    sizeChange();
  });


  // Deal with window resizing

  function sizeChange() {
     d3.select("g").attr("transform", "scale(" + $("#card-map").width()/400 + ")");
    // $("svg").height($("#card-map").width()*0.918);
  }
  d3.select(window).on("resize", sizeChange);





}




function generate_d3_map_old() {

  if (window.similarity.level == '3') {
    geojsonfile = 'data/nuts3.geojson';
  } else if (window.similarity.level == '2') {
    geojsonfile = 'data/nuts2.geojson';
  }





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

  // Zoom Buttons
  d3.select('#zoom-in').on('click', function() {
    // Ordinal zooming
    zoom.scaleBy(svg,  1.3);
  });

  d3.select('#zoom-out').on('click', function() {
    // Ordinal zooming
    zoom.scaleBy(svg, 1 / 1.3);
  });

  // Deal with window resizing

  function sizeChange() {
    d3.select("g").attr("transform", "scale(" + $("#card-map").width()/400 + ")");
    // $("svg").height($("#container").width()*0.618);
  }
  d3.select(window).on("resize", sizeChange);


}


</script>


  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./MD-assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>
