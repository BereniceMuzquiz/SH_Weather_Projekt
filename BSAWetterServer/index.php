<?php

//require nuSOAP library
require "lib/nusoap.php";

require "functions.php";

//creat an instance for nusoap server 
$server = new nusoap_server(); 

// configure WSDL file
$server->configureWSDL('BSAWetterServer','urn:BSAWetterServer'); 

//*********************  Current Data  **********************/

//register a function with name "curr_temp"
$server->register(
'curr_temp',                      //functions name
array('name'=>'xsd:string'),      //functions input (parameter)
array('return'=>'xsd:integer')    //functions output
);

$server->register(
    'curr_geschwindigkeit',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:integer')
    );

$server->register(
    'curr_richtung',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:string')
    );

//*********************  morgen Data  **********************/
$server->register(
    'temp_1',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:integer')
    );

$server->register(
    'gesch_1',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:integer')
    );

$server->register(
    'richt_1',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:string')
    );

//*********************  übermorgen Data  **********************/
$server->register(
    'temp_2',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:integer')
    );

$server->register(
    'gesch_2',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:integer')
    );

$server->register(
    'richt_2',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:string')
    );

//*********************  Beschreibung / Icons  **********************/
$server->register(
    'currBeshreibung',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:integer')
    );

$server->register(
    'besch_1',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:integer')
    );

$server->register(
    'besch_2',
    array('name'=>'xsd:string'),
    array('return'=>'xsd:integer')
    );


// Get our posted data if the service is being consumed
$server->service(file_get_contents("php://input"));

?>