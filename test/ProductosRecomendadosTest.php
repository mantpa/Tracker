<?php
require_once __DIR__.'/config.inc.php';


class ProductosRecomendadosTest {
    public static function buscarRecomendados($p) {
        $client = new \GuzzleHttp\Client();
        $apiUrl = "http://localhost/Tracker/Servicios/Visualizacion/_index.php/rest/productos/recomendados/";
        
       /* $p = array(
            'userId' => "1", 
            'itemId' => "1",
            "categoriaId" => "1"
        );*/
        
        $response = $client->post($apiUrl,array('body'=>json_encode($p)));
        $dataResponse = json_decode($response->getBody(true));
        return $dataResponse;
    }
}

$infoProducto = array("userId"=>"k834dr2uhl09m7cisqvgisd7n0","itemId"=>"62999","registros"=> 10);
$productos = ProductosRecomendadosTest::buscarRecomendados($infoProducto);
//print_r($result);


foreach ($productos as $producto) {
 echo "<div style='float:left;width:100px;height:300px;margin:10px;'><img src='{$producto->imagen}' style='widht:100px;height:100px;' /><div>{$producto->nombre}</div></div><br/>";    
}

?>