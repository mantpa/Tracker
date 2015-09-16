<?php
namespace Tracker\Visualizacion\Negocios;
require_once __DIR__.'/../Repositorios/RecomendadosRepository.php';
require_once __DIR__.'/../Repositorios/PlantillasRepository.php';
use Tracker\Servicios\Visualizacion\Repositorios\RecomendadosRepository;
use Tracker\Servicios\Visualizacion\Repositorios\PlantillasRepository;

class Productos {
    private $recomendadosRepository = null;
    private $plantillaRepository = null;
    
    public function __construct() {
        $this->recomendadosRepository = new RecomendadosRepository();
        $this->plantillaRepository = new PlantillasRepository();
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
    
    
    public function recomendarProductosEnPlantilla($p) {
        $result = array();
        $productos = $this->recomendarVisitas($p);
        $plantillas = $this->plantillaRepository->buscarPlantillas($p);
        
        if(empty($plantillas)) {
            return array();
        }
        
        $plantilla = $plantillas[0][0];
        $loader = new \Twig_Loader_Array(array(
            'render' => $plantilla
        ));
        
        $twig = new \Twig_Environment($loader);
        
        foreach ($productos as $producto) {
            $aPr = array();
            $aPr["codigo_producto"] = $producto->codigo_producto;
            $aPr["nombre"] = $producto->nombre;
            $aPr["imagen"] = $producto->imagen;
            $prRender = $twig->render('render', $aPr);
            $result[] = $prRender;
        }
        return $result;
    }
}
?>