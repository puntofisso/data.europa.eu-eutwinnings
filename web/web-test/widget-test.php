<?php

$server = 'https://data-europa-eu.eu-twinnings.site/';

if (isset($_GET['forcelocalhost'])) {
  $server = 'http://localhost:8888/web/';
  $url  = $server."return-iframe.php?nutsid=FRI13&widget=336x280&forcelocalhost";
} else {
  $url  = $server."return-iframe.php?nutsid=FRI13&widget=336x280";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title></title>
</head>
<body>


<script>

 (function() {

   // Load data
   // https://data-europa-eu.eu-twinnings.site/getdata.php?code=FRI13
// The following code will be enclosed within an anonymous function


var url = "<?php echo $url;?>";

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
   if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
      if (xmlhttp.status == 200) {
          document.write(xmlhttp.responseText);
      }
      else if (xmlhttp.status == 400) {
         alert('There was an error 400');
      }
      else {
          alert('something else other than 200 was returned: ' + xmlhttp.status);
      }
   }

};
xmlhttp.open("GET", url, true);
xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
xmlhttp.send();
})(); // We call our anonymous function immediately
</script>



</body>
</html>
