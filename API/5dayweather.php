<?php
const KEY2 = "d17f52b2b9b183fce0ca85b4472b7adb";
$url1 = "http://api.openweathermap.org/geo/1.0/direct?q=" . $_GET['city'] . "&appid=" . KEY2;

if(@file_get_contents($url1)) {


    $weatherDecode1 = json_decode(file_get_contents($url1),true);
    
    
     // echo "<pre>";
     // print_r($weatherDecode1);
     // echo "</pre>";
 }
 else {
     $error1 = "City doesn't exists";
 }
 

const KEY3 = "d17f52b2b9b183fce0ca85b4472b7adb";
$url2 = "http://api.openweathermap.org/data/2.5/forecast?lat=" . $weatherDecode1['0']['lat'] . "&lon=" . $weatherDecode1['0']['lon'] . "&appid=" . KEY3 . "&units=metric";

if(@file_get_contents($url2)) {


    $weatherDecode2 = json_decode(file_get_contents($url2),true);
 
      echo "<pre>";
      print_r($weatherDecode2);
      echo "</pre>";
 }
 else {
     $error2 = "City doesn't exists";
 }
 
 $weatherdecode2 = $Tablica = Array(
    "list": Array(
      "0": Array(
        "dt_txt": "2022-06-14 06:00:00"
      )
    )
  );
  
  for($i = 0; $i < count($Tablica); $i++) {
    $dateString = $Tablica["list"][$i]["dt_txt"];
    $dataDate = DateTime::createFromFormat("Y-m-d H:i:s", $dateString);
    $dataHour = $dataDate->format('H');
    echo($dateHour);
  }