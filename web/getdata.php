<?php
/**
 * This script returns all the data available for a given NUTS area
 * and the top 10 similarities per category
 */
$code=$_GET['code'];
$method = 'sqlite';

// Set up return dictionary
$ret = array();
$ret['code'] = $code;

$db = null;
if ($method == "sqlite") {
  // SQLITE
  $db = new PDO('sqlite:data/nuts.db');
} else {
  // MYSQL
  $host = '127.0.0.1';
  $dbname   = 'eutwinnings';
  $user = 'eutwinnings';
  $pass = '';
  $port = "3306";
  $charset = 'utf8';
  $options = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
  ];
  $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port";
  try {
       $db = new PDO($dsn, $user, $pass, $options);
  } catch (PDOException $e) {
       throw new PDOException($e->getMessage(), (int)$e->getCode());
  }
}

// Get data about the NUTS area
$stm = $db->prepare("SELECT * FROM nuts WHERE code = ?");
$res = $stm->execute(array($code));
$data = $stm->fetchAll();

$nuts0 = "";
$nuts2 = "";
$nuts1 = "";

foreach ($data as $row) {
  $ret['name'] = $row['name'];
  $ret['level'] = $row['level'];
  $ret['nuts0'] = $row['nuts0'];
  $nuts0 = $row['nuts0'];
  $ret['nuts1'] = $row['nuts1'];
  $nuts1 = $row['nuts1'];
  $ret['nuts2'] = $row['nuts2'];
  $nuts2 = $row['nuts2'];
  $ret['population'] = $row['pop3'];
  $ret['population0'] = $row['pop0'];
  $ret['population1'] = $row['pop1'];
  $ret['population2'] = $row['pop2'];
  $ret['density'] = $row['density'];
  $ret['fertility'] = $row['fertility'];
  $ret['popchange'] = $row['popchange'];
  $ret['womenratio'] = $row['womenratio'];
  $ret['gdppps'] = $row['gdppps'];
  $ret['gva'] = $row['gva'];


}


// Get data about the rank of the NUTS area
$stm = $db->prepare("SELECT * FROM (SELECT code, rank() over (ORDER by nuts.pop3 DESC) as pop3rank, rank() over (ORDER by nuts.pop0 DESC) as pop0rank, rank() over (ORDER by nuts.density DESC) as densityrank, rank() over (ORDER by nuts.fertility DESC) as fertilityrank, rank() over (ORDER by nuts.popchange DESC) as popchangerank, rank() over (ORDER by nuts.womenratio DESC) as womenratiorank, rank() over (ORDER by nuts.gdppps DESC) as gdpppsrank, rank() over (ORDER by nuts.gva DESC) as gvarank FROM nuts) WHERE code = ?");
$res = $stm->execute(array($code));
$data = $stm->fetchAll();


foreach ($data as $row) {

  $ret['populationrank'] = $row['pop3rank'];
  $ret['population0rank'] = $row['pop0rank'];
  $ret['densityrank'] = $row['densityrank'];
  $ret['fertilityrank'] = $row['fertilityrank'];
  $ret['popchangerank'] = $row['popchangerank'];
  $ret['womenratiorank'] = $row['womenratiorank'];
  $ret['gdpppsrank'] = $row['gdpppsrank'];
  $ret['gvarank'] = $row['gvarank'];


}


// Find nuts0 name
$stm = $db->prepare("SELECT * FROM relations WHERE code = ?");
$res = $stm->execute(array($nuts0));
$data = $stm->fetchAll();
foreach ($data as $row) {
  $ret['nuts0name'] = $row['name'];
}

// Find nuts1 name
$stm = $db->prepare("SELECT * FROM relations WHERE code = ?");
$res = $stm->execute(array($nuts1));
$data = $stm->fetchAll();
foreach ($data as $row) {
  $ret['nuts1name'] = $row['name'];
}

// Find nuts2 name
$stm = $db->prepare("SELECT * FROM relations WHERE code = ?");
// $stm->bindParam(1, $nuts2, SQLITE3_TEXT) ;
$res = $stm->execute(array($nuts2));
$data = $stm->fetchAll();
foreach ($data as $row) {
  $ret['nuts2name'] = $row['name'];
}

