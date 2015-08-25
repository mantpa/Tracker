<?php
require_once __DIR__.'/config.inc.php';
require_once __DIR__.'/../../Common/RestService.php';
require_once __DIR__.'/ServiciosRest/ComprasServicio.php';
require_once __DIR__.'/ServiciosRest/VisitasServicio.php';

$service = new \Tracker\Common\RestService();
Tracker\Servicios\ServiciosRest\ComprasServicio::initService($service);
Tracker\Servicios\ServiciosRest\VisitasServicio::initService($service);
$service->runService();
?>