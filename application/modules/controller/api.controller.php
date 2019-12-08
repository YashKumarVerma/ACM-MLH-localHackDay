<?php

function getWeatherData($timestamp, $lat, $long){
    $data = file_get_contents("https://api.darksky.net/forecast/".$GLOBALS['apikey']."/".$lat.",".$long.",".$timestamp);
    return $data;
}


function getDataOfNextDays($data){
    $timestamp = $data['timestamp'];
    $lat = $data['lat'];
    $long = $data['long'];

    $returnData = array();

    for($i = 0; $i <= 10; $i++){
        $dayTimestamp = strtotime('+1 day', $timestamp);

        // make request to get data from weather api
            // get data from webserview
            $data = getWeatherData($dayTimestamp, $lat, $long);
            console($data);
            $data = json_decode($data);

            // append data to returnd data
            array_push($returnData, $data);
    }

    console($returnData);
}