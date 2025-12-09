<!DOCTYPE html>
<html lang="de">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DSB</title>
   <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
   <style>body{font-family: 'Roboto';}</style>
</head>

<body>
<div id="container">
    <h1 style="font-size:48px; margin-left:5px; margin-top:5px;">Meldungen<span style="color:#EAAB01;"> SV</span></h1>
</div>
    <div style="width:357px; height:750px; margin-left:5px; font-size:22px;">

<?php
   include "data.php";
   foreach($meldungen as $meldung) {
      $meldung_name = $meldung[0];
      $meldung_txt = $meldung[1];
      print("<h2>$meldung_name</h2> <p>$meldung_txt</p>");
   }
?>

<p>Adresse der SV Website: <a href="http://svmtg.de/index.php">svmtg.de</a></p>
</div>

</body> 
</html>
