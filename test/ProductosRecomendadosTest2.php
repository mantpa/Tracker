<?php
require_once __DIR__.'/config.inc.php';

/*$p = '{
  "user": "k834dr2uhl09m7cisqvgisd7o4",
  "num": 4,
  "whiteList": ["57904"]
}';*/

$p = array("user"=>"k834dr2uhl09m7cisqvgisd7m518","num"=>4,"whiteList"=>array("73639"));

$client = new \GuzzleHttp\Client();
$apiUrl = "http://199.223.233.241:8000/queries.json";

$json = json_encode($p);
try {
    $response = $client->post($apiUrl,array('body'=>$json,'headers' => array(
        'Content-type'     => 'application/json'
    )));
    $result = json_decode($response->getBody(true),1);
    print_r($result);
} catch(Exception $ex) {
    echo $ex->getTraceAsString();
}


?>