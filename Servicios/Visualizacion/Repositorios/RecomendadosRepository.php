<?php
namespace Tracker\Servicios\Visualizacion\Repositorios;
use Tracker\Common\PredictionAdapters\PredictionIOAdapter;
use Tracker\Common\PredictionAdapters\ProductBDAdapter;
use Tracker\Common\GraphAdapters\OrientDBAdapter;

require_once __DIR__.'/../../../Common/PredictionAdapters/PredictionIOAdapter.php';
require_once __DIR__.'/../../../Common/PredictionAdapters/ProductBDAdapter.php';
require_once __DIR__.'/../../../Common/GraphAdapters/OrientDBAdapter.php';

class RecomendadosRepository {
    private $procesamientoAdapter = null;
    private $bdProductosAdapter = null;
    
    public function __construct() {
        global $cfg;
        
        $this->bdProductosAdapter = new OrientDBAdapter();
        
        if($cfg["predictionFw"] == "predictionio") {
            $this->procesamientoAdapter = new PredictionIOAdapter();
        }
    }
    
    public function buscarRecomendadosVisitasPorCategoria($p) {
        $itemsScores = $this->procesamientoAdapter->buscarRecomendadosVisitasPorCategoria($p);
        $itemsScores = $itemsScores["itemScores"];
        
        $items = array();
        foreach ($itemsScores as $rItem){
            $item = $this->buscarProducto((object)array("itemId"=>$rItem["item"]));
            if(!empty($item)){
                $items[]=$item;
            }
        }
        return $items;
    }
    
    public function buscarProducto($p) {
        $productos = $this->bdProductosAdapter->buscarProducto((object)array("codigo_producto"=>$p->itemId));
        if(!empty($productos) && count($productos) > 0) {
            return $productos[0];
        }
        return null;
    }
}
?>