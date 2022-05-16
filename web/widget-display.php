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



    <div class="container">
      <div class="row">
        <div class="col-sm">
          <img class="img-fluid" src="#" id="qgis_image"/>
        </div>
        <div class="col-sm">
          <h1 class="mb-0"  id="nametitle"> Name of NUTS area </h1>
          <h6 class="mb-0" id="subnametitle"> Country </h6>
        </div>
        <div class="col-sm">
          One of three columns
        </div>
      </div>
    </div>



    <div class="container-fluid py-4 all_data_container">

      <!--h1 class="mb-0"  id="nametitle"> Name of NUTS area </h1>
      <h6 class="mb-0" id="subnametitle"> Country </h6-->

      <div class="container mt-4">
        This area is identified by <span class="badge bg-dark">Code</span> <span id="span_nuts3" class="general_info"></span>. Its country (<span class="badge bg-dark">NUTS 0</span>) region code is <span id="span_nuts0" class="general_info"></span>. Its <span class="badge bg-dark">NUTS 2</span> region code  is <span id="span_nuts2" class="general_info"></span>, while its <span class="badge bg-dark">NUTS 1</span> region code  is <span id="span_nuts1" class="general_info"></span>.<br/>
        Demographically, its <span class="badge bg-secondary">Population</span> is <span id="span_population" class="general_info"></span>, with a <span class="badge bg-secondary">Density</span> of <span id="span_density" class="general_info"></span> per sqm. For context, the <span class="badge bg-warning">NUTS0-level population</span> is <span id="span_pop0" class="general_info"></span>. Since the previous data collection, the <span class="badge bg-secondary">Population change</span> amounts to <span id="span_popchange" class="general_info"></span>. There is a <span class="badge bg-secondary">Women:Men</span> ratio of <span id="span_womenratio" class="general_info"></span>. The <span class="badge bg-secondary">Fertility</span> rate is <span id="span_fertility" class="general_info"></span> live births per woman.<br/>
        From an economic point of view, the <span class="badge bg-danger">GDP per capita in Purchasing Power Standards (PPS)</span> is <span id="span_gdppps" class="general_info"></span> (vs the EU average of 100). The regional <span class="badge bg-danger">Gross Value Added</span> is <span id="span_gva" class="general_info"></span>.
      </div>

      <div class="row mt-4">

        <!--div class="col-lg-4 col-md-6 mt-4 mb-4">
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
        </div-->

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
                <div id="my_dataviz" class=""></div>
                <button type="button" class="btn btn-primary" id="zoom-in">+</button>
                <button type="button" class="btn btn-primary"id="zoom-out">-</button>
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

    $.getJSON("widget-getdata.php?code="+code, function(data){
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


     generate_d3_map() ;


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
