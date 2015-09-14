<?php
require_once __DIR__.'/config.inc.php';
require_once __DIR__.'/../../Common/RestService.php';
require_once __DIR__.'/ServiciosRest/ComprasServicio.php';
require_once __DIR__.'/ServiciosRest/VisitasServicio.php';


$service = new \Tracker\Common\RestService();
$service->post("/visitas/procesar/","{$cfg["servicePath"]}\VisitasServicio","procesar");
$service->post("/visitas/procesar_pendientes/","{$cfg["servicePath"]}\VisitasServicio","procesarVisitasPendientes");
$service->runService();

?>