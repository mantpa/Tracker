<?php
namespace Tracker\Procesamiento\Negocios;
require_once __DIR__.'/../Repositorios/ProcesamientoVisitasRepository.php';

use Tracker\Servicios\Procesamiento\Repositorios\ProcesamientoVisitasRepository;

class Visitas {
    
    private $visitasRepository = null;
    
    public function __construct($p) {
        $this->visitasRepository = new ProcesamientoVisitasRepository($p);
    }
    
    public function procesar($p) {
        $this->visitasRepository->procesar($p);
    }
    
    public function procesarSimiltudProducto($usuario,$producto) {
        
    }
    /**
     * idCliente
     * numeroVisitas
     * @param unknown $p
     */
    public function procesarPendientes($p) {
        //buscar visitas pendientes
        $p->estado = 'pendiente';
        $visitasPendientes = $this->visitasRepository->buscarVisitas($p);
        
        foreach ($visitasPendientes as $visita) {
            $this->procesar($visita);
        }
        return $visitasPendientes;
    }
    
    
}
?>