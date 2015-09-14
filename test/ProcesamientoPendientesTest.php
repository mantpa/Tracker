<?php
require_once __DIR__.'/config.inc.php';


class VisitasPendientesTest {
    public static function process($p) {
        $client = new \GuzzleHttp\Client();
        $apiUrl = "http://localhost/Tracker/Servicios/Procesamiento/_index.php/rest/visitas/procesar_pendientes/";
        
        $response = $client->post($apiUrl,array('body'=>json_encode($p)));
        $dataResponse = json_decode($response->getBody(true),1);
        return $dataResponse;
    }
}

$cliente = 1;
$p = (object)["idCliente" => $cliente , "numeroVisitas" => "10"];
$result = VisitasPendientesTest::process($p);
print_r($result);

?>