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
  <!--aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/">
        <img src="./MD-assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">EU Twinnings</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="index.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Similarity</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href=" help.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">help</i>
            </div>
            <span class="nav-link-text ms-1">Help</span>
          </a>
        </li>

      </ul>
    </div>
  </aside-->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">

      <div class="container-fluid py-1 px-3">


        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <!--div class="ms-md-auto pe-md-3 d-flex align-items-center"-->
            <a href="/" class="navbar-brand">
                <img src="images/EUTwinningsLogo2.png" height="28" alt="CoolBrand">
            </a>
            <div class="input-group input-group-outline">
              <label class="form-label">Enter NUTS...</label>
              <input id="inputRegion" type="text" class="form-control">
            </div>
        </div>

      </div>

    </nav>


    <div class="container-fluid py-4 all_data_container">

      <h1 class="mb-0 emptyable"  id="nametitle"> Name of NUTS area </h1>
      <h6 class="mb-0 emptyable" id="subnametitle"> Country </h6>

      <div class="container mt-4">
        This area is identified by <span class="badge bg-dark">Code</span> <span id="span_nuts3" class="general_info emptyable"></span>. Its country (<span class="badge bg-dark">NUTS 0</span>) region code is <span id="span_nuts0" class="general_info emptyable"></span>. Its <span class="badge bg-dark">NUTS 2</span> region code  is <span id="span_nuts2" class="general_info emptyable"></span>, while its <span class="badge bg-dark">NUTS 1</span> region code  is <span id="span_nuts1" class="general_info emptyable"></span>.<br/>
        Demographically, its <span class="badge bg-secondary">Population</span> is <span id="span_population" class="general_info emptyable"></span>, with a <span class="badge bg-secondary">Density</span> of <span id="span_density" class="general_info emptyable"></span> per sqm. For context, the <span class="badge bg-warning">NUTS0-level population</span> is <span id="span_pop0" class="general_info emptyable"></span>. Since the previous data collection, the <span class="badge bg-secondary">Population change</span> amounts to <span id="span_popchange" class="general_info emptyable"></span>. There is a <span class="badge bg-secondary">Women:Men</span> ratio of <span id="span_womenratio" class="general_info emptyable"></span>. The <span class="badge bg-secondary">Fertility</span> rate is <span id="span_fertility" class="general_info emptyable"></span> live births per woman.<br/>
        From an economic point of view, the <span class="badge bg-danger">GDP per capita in Purchasing Power Standards (PPS)</span> is <span id="span_gdppps" class="general_info emptyable"></span> (vs the EU average of 100). The regional <span class="badge bg-danger">Gross Value Added</span> is <span id="span_gva" class="general_info emptyable"></span>.
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
                <span class="badge bg-dark">Urban-rural</span><span id="span_urbanrural" class="general_info emptyable"></span>
                <span class="badge bg-dark">Metropolitan</span><span id="span_metropolitan" class="general_info emptyable"></span>
                <span class="badge bg-dark">Coastal</span><span id="span_coastal" class="general_info emptyable"></span>
                <span class="badge bg-dark">Mountain</span><span id="span_mountain" class="general_info emptyable"></span>
                <span class="badge bg-dark">Border</span><span id="span_border" class="general_info emptyable"></span>
                <span class="badge bg-dark">Island</span><span id="span_island" class="general_info emptyable"></span>
                <span class="badge bg-dark">Remoteness</span><span id="span_remoteness" class="general_info emptyable"></span>
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
                <div id="my_dataviz" class="emptyable"></div>
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
                <div class="col-7 1stcol">
                  <span id="text_all_top_0" class="emptyable"></span>
                </div>

                <div class="col-5 2ndcol">
                  <canvas id="chart_all_top_0"></canvas>
                </div>

              </div>

              <!-- Button trigger modal + modal -->
