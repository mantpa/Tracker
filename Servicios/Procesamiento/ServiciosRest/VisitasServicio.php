<?php
namespace Tracker\Servicios\Procesamiento\ServiciosRest;

require_once __DIR__.'/../Negocios/Visitas.php';
use Tracker\Procesamiento\Negocios\Visitas;


class VisitasServicio {
    
    public static function procesar($p) {
        $visita = new Visitas($p);
        $visita->procesar($p);
        return (object) array("resultado"=>"1","descripcion"=> "VISITA PROCESADA");
    }
}
?>