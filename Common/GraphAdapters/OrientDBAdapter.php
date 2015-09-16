<?php
namespace Tracker\Common\GraphAdapters;

use Doctrine\OrientDB\Query\Query;
use Doctrine\OrientDB\Binding\HttpBinding;
use Doctrine\OrientDB\Binding\BindingParameters;
use Doctrine\ODM\OrientDB as ODM;

class OrientDBAdapter {
    private $query = null;
    private $manager = null;
    private $binding = null;
    
    function __construct() {
        $this->query = new Query();
        $parameters = BindingParameters::create('http://root:84102204564@199.223.233.241:2480/tracker');
        $this->binding = new HttpBinding($parameters);
        $configuration = new ODM\Configuration(array(
            'document_dirs' => array(__DIR__.'/' => 'Entidades'),
            'proxy_dir' => __DIR__ . '/proxies'
        ));
        $this->manager = new ODM\Manager($this->binding, $configuration);
    }
    
    public function buscarProducto($p) {
        $sql = "select * from Productos where codigo_producto = {$p->codigo_producto}";
        $output = $this->binding->query($sql);
        return $output->getResult();
    }
    
    public function buscarPlantillas($p) {
        $sql = "select plantillas from Clientes where codigo_cliente = {$p->codigo_cliente}";
        $output = $this->binding->query($sql);
        return $output->getResult();
    }
    
    /**
     * idCliente
     * estado
     * numeroVisitas
     * @param unknown $p
     * @return \Doctrine\OrientDB\Binding\mixed
     */
    public function buscarVisitas($p) {
        $sql = "select \$visitas.sesion[0] as userId ,codigo_producto as itemId,nombre,codigo_categoria as categoriaId,imagen from Productos WHERE cliente = {$p->idCliente} and any() TRAVERSE (estado = '{$p->estado}')  let \$visitas = ( select * from (traverse in('Visitas') from \$parent.\$current ) where \$depth >=1 )  limit {$p->numeroVisitas}";
        $output = $this->binding->query($sql);
        return $output->getResult();
    }
}
?>