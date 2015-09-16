<?php
namespace Tracker\Servicios\Visualizacion\Repositorios;
require_once __DIR__.'/../../../Common/GraphAdapters/OrientDBAdapter.php';
use Tracker\Common\GraphAdapters\OrientDBAdapter;


class PlantillasRepository {
    private $bdProductosAdapter = null;
    
    public function __construct() {
        
        $this->bdProductosAdapter = new OrientDBAdapter();
    }
    
    public function buscarPlantilla($p) {
        
    }
    
    public function buscarPlantillas($p) {
       $clientes = $this->bdProductosAdapter->buscarPlantillas((object)array("codigo_cliente"=>$p->codigo_cliente));
       $plantillas = array();
       
       if(!empty($clientes)) {
           $plantillas[]  = array_merge($clientes[0]->plantillas,$plantillas);
       }
       
       return $plantillas;
    }
}
?>