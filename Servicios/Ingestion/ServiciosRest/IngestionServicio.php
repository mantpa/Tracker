<?php
namespace Tracker\Servicios\Ingestion\ServiciosRest;

use Tracker\Ingestion\Negocios\Visitas;

class IngestionServicio {
    /**
     * idCliente
     * @param unknown $p
     */
    public static function obtenerVisitasSinProcesar($p) {
        $visitas = new Visitas();
        return $visitas->obtenerVisitasSinProcesar($p);
    }
    /***
     * idVisita
     * estado
     */
    public static function actualizarEstadoVisita($p) {
    
    }
}

?>