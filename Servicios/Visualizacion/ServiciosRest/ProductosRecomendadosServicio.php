<?php
namespace Tracker\Servicios\Visualizacion\ServiciosRest;

require_once __DIR__.'/../Negocios/Productos.php';
use Tracker\Visualizacion\Negocios\Productos;

class ProductosRecomendadosServicio {
    
    public static function recomendarVisitas($p) {
        $recomendados = new Productos($p);
        return $recomendados->recomendarVisitas($p);
    }
}
?>