// Extra data
$stm = $db->prepare("SELECT * from nutsextra WHERE code = ?");
$res = $stm->execute(array($code));
$ret['extra'] = array();
$data = $stm->fetch(PDO::FETCH_ASSOC);


foreach ($data as $key => $value) {
   $ret['extra'][$key] = $value;
 }

// General similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.pop3 as pop3, rank() over (ORDER by n2.pop3 DESC) as pop3rank, n2.pop0 as pop0, rank() over (ORDER by n2.pop0 DESC) as pop0rank, n2.density as density, rank() over (ORDER by n2.density DESC) as densityrank, n2.fertility as fertility, rank() over (ORDER by n2.fertility DESC) as fertilityrank, n2.popchange as popchange, rank() over (ORDER by n2.popchange DESC) as popchangerank, n2.womenratio as womenratio, rank() over (ORDER by n2.womenratio DESC) as womenratiorank, n2.gdppps as gdppps, rank() over (ORDER by n2.gdppps DESC) as gdpppsrank, n2.gva as gva, rank() over (ORDER by n2.gva DESC) as gvarank FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and s.code1 = ?  ORDER by s.similarity DESC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_all_top'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_all_top'][$index]['code'] = $code2;
  $ret['similarity_all_top'][$index]['name'] = $row['name'];
  $ret['similarity_all_top'][$index]['country'] = $row['country'];
  $ret['similarity_all_top'][$index]['similarity'] = $row['similarity'];


  $ret['similarity_all_top'][$index]['pop3'] = $row['pop3'];
  $ret['similarity_all_top'][$index]['pop0'] = $row['pop0'];
  $ret['similarity_all_top'][$index]['density'] = $row['density'];
  $ret['similarity_all_top'][$index]['fertility'] = $row['fertility'];
  $ret['similarity_all_top'][$index]['popchange'] = $row['popchange'];
  $ret['similarity_all_top'][$index]['womenratio'] = $row['womenratio'];
  $ret['similarity_all_top'][$index]['gdppps'] = $row['gdppps'];
  $ret['similarity_all_top'][$index]['gva'] = $row['gva'];

  $ret['similarity_all_top'][$index]['pop3rank'] = $row['pop3rank'];
  $ret['similarity_all_top'][$index]['pop0rank'] = $row['pop0rank'];
  $ret['similarity_all_top'][$index]['densityrank'] = $row['densityrank'];
  $ret['similarity_all_top'][$index]['fertilityrank'] = $row['fertilityrank'];
  $ret['similarity_all_top'][$index]['popchangerank'] = $row['popchangerank'];
  $ret['similarity_all_top'][$index]['womenratiorank'] = $row['womenratiorank'];
  $ret['similarity_all_top'][$index]['gdpppsrank'] = $row['gdpppsrank'];
  $ret['similarity_all_top'][$index]['gvarank'] = $row['gvarank'];

  $index++;
}




// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.pop3 as pop3, n2.pop0 as pop0, n2.density as density, n2.fertility as fertility, n2.popchange as popchange, n2.womenratio as womenratio,  n2.gdppps as gdppps, n2.gva as gva FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and s.code1 = ?  ORDER by s.similarity DESC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_all_top'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_all_top'][$index]['code'] = $code2;
  $ret['similarity_all_top'][$index]['name'] = $row['name'];
  $ret['similarity_all_top'][$index]['country'] = $row['country'];
  $ret['similarity_all_top'][$index]['similarity'] = $row['similarity'];


  $ret['similarity_all_top'][$index]['pop3'] = $row['pop3'];
  $ret['similarity_all_top'][$index]['pop0'] = $row['pop0'];
  $ret['similarity_all_top'][$index]['density'] = $row['density'];
  $ret['similarity_all_top'][$index]['fertility'] = $row['fertility'];
  $ret['similarity_all_top'][$index]['popchange'] = $row['popchange'];
  $ret['similarity_all_top'][$index]['womenratio'] = $row['womenratio'];
  $ret['similarity_all_top'][$index]['gdppps'] = $row['gdppps'];
  $ret['similarity_all_top'][$index]['gva'] = $row['gva'];



  $index++;
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and s.code1 = ?  ORDER by s.similarity ASC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_all_bottom'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_all_bottom'][$index]['code'] = $code2;
  $ret['similarity_all_bottom'][$index]['name'] = $row['name'];
  $ret['similarity_all_bottom'][$index]['country'] = $row['country'];
  $ret['similarity_all_bottom'][$index]['similarity'] = $row['similarity'];
  // n2.pop3 as pop3, n2.pop0 as pop0, n2.density as density, n2.fertility as fertility, n2.popchange as popchange, n2.womenratio as womenratio, n2.gdppps as gdppps, n2.gva as gva
  // $ret['similarity_'][$index][''] = $row[''];
  $index++;
}


