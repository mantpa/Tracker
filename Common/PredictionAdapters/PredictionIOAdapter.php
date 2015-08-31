<?php
namespace Tracker\Common\PredictionAdapters;

use predictionio\EventClient;
use predictionio\EngineClient;

class PredictionIOAdapter {
    private $accesKey = null;
    private $url=null;
    private $eventClient=null;
    
    function __construct() {
        global $cfg;
        $this->accesKey = $cfg["accessKey"];
        $this->eventServerUrl = $cfg["predictionUrl"].":7070";
        $this->eventClient = new EventClient($this->accesKey,$this->eventServerUrl);
        $this->recomendationServerUrl = $cfg["predictionUrl"].":8000";
        $this->engineClient = new EngineClient($this->recomendationServerUrl,0,20);
    }
    
    public function procesarVisita($p) {
                
        // Create a new user
        $this->eventClient->createEvent(array(
          'event' => '$set',
          'entityType' => 'user',
          'entityId' => $p->userId
        ));
        
        // Create a new item or set existing item's categories
        $this->eventClient->createEvent(array(
            'event' => '$set',
            'entityType' => 'item',
            'entityId' => $p->itemId,
            'properties' => array('categories' => array($p->categoriaId))
        ));
        
        // A user views an item
        $this->eventClient->createEvent(array(
            'event' => 'view',
            'entityType' => 'user',
            'entityId' => $p->userId,
            'targetEntityType' => 'item',
            'targetEntityId' => $p->itemId
        ));
    }
    /**
     * userId
     * productId
     * categoryId
     * registros
     * @param unknown $p
     */
    public function buscarRecomendadosVisitasPorCategoria($p) {
        $params = array(
            "user" => $p->userId,
            "num" => $p->registros,
            "categories" => array(
                $p->categoryId
            )
        );
        $res = $this->engineClient->sendQuery($params);
        
        return $res;
    }
}
?>