<?php
namespace Tracker\Common;
use stdClass;
use ReflectionClass;

class RestService {
    
    public $app = null;
    public $baseApiUrl = "/rest";
    
    public function __construct() {
        $this->app = new \Slim\Slim();
    }
    
    public function runService() {
        $this->app->run();
    }
    
    public function get($url,$className,$methodName) {
        $url = $this->baseApiUrl.$url;
        $this->map($this->app,$url,$className,$methodName,"GET");
    }
    
    public function post($url,$className,$methodName) {
        $url = $this->baseApiUrl.$url;
        $this->map($this->app,$url,$className,$methodName,"POST");
    }
    
    public function put($url,$className,$methodName) {
        $url = $this->baseApiUrl.$url;
        $this->map($this->app,$url,$className,$methodName,"PUT");
    }
    /**
     * Codigo tomado donde itx
     * @param unknown $app
     * @param unknown $url
     * @param unknown $className
     * @param unknown $methodName
     * @param unknown $httpMethod
     */
    
    public function map(&$app,$url,$className,$methodName,$httpMethod) {
        $app->map($url,function() use ($app,$url,$className,$methodName) {
           
            $app->config(array("debug"=>false));
            $app->error(function(\Exception $e) use ($app) {
                echo json_encode([
                    "error"=>[
                    "code"=>$e->getCode(),
                    "message"=>$e->getMessage(),
                    "file"=>$e->getFile(),
                    "line"=>$e->getLine()
                    ]
                ]);
            });
        
        
            $p=file_get_contents("php://input");
            $p=json_decode($p,false);
            $p=$this->object_merge($p, $this->paramsFromUrl($url,func_get_args()) );
        
            $obj=new $className();
            $res = $obj->{$methodName}($p);
            echo json_encode($res);
            exit;
        
        })->via($httpMethod);
    }
    
    public function paramsFromUrl($url,$args){
        $res=new \stdClass();
    
        $i=0;
        $tmp=explode("/",$url);
    
        $m=null;
        $pattern="/:[a-zA-Z0-9_]+/";
        preg_match_all($pattern,$url,$m);
    
        $tmp=$m[0];
        //print_r($tmp);exit;
    
        foreach($tmp as $v){
            if( empty($v) ) continue;
            	
            if( $v[0]==":" ){
                $v=substr($v,1);
                $res->{$v}=$args[$i];
                $i++;
            }
        }
    
    
        return $res;
    }
    
    function object_merge($obj1,$obj2){
        return (object) array_merge((array) $obj1, (array) $obj2);
    }
}
    
?>