<?php
namespace Tracker\Visualizacion\Negocios;
require_once __DIR__.'/../Repositorios/RecomendadosRepository.php';
use Tracker\Servicios\Visualizacion\Repositorios\RecomendadosRepository;

class Productos {
    
    private $recomendadosRepository = null;
    public function __construct($p) {
        $this->recomendadosRepository = new RecomendadosRepository();
    }
    /**
     * userId
     * itemId
     * categoryId
     * @param unknown $p
     */
    public function recomendarVisitas($p) {
        $result = array();
        if(!empty($p->itemId)) {
           //busco la categoria del producto y realizo la busqueda de los recomendados por la categoria
           $rProducto = $this->recomendadosRepository->buscarProducto($p);
           $p->categoryId = $rProducto->codigo_categoria;
           
           $result = $this->recomendadosRepository->buscarRecomendadosVisitasPorCategoria($p);
        }
        
        return $result;
    }
}
?>