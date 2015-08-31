<?php
namespace Tracker\Servicios\Visualizacion\Repositorios;
use Tracker\Common\PredictionAdapters\PredictionIOAdapter;
use Tracker\Common\PredictionAdapters\ProductBDAdapter;

require_once __DIR__.'/../../../Common/PredictionAdapters/PredictionIOAdapter.php';
require_once __DIR__.'/../../../Common/PredictionAdapters/ProductBDAdapter.php';

class RecomendadosRepository {
    private $procesamientoAdapter = null;
    private $bdProductosAdapter = null;
    
    public function __construct() {
        global $cfg;
        
        $this->bdProductosAdapter = new ProductBDAdapter();
        
        if($cfg["predictionFw"] == "predictionio") {
            $this->procesamientoAdapter = new PredictionIOAdapter();
        }
    }
    
    public function buscarRecomendadosVisitasPorCategoria($p) {
        $itemsScores = $this->procesamientoAdapter->buscarRecomendadosVisitasPorCategoria($p);
        $itemsScores = $itemsScores["itemScores"];
        
        $items = array();
        foreach ($itemsScores as $rItem){
            $item = $this->bdProductosAdapter->buscarProducto((object)array("codigo_producto"=>$rItem["item"]));
            if(!empty($item)){
                $items[]=$item;
            }
        }
        return $items;
    }
    
    public function buscarProducto($p) {
        return (object)$this->bdProductosAdapter->buscarProducto((object)array("codigo_producto"=>$p->itemId));
    }
    
}
?>