<?php
namespace Tracker\Visualizacion\Negocios;
require_once __DIR__.'/../Repositorios/PlantillasRepository.php';
use Tracker\Servicios\Visualizacion\Repositorios\PlantillasRepository;

class Plantillas {
    
    private $plantillasRepository = null;
    public function __construct($p) {
        $this->plantillasRepository = new PlantillasRepository();
    }
    /**
     * clienteId
     * @param unknown $p
     * @return StdClass
     */
    public function buscarPlantillas($p) {
        return $this->plantillasRepository->buscarPlantillas($p);
    }
}
?>