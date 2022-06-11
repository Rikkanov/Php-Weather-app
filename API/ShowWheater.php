<?php
const KEY1 = "d17f52b2b9b183fce0ca85b4472b7adb";
$url = "https://api.openweathermap.org/data/2.5/weather?q=" . $_GET['city'] . "&appid=" . KEY1;

if(@file_get_contents($url)) {


    $weatherDecode = json_decode(file_get_contents($url),true);
 
    // echo "<pre>";
    // print_r($weatherDecode);
    // echo "</pre>";
 }
 else {
     $error = "City doesn't exists";
 }

 
 ?>