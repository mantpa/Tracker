<?php
namespace Tracker\Servicios\Visualizacion\Repositorios;

use Tracker\Common\GraphAdapters\OrientDBAdapter;


require_once __DIR__.'/../../../Common/GraphAdapters/OrientDBAdapter.php';

class PlantillasRepository {
    private $bdProductosAdapter = null;
    
    public function __construct() {
        global $cfg;
        
        $this->bdProductosAdapter = new OrientDBAdapter();
    }
    
    public function buscarPlantilla($p) {
        
    }
    
    public function buscarPlantillas($p) {
       return (object)$this->bdProductosAdapter->buscarPlantillas((object)array("codigo_cliente"=>$p->clienteId));
    }
}
?>