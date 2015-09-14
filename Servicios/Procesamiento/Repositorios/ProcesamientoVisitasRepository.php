<?php
namespace Tracker\Servicios\Procesamiento\Repositorios;

require_once __DIR__.'/../../../Common/PredictionAdapters/PredictionIOAdapter.php';
require_once __DIR__.'/../../../Common/GraphAdapters/OrientDBAdapter.php';


use Tracker\Common\PredictionAdapters\PredictionIOAdapter;
use Tracker\Common\GraphAdapters\OrientDBAdapter;

class ProcesamientoVisitasRepository {
    
    private $procesamientoAdapter = null;
    private $ingestionBDAdapter = null;
    
    public function __construct($p) {
        global $cfg;
        
        $this->ingestionBDAdapter = new OrientDBAdapter();
        
        if($cfg["predictionFw"] == "predictionio") {
            $this->procesamientoAdapter = new PredictionIOAdapter();
        }
    }
    
    public function procesar($p) {
        $this->procesamientoAdapter->procesarVisita($p);
    }
    /**
     * idCliente
     * estado
     * numeroVisitas
     * @param unknown $p
     * @return \Doctrine\OrientDB\Binding\mixed
     */
    public function buscarVisitas($p) {
        return $this->ingestionBDAdapter->buscarVisitas($p);
    }
}
?>