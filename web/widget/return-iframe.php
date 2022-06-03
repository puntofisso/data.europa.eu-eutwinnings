<?php

$server = 'https://data-europa-eu.eu-twinnings.site/';
if (isset($_GET['forcelocalhost'])) {
  $server = 'http://localhost:8888/web/';
}

if ((!isset($_GET['nutsid'])) && (!isset($_GET['widget']))) {
  die();
}

$nutsid=$_GET['nutsid'];
$widget=$_GET['widget'];


header('Content-Type: application/json; charset=utf-8');

if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
        // you want to allow, and if so:
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }


    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }


if ($widget == 'display') {
  echo "<iframe src='".$server."./widget/widget-display.php?nutsid=NO081'
    scrolling='no'
    style='width: 336px;
    height: 280px;
    margin: 0;
    padding: 0;
    border: none;'></iframe>";
} else if ($widget == '336x280') {
  echo "<iframe src='".$server."./widget/widget336x280.php?nutsid=NO081'
    scrolling='no'
    style='width: 336px;
    height: 280px;
    margin: 0;
    padding: 0;
    border: none;'></iframe>";
} else if ($widget == '728x90') {
  echo "<iframe src='".$server."./widget/widget728x90.php?nutsid=NO081'
    scrolling='no'
    style='width: 336px;
    height: 280px;
    margin: 0;
    padding: 0;
    border: none;'></iframe>";
}
else die();






?>