// Same country similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n1.nuts0 == n2.nuts0 and s.code1 = ?  ORDER by s.similarity DESC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_same_country_top'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_same_country_top'][$index]['code'] = $code2;
  $ret['similarity_same_country_top'][$index]['name'] = $row['name'];
  $ret['similarity_same_country_top'][$index]['country'] = $row['country'];
  $ret['similarity_same_country_top'][$index]['similarity'] = $row['similarity'];
  $index++;
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n1.nuts0 == n2.nuts0 and s.code1 = ?  ORDER by s.similarity ASC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_same_country_bottom'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_same_country_bottom'][$index]['code'] = $code2;
  $ret['similarity_same_country_bottom'][$index]['name'] = $row['name'];
  $ret['similarity_same_country_bottom'][$index]['country'] = $row['country'];
  $ret['similarity_same_country_bottom'][$index]['similarity'] = $row['similarity'];
  $index++;
}

// Different country similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n1.nuts0 <> n2.nuts0 and s.code1 = ?  ORDER by s.similarity DESC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_diff_country_top'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_diff_country_top'][$index]['code'] = $code2;
  $ret['similarity_diff_country_top'][$index]['name'] = $row['name'];
  $ret['similarity_diff_country_top'][$index]['country'] = $row['country'];
  $ret['similarity_diff_country_top'][$index]['similarity'] = $row['similarity'];
  $index++;
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n1.nuts0 <> n2.nuts0 and s.code1 = ?  ORDER by s.similarity ASC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_diff_country_bottom'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_diff_country_bottom'][$index]['code'] = $code2;
  $ret['similarity_diff_country_bottom'][$index]['name'] = $row['name'];
  $ret['similarity_diff_country_bottom'][$index]['country'] = $row['country'];
  $ret['similarity_diff_country_bottom'][$index]['similarity'] = $row['similarity'];
  $index++;
}

