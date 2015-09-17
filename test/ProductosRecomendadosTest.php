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
    
    public static function buscarRecomendadosEnPlantilla($p) {
        $client = new \GuzzleHttp\Client();
        $apiUrl = "http://localhost/Tracker/Servicios/Visualizacion/_index.php/rest/productos/recomendados_plantillas/";
    
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

$userId = $_GET["userId"];
$itemId = $_GET["itemId"];

//$infoProducto = array("userId"=>"k834dr2uhl09m7cisqvgisd7n0","itemId"=>"62999","registros"=> 10);
//$infoProducto = array("userId"=>"k834dr2uhl09m7cisqvgisd7m513","itemId"=>"62999","registros"=> 10);
//$infoProducto = array("userId"=>"k834dr2uhl09m7cisqvgisd7m59","itemId"=>"101706","registros"=> 10);
//$infoProducto = array("userId"=>"k834dr2uhl09m7cisqvgisd7m16","itemId"=>"70168","registros"=> 20, "codigo_cliente" => "1","plantilla"=>"0");
//k834dr2uhl09m7cisqvgisd7m20 => 63630
$infoProducto = array("userId"=>$userId,"itemId"=>$itemId,"registros"=> 20, "codigo_cliente" => "1","plantilla"=>"0");
$infoProducto2 = array("userId"=>$userId,"itemId"=>$itemId,"registros"=> 20, "codigo_cliente" => "1","plantilla"=>"1");


$productos = ProductosRecomendadosTest::buscarRecomendadosEnPlantilla($infoProducto);
$productos2 = ProductosRecomendadosTest::buscarRecomendadosEnPlantilla($infoProducto2);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" lang="es_co" >
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        
        <style>
            body {
                font-family: Arial;
                font-size: 12px;
            }
            div {
                border: 0 none;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            .row {
                width:100%;
            }
            
            
            .row2 {
                width:100%;
            }
            
            .cell2 {
                float:left;
                margin-right:3px;
                width: 100%;
            }
            
            .cell {
                float:left;
                margin-right:3px;
                width: 300px;
            }
            
            .cell .nombre a{
                color: #2681c0;
                display: block;
                font-size: 16px;
                font-weight: bold;
                margin-bottom:10px;
            }
            
            .cell2 .nombre a{
                color: red;
                display: block;
                font-size: 16px;
                font-weight: bold;
                margin-bottom:10px;
            }
            
            .cell .thumb {
                background-color: white;
                border: 1px solid #c8c8c8;
                height: 145px;
                margin-bottom: 10px;
                position: relative;
                width: 225px;
            }
            
            .cell2 .thumb {
                background-color: white;
                border: 2px solid #00549f;
                height: 145px;
                margin-bottom: 10px;
                position: relative;
                width: 225px;
            }
            .title-canasta {
                border-bottom: 2px solid #2681c0;
                color: #2681c0;
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 20px;
                margin-left: 10px;
                margin-right: 5px;
                padding-left: 10px;
            }
            
            .contenedor {
               background-color: white;
                border: 0 solid black;
                box-sizing: border-box;
                margin: 0 auto;
                padding: 5px;
                position: relative;
                width: 990px;
                z-index: 1000;
                height:1200px;
            }
        </style>
    </head>
    <body>
        <div class="contenedor">
            <h2 class="title-canasta">Recomendados Plantilla1 del usuario <?php echo $userId; ?> </h2>
            <div class="row">
                <?php
                    foreach ($productos as $producto) {
                        echo $producto;
                    }
                ?>
            </div>
            <br/><br/>
            <div style="clear:both;"></div>
            <h2 class="title-canasta">Recomendados Plantilla2</h2>
            <div class="row2">
                <?php
                    foreach ($productos2 as $producto2) {
                        echo $producto2;
                    }
                ?>
            </div>
            <br/><br/><br/><br/>
            <div style="clear:both;"></div>
            <h2 class="title-canasta">Catalogo general de la tienda</h2>
            <div class="row">
                <div class="cell">
                    <div class="nombre">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            Bicicleta recumbent 804 D
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            <img src="http://rs3.coordiutil.com/shared/dbfile.php?id=62917&w=220&h=140&frm=1&q=75" />
                        </a>
                    </div>
                    <div class="categoria"></div>
                </div>
                 <div class="cell">
                    <div class="nombre">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            Ejercitador abdominal  AB Power ...
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            <img src="http://rs2.coordiutil.com/shared/dbfile.php?id=101326&w=220&h=140&frm=1&q=75" />
                        </a>
                    </div>
                    <div class="categoria"></div>
                </div>
                 <div class="cell">
                    <div class="nombre">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            Colchón Plus 120 x 190
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            <img src="http://rs4.coordiutil.com/shared/dbfile.php?id=579615&w=220&h=140&frm=1&q=75" />
                        </a>
                    </div>
                    <div class="categoria"></div>
                </div>
                 <div class="cell">
                    <div class="nombre">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            Portátil Lenovo Y40
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            <img src="http://rs2.coordiutil.com/shared/dbfile.php?id=317598&w=220&h=140&frm=1&q=75" />
                        </a>
                    </div>
                    <div class="categoria"></div>
                </div>
                <div class="cell">
                    <div class="nombre">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            Bicicleta recumbent 804 D
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            <img src="http://rs3.coordiutil.com/shared/dbfile.php?id=62917&w=220&h=140&frm=1&q=75" />
                        </a>
                    </div>
                    <div class="categoria"></div>
                </div>
                 <div class="cell">
                    <div class="nombre">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            Ejercitador abdominal  AB Power ...
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            <img src="http://rs2.coordiutil.com/shared/dbfile.php?id=101326&w=220&h=140&frm=1&q=75" />
                        </a>
                    </div>
                    <div class="categoria"></div>
                </div>
                 <div class="cell">
                    <div class="nombre">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            Colchón Plus 120 x 190
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            <img src="http://rs4.coordiutil.com/shared/dbfile.php?id=579615&w=220&h=140&frm=1&q=75" />
                        </a>
                    </div>
                    <div class="categoria"></div>
                </div>
                 <div class="cell">
                    <div class="nombre">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            Portátil Lenovo Y40
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="http://www.coordiutil.com/item-pr-30192">
                            <img src="http://rs2.coordiutil.com/shared/dbfile.php?id=317598&w=220&h=140&frm=1&q=75" />
                        </a>
                    </div>
                    <div class="categoria"></div>
                </div>
            </div>
        </div>
    </body>
</html>