<?php
require_once __DIR__.'/config.inc.php';
require_once __DIR__.'/../../Common/RestService.php';
require_once __DIR__.'/ServiciosRest/ProductosRecomendadosServicio.php';


$service = new \Tracker\Common\RestService();
$service->post("/productos/recomendados/","{$cfg["servicePath"]}\ProductosRecomendadosServicio","recomendarVisitas");
$service->post("/productos/recomendados_plantillas/","{$cfg["servicePath"]}\ProductosRecomendadosServicio","recomendarProductosEnPlantilla");
$service->runService();

?>