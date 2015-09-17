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
        $sql = "select \$productos.codigo_producto[0] as itemId,\$productos.nombre[0] as nombre,\$productos.codigo_categoria[0] as categoriaId, \$productos.imagen[0] as imagen,\$usuarios.sesion[0] as userId from Visitas let \$productos = (SELECT EXPAND(in) FROM \$current), \$usuarios = (SELECT EXPAND(out) FROM \$current) WHERE estado = '{$p->estado}' and out.sesion = 'k834dr2uhl09m7cisqvgisd7m20' and out.cliente = {$p->idCliente} limit {$p->numeroVisitas}";
        $output = $this->binding->query($sql);
        return $output->getResult();
    }
}
?>