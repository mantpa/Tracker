<?php
namespace Tracker\Servicios\ServiciosRest;

class VisitasServicio {
    public static function initService($service) {
        $service->get("/visitas/procesar/",__CLASS__,"procesar");
    }
    
    public static function procesar($p) {
        return (object) array("datos"=>1);
    }
}
?>