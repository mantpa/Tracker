<?php
namespace Tracker\Servicios\ServiciosRest;

class ComprasServicio {
    
    public static function initService($service) {
        $service->get("/compras/procesar/","\Tracker\Servicios\ServiciosRest\ComprasServicio","procesar");
    }
    
    public static function procesar($p) {
        return (object) array("datos"=>1);
    }
}
?>