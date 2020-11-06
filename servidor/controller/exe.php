<?php

function httpGet($currencie){
    $url="https://api.bittrex.com/v3/currencies/".$currencie; 
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);

    curl_close($ch);
 
    $res = "[".$output."]";
    $resul = json_decode($res, true);
    //$res = json_encode($cadena);

    foreach($resul as $value){
        $cadena = $value['logoUrl'] ;  
        $img =  "<img src='".$cadena."' width='100' height='100'  >";
      //  print( $cadena."<br />") ;

      return $img;
    }
    
    
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

    $res = "[".$output2."]";
    $array = json_decode($res, true);
    //$res = json_encode($cadena);

    foreach($array as $value){
        $cadena = "Valor actual = ".$value['bidRate'] ;  
      //  print( $cadena."<br />") ;
      return $cadena;
    }

    return $output2;
    //echo $output;
}

function httpGet3(){
    // $url="https://api.bittrex.com/v3/currencies/".$currencie; 
    $url="https://api.bittrex.com/v3/markets/tickers"; 
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output3=curl_exec($ch);
 
    curl_close($ch);

    $array = json_decode($output3, true);
    
    foreach($array as $value){
        $cadena = $value['symbol'];
        $array2 = array($cadena);
        print( $cadena."<br />") ;
    }
    $res = json_encode($array2);
    //return $output3;
    //echo $output;
}

function httpGet4(){
    // $url="https://api.bittrex.com/v3/currencies/".$currencie; 
    $url="https://api.bittrex.com/v3/markets/"; 
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output4=curl_exec($ch);
 
    curl_close($ch);

    $arrayh = json_decode($output4, true);
    
    foreach($arrayh as $value){
        $cadena2 = $value['createdAt'];
        $array2h = array($cadena2);
        print( $cadena2."<br />") ;
    }
    $res = json_encode($array2h);
    return $output4;
    //echo $output;
}