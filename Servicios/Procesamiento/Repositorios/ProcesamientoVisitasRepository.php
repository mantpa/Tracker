<?php
namespace Tracker\Servicios\Procesamiento\Repositorios;
use Tracker\Common\PredictionAdapters\PredictionIOAdapter;

require_once __DIR__.'/../../../Common/PredictionAdapters/PredictionIOAdapter.php';

class ProcesamientoVisitasRepository {
    
    private $procesamientoAdapter = null;
    
    public function __construct($p) {
        global $cfg;
        
        if($cfg["predictionFw"] == "predictionio") {
            $this->procesamientoAdapter = new PredictionIOAdapter();
        }
    }
    
    public function procesar($p) {
        $this->procesamientoAdapter->procesarVisita($p);
    }
}
?>