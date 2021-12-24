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

foreach ($data as $row) {
  $ret['name'] = $row['name'];
  $ret['nuts0'] = $row['nuts0'];
  $ret['nuts1'] = $row['nuts1'];
  $ret['nuts2'] = $row['nuts2'];
  $ret['population'] = $row['pop3'];
  $ret['density'] = $row['density'];
  $ret['fertility'] = $row['fertility'];
  $ret['popchange'] = $row['popchange'];
  $ret['womenratio'] = $row['womenratio'];
  $ret['gdppps'] = $row['gdppps'];
  $ret['gva'] = $row['gva'];
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

// General similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and s.code1 = ?  ORDER by s.similarity DESC LIMIT 5 ;");
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
  $index++;
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and s.code1 = ?  ORDER by s.similarity ASC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_all_bottom'] = array();
$data = $stm->fetchAll();
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_all_bottom'][$code2] = array();
  $ret['similarity_all_bottom'][$code2]['name'] = $row['name'];
  $ret['similarity_all_bottom'][$code2]['country'] = $row['country'];
  $ret['similarity_all_bottom'][$code2]['similarity'] = $row['similarity'];
}


// Same country similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n1.nuts0 == n2.nuts0 and s.code1 = ?  ORDER by s.similarity DESC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_same_country_top'] = array();
$data = $stm->fetchAll();
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_same_country_top'][$code2] = array();
  $ret['similarity_same_country_top'][$code2]['name'] = $row['name'];
  $ret['similarity_same_country_top'][$code2]['country'] = $row['country'];
  $ret['similarity_same_country_top'][$code2]['similarity'] = $row['similarity'];
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n1.nuts0 == n2.nuts0 and s.code1 = ?  ORDER by s.similarity ASC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_same_country_bottom'] = array();
$data = $stm->fetchAll();
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_same_country_bottom'][$code2] = array();
  $ret['similarity_same_country_bottom'][$code2]['name'] = $row['name'];
  $ret['similarity_same_country_bottom'][$code2]['country'] = $row['country'];
  $ret['similarity_same_country_bottom'][$code2]['similarity'] = $row['similarity'];
}

// Different country similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n1.nuts0 <> n2.nuts0 and s.code1 = ?  ORDER by s.similarity DESC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_diff_country_top'] = array();
$data = $stm->fetchAll();
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_diff_country_top'][$code2] = array();
  $ret['similarity_diff_country_top'][$code2]['name'] = $row['name'];
  $ret['similarity_diff_country_top'][$code2]['country'] = $row['country'];
  $ret['similarity_diff_country_top'][$code2]['similarity'] = $row['similarity'];
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n1.nuts0 <> n2.nuts0 and s.code1 = ?  ORDER by s.similarity ASC LIMIT 5 ;");
$res = $stm->execute(array($code));
$ret['similarity_diff_country_bottom'] = array();
$data = $stm->fetchAll();
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_diff_country_bottom'][$code2] = array();
  $ret['similarity_diff_country_bottom'][$code2]['name'] = $row['name'];
  $ret['similarity_diff_country_bottom'][$code2]['country'] = $row['country'];
  $ret['similarity_diff_country_bottom'][$code2]['similarity'] = $row['similarity'];
}

// Higher GDP PPS similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.gdppps as gdppps2 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n2.gdppps > n1.gdppps and s.code1 = ? ORDER by s.similarity DESC LIMIT 5;");
$res = $stm->execute(array($code));
$ret['similarity_higher_gdppps_top'] = array();
$data = $stm->fetchAll();
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_higher_gdppps_top'][$code2] = array();
  $ret['similarity_higher_gdppps_top'][$code2]['name'] = $row['name'];
  $ret['similarity_higher_gdppps_top'][$code2]['country'] = $row['country'];
  $ret['similarity_higher_gdppps_top'][$code2]['gdppps2'] = $row['gdppps2'];
  $ret['similarity_higher_gdppps_top'][$code2]['similarity'] = $row['similarity'];
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.gdppps as gdppps2 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n2.gdppps > n1.gdppps and s.code1 = ? ORDER by s.similarity ASC LIMIT 5;");
$res = $stm->execute(array($code));
$ret['similarity_higher_gdppps_bottom'] = array();
$data = $stm->fetchAll();
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_higher_gdppps_bottom'][$code2] = array();
  $ret['similarity_higher_gdppps_bottom'][$code2]['name'] = $row['name'];
  $ret['similarity_higher_gdppps_bottom'][$code2]['country'] = $row['country'];
  $ret['similarity_higher_gdppps_bottom'][$code2]['gdppps2'] = $row['gdppps2'];
  $ret['similarity_higher_gdppps_bottom'][$code2]['similarity'] = $row['similarity'];
}

// Higher GVA similarity
// Most similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.gva as gva2 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n2.gva > n1.gva and s.code1 = ? ORDER by s.similarity DESC LIMIT 5;");
$res = $stm->execute(array($code));
$ret['similarity_higher_gva_top'] = array();
$data = $stm->fetchAll();
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_higher_gva_top'][$code2] = array();
  $ret['similarity_higher_gva_top'][$code2]['name'] = $row['name'];
  $ret['similarity_higher_gva_top'][$code2]['country'] = $row['country'];
  $ret['similarity_higher_gva_top'][$code2]['gva2'] = $row['gva2'];
  $ret['similarity_higher_gva_top'][$code2]['similarity'] = $row['similarity'];
}

// Least similar
$stm = $db->prepare("SELECT s.code2 as code, s.similarity as similarity, n2.name as name, n2.nuts0 as country, n2.gva as gva2 FROM similarity s JOIN nuts n1, nuts n2 WHERE s.code1 = n1.code and s.code2=n2.code and n2.gva > n1.gva and s.code1 = ? ORDER by s.similarity ASC LIMIT 5;");
$res = $stm->execute(array($code));
$ret['similarity_higher_gva_bottom'] = array();
$data = $stm->fetchAll();
foreach ($data as $row) {
  $code2 = $row['code'];
  $ret['similarity_higher_gva_bottom'][$code2] = array();
  $ret['similarity_higher_gva_bottom'][$code2]['name'] = $row['name'];
  $ret['similarity_higher_gva_bottom'][$code2]['country'] = $row['country'];
  $ret['similarity_higher_gva_bottom'][$code2]['gva2'] = $row['gva2'];
  $ret['similarity_higher_gva_bottom'][$code2]['similarity'] = $row['similarity'];
}

echo json_encode($ret, true);

?>
