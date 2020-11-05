<?php

function httpGet($currencie){
    $url="https://api.bittrex.com/v3/currencies/".$currencie; 
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
    //echo $output;
}

function httpGet2($currencie2){
    // $url="https://api.bittrex.com/v3/currencies/".$currencie; 
    $url="https://api.bittrex.com/v3/markets/".$currencie2."-USD/ticker"; 
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output2=curl_exec($ch);
 
    curl_close($ch);
    return $output2;
    //echo $output;
}