<!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  More...
</button>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div-->

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
              <div class="col-7 1stcol">
                <span id="text_all_bottom_0" class="emptyable"></span>
              </div>
              <div class="col-5 2ndcol">
                <canvas id="chart_all_bottom_0"></canvas>
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
          <div class="col-7 1stcol">
            <span id="text_same_country_top_0" class="emptyable"></span>
          </div>

          <div class="col-5 2ndcol">
            <canvas id="chart_same_country_top_0"></canvas>
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
        <div class="col-7 1stcol">
          <span id="text_same_country_bottom_0" class="emptyable"></span>
        </div>
        <div class="col-5 2ndcol">
          <canvas id="chart_same_country_bottom_0"></canvas>
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
          <div class="col-7 1stcol">
            <span id="text_diff_country_top_0" class="emptyable"></span>
          </div>

          <div class="col-5 2ndcol">
            <canvas id="chart_diff_country_top_0"></canvas>
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
        <div class="col-7 1stcol">
          <span id="text_diff_country_bottom_0" class="emptyable"></span>
        </div>
        <div class="col-5 2ndcol">
          <canvas id="chart_diff_country_bottom_0"></canvas>
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
            <h4 class="mb-0">Regions with higher GDPPPS</h4>
          </div>
        </div>

        <div id="higher_gdppps_top_0" class="row p-3 align-items-center">
          <div class="col-7 1stcol">
            <span id="text_higher_gdppps_top_0" class="emptyable"></span>
          </div>

          <div class="col-5 2ndcol">
            <canvas id="chart_higher_gdppps_top_0"></canvas>
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
          <h4 class="mb-0">Regions with higher GDPPPS</h4>
        </div>
      </div>
      <div id="higher_gdppps_bottom_0" class="row p-3 align-items-center">
        <div class="col-7 1stcol">
          <span id="text_higher_gdppps_bottom_0" class="emptyable"></span>
        </div>
        <div class="col-5 2ndcol">
          <canvas id="chart_higher_gdppps_bottom_0"></canvas>
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
            <h4 class="mb-0">Regions with higher GVA</h4>
          </div>
        </div>

        <div id="higher_gva_top_0" class="row p-3 align-items-center">
          <div class="col-7 1stcol">
            <span id="text_higher_gva_top_0" class="emptyable"></span>
          </div>

          <div class="col-5 2ndcol">
            <canvas id="chart_higher_gva_top_0"></canvas>
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
          <h4 class="mb-0">Regions with higher GVA</h4>
        </div>
      </div>
      <div id="higher_gva_bottom_0" class="row p-3 align-items-center">
        <div class="col-7 1stcol">
          <span id="text_higher_gva_bottom_0" class="emptyable"></span>
        </div>
        <div class="col-5 2ndcol">
          <canvas id="chart_higher_gva_bottom_0"></canvas>
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

    $('.all_data_container').hide();

    // $( "span" ).click(function( eventObject ) {
    //    eventObject.preventDefault();
    //    window.location.href = '/region.php?nutsid='+code;
    //    // code = $(this)[0].children[0].attributes['data-code'].value;
    //    // navigateToNUTS(code);
    //});

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
    $('.all_data_container').hide();
    $('#all_content_placeholder').hide();
    emptyData();
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

    generate_d3_map() ;

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


        drawDonutChart(document.getElementById(chartitem), similarityobject['similarity']);
        // $(textitem).html("<a class='linktonuts' data-code='" + targetcode + "' href='#'>" + similarityobject['name'] + " [" + similarityobject['country'] + "]" +" </a>" + "<br/>" + (100*similarityobject['similarity']).toFixed(2) + "%");
        $(textitem).html("<a class='linktonuts' href='region.php?nutsid=" + targetcode + "'>" + similarityobject['name'] + " [" + similarityobject['country'] + "]" +" </a>" + "<br/>" + (100*similarityobject['similarity']).toFixed(2) + "%");
      }
    }



     $('.all_data_container').show();
  }



  function emptyData()
  {
  $('.emptyable').empty();

  $('#chart_all_top_0').remove();
  // $('#chart_all_top_1').remove();
  // $('#chart_all_top_2').remove();
  $('#chart_all_bottom_0').remove();
  // $('#chart_all_bottom_1').remove();
  // $('#chart_all_bottom_2').remove();
  $('#chart_diff_country_top_0').remove();
  // $('#chart_diff_country_top_1').remove();
  // $('#chart_diff_country_top_2').remove();
  $('#chart_diff_country_bottom_0').remove();
  // $('#chart_diff_country_bottom_1').remove();
  // $('#chart_diff_country_bottom_2').remove();
  $('#chart_same_country_top_0').remove();
  // $('#chart_same_country_top_1').remove();
  // $('#chart_same_country_top_2').remove();
  $('#chart_same_country_bottom_0').remove();
  // $('#chart_same_country_bottom_1').remove();
  // $('#chart_same_country_bottom_2').remove();
  $('#chart_higher_gdppps_top_0').remove();
  // $('#chart_higher_gdppps_top_1').remove();
  // $('#chart_higher_gdppps_top_2').remove();
  $('#chart_higher_gdppps_bottom_0').remove();
  // $('#chart_higher_gdppps_bottom_1').remove();
  // $('#chart_higher_gdppps_bottom_2').remove();
  $('#chart_higher_gva_top_0').remove();
  // $('#chart_higher_gva_top_1').remove();
  // $('#chart_higher_gva_top_2').remove();
  $('#chart_higher_gva_bottom_0').remove();
  // $('#chart_higher_gva_bottom_1').remove();
  // $('#chart_higher_gva_bottom_2').remove();
  //
  $('#all_top_0 > div.2ndcol').append('<canvas id="chart_all_top_0"></canvas>');
  // $('#all_top_1 > div.col-2').append('<canvas id="chart_all_top_1" "></canvas>');
  // $('#all_top_2 > div.col-2').append('<canvas id="chart_all_top_2" "></canvas>');
  $('#all_bottom_0 > div.2ndcol').append('<canvas id="chart_all_bottom_0" "></canvas>');
  // $('#all_bottom_1 > div.col-2').append('<canvas id="chart_all_bottom_1" "></canvas>');
  // $('#all_bottom_2 > div.col-2').append('<canvas id="chart_all_bottom_2" "></canvas>');
  $('#diff_country_top_0 > div.2ndcol').append('<canvas id="chart_diff_country_top_0" "></canvas>');
  // $('#diff_country_top_1 > div.col-2').append('<canvas id="chart_diff_country_top_1" "></canvas>');
  // $('#diff_country_top_2 > div.col-2').append('<canvas id="chart_diff_country_top_2" "></canvas>');
  $('#diff_country_bottom_0 > div.2ndcol').append('<canvas id="chart_diff_country_bottom_0" "></canvas>');
  // $('#diff_country_bottom_1 > div.col-2').append('<canvas id="chart_diff_country_bottom_1" "></canvas>');
  // $('#diff_country_bottom_2 > div.col-2').append('<canvas id="chart_diff_country_bottom_2" "></canvas>');
  $('#same_country_top_0 > div.2ndcol').append('<canvas id="chart_same_country_top_0" "></canvas>');
  // $('#same_country_top_1 > div.col-2').append('<canvas id="chart_same_country_top_1" "></canvas>');
  // $('#same_country_top_2 > div.col-2').append('<canvas id="chart_same_country_top_2" "></canvas>');
  $('#same_country_bottom_0 > div.2ndcol').append('<canvas id="chart_same_country_bottom_0" "></canvas>');
  // $('#same_country_bottom_1 > div.col-2').append('<canvas id="chart_same_country_bottom_1" "></canvas>');
  // $('#same_country_bottom_2 > div.col-2').append('<canvas id="chart_same_country_bottom_2" "></canvas>');
  $('#higher_gdppps_top_0 > div.2ndcol').append('<canvas id="chart_higher_gdppps_top_0" "></canvas>');
  // $('#higher_gdppps_top_1 > div.col-2').append('<canvas id="chart_higher_gdppps_top_1" "></canvas>');
  // $('#higher_gdppps_top_2 > div.col-2').append('<canvas id="chart_higher_gdppps_top_2" "></canvas>');
  $('#higher_gdppps_bottom_0 > div.2ndcol').append('<canvas id="chart_higher_gdppps_bottom_0" "></canvas>');
  // $('#higher_gdppps_bottom_1 > div.col-2').append('<canvas id="chart_higher_gdppps_bottom_1" "></canvas>');
  // $('#higher_gdppps_bottom_2 > div.col-2').append('<canvas id="chart_higher_gdppps_bottom_2" "></canvas>');
  $('#higher_gva_top_0 > div.2ndcol').append('<canvas id="chart_higher_gva_top_0" "></canvas>');
  // $('#higher_gva_top_1 > div.col-2').append('<canvas id="chart_higher_gva_top_1" "></canvas>');
  // $('#higher_gva_top_2 > div.col-2').append('<canvas id="chart_higher_gva_top_2" "></canvas>');
  $('#higher_gva_bottom_0 > div.2ndcol').append('<canvas id="chart_higher_gva_bottom_0" "></canvas>');
  // $('#higher_gva_bottom_1 > div.col-2').append('<canvas id="chart_higher_gva_bottom_1" "></canvas>');
  // $('#higher_gva_bottom_2 > div.col-2').append('<canvas id="chart_higher_gva_bottom_2" "></canvas>');

  }

  function drawDonutChart(canvasElement, similarity) {
    reciprocal = 1-similarity;

    fill = 'rgba(0, 0, 0, 1)'; // black
    if (similarity > 0.9) {
      fill = 'rgba(153,193,64, 1)'; // green
    } else if (similarity > 0.4) {
      fill = 'rgba(231,180,22, 1)'; // yellow
    } else if (similarity < 0.4)  {
      fill = 'rgba(204, 50, 50, 1)'; // red
    }

    var ctx = canvasElement.getContext('2d');
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
    // const width = window.innerWidth;
    // const height = window.innerHeight;

    // const projection = d3.geoMercator()
    //   .translate([width / 2, height / 2])
    //   .scale((width - 1) / 2 / Math.PI);

    d3
    .select("#my_dataviz")
    .attr("width", "100%");



      const projection = d3.geoMercator()
      .center([25,54])
      .scale(600);

    const path = d3.geoPath()
      .projection(projection);

    const zoom = d3.zoom()
      .scaleExtent([1, 8])
      .on('zoom', zoomed);

      const svg = d3
      .select("#my_dataviz")
      .append("svg")
      .attr("width", "100%");

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
    d3.json('data/nuts3-simplified.geojson',

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
          .style("opacity", .8);

          // g.attr("transform", "scale(" + $("#my_dataviz").width()/900 + ")");
          // $("svg").height($("#my_dataviz").width()*0.618);

       });

    function zoomed() {
      g
        .selectAll('path') // To prevent stroke width from scaling
        .attr('transform', d3.event.transform);
    }



    // d3.select(window).on("resize", sizeChange);
    // function sizeChange() {
    //   d3.select("g").attr("transform", "scale(" + $("#my_dataviz").width()/900 + ")");
    //   $("svg").height($("#my_dataviz").width()*0.618);
    // }
}


</script>


  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./MD-assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>