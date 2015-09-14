<?php
namespace Tracker\Ingestion\Negocios;

use Tracker\Servicios\Ingestion\Repositorios\IngestionVisitasRepository;
class Visitas {
    private $visitasRepository = null;
    
    public function __construct() {
        $this->visitasRepository = new IngestionVisitasRepository();
    }
    
    public function obtenerVisitasSinProcesar($p) {
        $p->estado = "pendiente";
        return $this->visitasRepository->buscarVisitas($p);
    }   
}
?>