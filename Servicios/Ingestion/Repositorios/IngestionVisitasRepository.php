<?php
namespace Tracker\Servicios\Ingestion\Repositorios;

use Tracker\Common\GraphAdapters\OrientDBAdapter;

class IngestionVisitasRepository {
    
    private $ingestionBDAdapter = null;
    
    public function __construct() {
        $this->ingestionBDAdapter = new OrientDBAdapter();
    }
    
    public function buscarVisitas($p) {
        return $this->ingestionBDAdapter->buscarVisitas($p);
    }
}
?>