// Higher GDP PPS similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.gdppps as gdppps2 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n2.gdppps > n1.gdppps and s.code1 = ? ORDER by s.similarity DESC LIMIT 5;");
$res = $stm->execute(array($code));
$ret['similarity_higher_gdppps_top'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_higher_gdppps_top'][$index]['code'] = $code2;
  $ret['similarity_higher_gdppps_top'][$index]['name'] = $row['name'];
  $ret['similarity_higher_gdppps_top'][$index]['country'] = $row['country'];
  $ret['similarity_higher_gdppps_top'][$index]['gdppps2'] = $row['gdppps2'];
  $ret['similarity_higher_gdppps_top'][$index]['similarity'] = $row['similarity'];
  $index++;
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.gdppps as gdppps2 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n2.gdppps > n1.gdppps and s.code1 = ? ORDER by s.similarity ASC LIMIT 5;");
$res = $stm->execute(array($code));
$ret['similarity_higher_gdppps_bottom'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_higher_gdppps_bottom'][$index]['code'] = $code2;
  $ret['similarity_higher_gdppps_bottom'][$index]['name'] = $row['name'];
  $ret['similarity_higher_gdppps_bottom'][$index]['country'] = $row['country'];
  $ret['similarity_higher_gdppps_bottom'][$index]['gdppps2'] = $row['gdppps2'];
  $ret['similarity_higher_gdppps_bottom'][$index]['similarity'] = $row['similarity'];
  $index++;
}

// Higher GVA similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.gva as gva2 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n2.gva > n1.gva and s.code1 = ? ORDER by s.similarity DESC LIMIT 5;");
$res = $stm->execute(array($code));
$ret['similarity_higher_gva_top'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_higher_gva_top'][$index]['code'] = $code2;
  $ret['similarity_higher_gva_top'][$index]['name'] = $row['name'];
  $ret['similarity_higher_gva_top'][$index]['country'] = $row['country'];
  $ret['similarity_higher_gva_top'][$index]['gva2'] = $row['gva2'];
  $ret['similarity_higher_gva_top'][$index]['similarity'] = $row['similarity'];
  $index++;
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.gva as gva2 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n2.gva > n1.gva and s.code1 = ? ORDER by s.similarity ASC LIMIT 5;");
$res = $stm->execute(array($code));
$ret['similarity_higher_gva_bottom'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_higher_gva_bottom'][$index]['code'] = $code2;
  $ret['similarity_higher_gva_bottom'][$index]['name'] = $row['name'];
  $ret['similarity_higher_gva_bottom'][$index]['country'] = $row['country'];
  $ret['similarity_higher_gva_bottom'][$index]['gva2'] = $row['gva2'];
  $ret['similarity_higher_gva_bottom'][$index]['similarity'] = $row['similarity'];
  $index++;
}

// ALL similarities for map
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.pop3 as n2pop3, n2.pop0 as n2pop0, n2.pop1 as n2pop1 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and s.code1 = ?  ORDER by s.similarity DESC ;");
$res = $stm->execute(array($code));
$ret['similarity_all'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_all'][$index]['code'] = $code2;
  $ret['similarity_all'][$index]['name'] = $row['name'];
  // $ret['similarity_all'][$index]['country'] = $row['country'];
  $ret['similarity_all'][$index]['similarity'] = $row['similarity'];




  $index++;
}


// ALL similarities for hex map
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.pop3 as n2pop3, n2.pop0 as n2pop0, n2.pop1 as n2pop1 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and s.code1 = ?  ORDER by s.similarity DESC ;");
$res = $stm->execute(array($code));

$data = $stm->fetchAll();

foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_hexmap'][$code2] = array();
  $ret['similarity_hexmap'][$code2]['name'] = $row['name'];
    $ret['similarity_hexmap'][$code2]['similarity'] = $row['similarity'];

}

// MAX data in order to make radar chart
$stm = $db->prepare("SELECT max(pop3) as pop3, max(pop0) as pop0, max(density) as density, max(fertility) as fertility, max(popchange) as popchange, max(womenratio) as womenratio, max(gdppps) as gdppps, max(gva) as gva FROM nuts;");
$res = $stm->execute();
$ret['max'] = array();
$data = $stm->fetchAll();
$index=0;
foreach ($data as $row) {

  $ret['max']['population3'] = $row['pop3'];
  $ret['max']['population0'] = $row['pop0'];
  $ret['max']['density'] = $row['density'];
  $ret['max']['fertility'] = $row['fertility'];
  $ret['max']['popchange'] = $row['popchange'];
  $ret['max']['womenratio'] = $row['womenratio'];
  $ret['max']['gdppps'] = $row['gdppps'];
  $ret['max']['gva'] = $row['gva'];

}

// Ranks
$stm = $db->prepare("SELECT code, rank() over (ORDER by nuts.pop3 DESC) as pop3rank, rank() over (ORDER by nuts.pop0 DESC) as pop0rank, rank() over (ORDER by nuts.density DESC) as densityrank, rank() over (ORDER by nuts.fertility DESC) as fertilityrank, rank() over (ORDER by nuts.popchange DESC) as popchangerank, rank() over (ORDER by nuts.womenratio DESC) as womenratiorank, rank() over (ORDER by nuts.gdppps DESC) as gdpppsrank, rank() over (ORDER by nuts.gva DESC) as gvarank  FROM nuts WHERE level=3;");
$res = $stm->execute();
$ret['ranks'] = array();
$data = $stm->fetchAll();

foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['ranks'][$code2] = array();
  $ret['ranks'][$code2]['pop3rank'] = $row['pop3rank'];
  $ret['ranks'][$code2]['pop0rank'] = $row['pop0rank'];
  $ret['ranks'][$code2]['densityrank'] = $row['densityrank'];
  $ret['ranks'][$code2]['fertilityrank'] = $row['fertilityrank'];
  $ret['ranks'][$code2]['popchangerank'] = $row['popchangerank'];
  $ret['ranks'][$code2]['womenratiorank'] = $row['womenratiorank'];
  $ret['ranks'][$code2]['gdpppsrank'] = $row['gdpppsrank'];
  $ret['ranks'][$code2]['gvarank'] = $row['gvarank'];

}

echo json_encode($ret, true);

?>
