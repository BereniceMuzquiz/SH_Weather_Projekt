<?php

//include nuSOAP library
require "lib/nusoap.php";

include 'res/beschreibung.php';

// Creat client object
// with the web server WSDL URL address
$client= new nusoap_client("https://wetterserver.azurewebsites.net");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wetter_APP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/myStyle.css">
</head>
<body>
 
<?php
require "form.php";  //form to get city name

ini_set('date.timezone','Europe/Berlin'); 
$citytime = date(" H:i");
setlocale (LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');

$name = $_GET["city"];  // get city name from the Form

// passing function name "curr_temp" 
$res_currTemp = $client->call("curr_temp", array("name"=>$name));

$res_currGesch = $client->call("curr_geschwindigkeit", array("name"=>$name));
$res_currRicht = $client->call("curr_richtung", array("name"=>$name));
$res_currBeschreibung = $client->call("currBeshreibung", array("name"=>$name));

$res_Temp_1 = $client->call("temp_1", array("name"=>$name));
$res_gesch_1 = $client->call("gesch_1", array("name"=>$name));
$res_richt_1 = $client->call("richt_1", array("name"=>$name));
$res_besch_1 = $client->call("besch_1", array("name"=>$name));

$res_Temp_2 = $client->call("temp_2", array("name"=>$name));
$res_gesch_2 = $client->call("gesch_2", array("name"=>$name));
$res_richt_2 = $client->call("richt_2", array("name"=>$name));
$res_besch_2 = $client->call("besch_2", array("name"=>$name));

//  Holt Bilder und Text für Beschreibung von File home.php
if(empty($res_currTemp)){
  include 'res/home.php';   
};

foreach($beschreibung as $num=>$text)
    {
        if ($res_currBeschreibung == $num){
            $beschr = $text;
            $img = $num;         
        }
        if ($res_besch_1 == $num){
          $beschr1 = $text;
          $img1 = $num;        
        }
        if ($res_besch_2 == $num){
          $beschr2 = $text;
          $img2 = $num;       
      }
    };
    
?>
<div class="container">

<?php include "htmlCode.php" ?>

</div>

</body>
</html>

