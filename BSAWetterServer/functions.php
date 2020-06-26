<?php

include "data.php"; // Database

$GLOBALS["details"];

//*********************  Methods  **********************/

//function to get current temperatur
function curr_temp($name)      //function  name = "curr_temp"
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $temp =  $item["0"]["temp"];  
        return $temp;
        break;
        }
   } 
}

//function to get current wind speed
function curr_geschwindigkeit($name)  //function name ="curr_geschwindigkeit
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $gesch =  $item["0"]["gesch"];  
        return $gesch;
        break;
        }
   } 
}

function curr_richtung($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $richt =  $item["0"]["rich"];  
        return $richt;
        break;
        }
   } 
}

function temp_1($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $temp_1 =  $item["1"]["temp"];  
        return $temp_1;
        break;
        }
   } 
}

function temp_2($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $temp_2 =  $item["2"]["temp"];  
        return $temp_2;
        break;
        }
   } 
}

function gesch_1($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $gesch_1 =  $item["1"]["gesch"];  
        return $gesch_1;
        break;
        }
   } 
}

function gesch_2($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $gesch_2 =  $item["2"]["gesch"];  
        return $gesch_2;
        break;
        }
   } 
}

function richt_1($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $richt_1 =  $item["1"]["rich"];  
        return $richt_1;
        break;
        }
   } 
}

function richt_2($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $richt_2 =  $item["2"]["rich"];  
        return $richt_2;
        break;
        }
   } 
}

function currBeshreibung($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $gesch_2 =  $item["0"]["icon"];  
        return $gesch_2;
        break;
        }
   } 
}

function besch_1($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $richt_1 =  $item["1"]["icon"];  
        return $richt_1;
        break;
        }
   } 
}

function besch_2($name)
{
    foreach($GLOBALS["details"] as $n=>$item)
    {
        if($n == $name)
        {
        $richt_2 =  $item["2"]["icon"];  
        return $richt_2;
        break;
        }
   } 
}

?>
