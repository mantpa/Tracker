<?php
namespace Tracker\Common;

class RestService {
    
    public $app = null;
    
    public function __construct() {
        $this->app = new \Slim\Slim();
    }
    
    public function get($path,$funcion) {
        $this->app->get($path, $funcion);
    }
    
    public function post($path,$funcion) {
        $this->app->post($path, $funcion);
    }
    
    public function put($path,$funcion) {
        $this->app->put($path, $funcion);
    }
}
    
?>