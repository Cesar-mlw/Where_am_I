<?php

require 'vendor/autoload.php';
 ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$geo = $_GET['q'];
// $geo = "BR";
use Google\GTrends;
$options = [
    'hl' => 'en',
    'tz' => -60,
    'geo' =>$geo,
];
/** @var Google\GTrends $gt */
$gt = new GTrends($options);

$array = array();
    




// realtime

// $arrJson =$gt->getRealTimeSearchTrends();

// foreach($arrJson['storySummaries']['trendingStories'] as $key=>$val){
//     echo  $val['title'] . " , ";
  
// }


try {

$arrJson =$gt->getDailySearchTrends();
foreach($arrJson['default']['trendingSearchesDays'][0]['trendingSearches'] as $key=>$val){
    echo  $val['title']['query'] . " , ";
    
  
}

}

catch(Exception $e) {

  echo 'Message: ' .$e->getMessage();

    
}




?>
