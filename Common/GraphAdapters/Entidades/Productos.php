<?php

/*
 * This file is part of the Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Domain;

use Doctrine\ODM\OrientDB\Mapper\Annotations as ODM;

/**
* @ODM\Document(class="Productos")
*/
class Productos
{
    /**
     * @ODM\Property(type="integer")
     */
    public $codigo_producto;
    
    /**
     * @ODM\Property(type="integer")
     */
    public $codigo_categoria;
    
    /**
     * @ODM\Property(type="string")
     */
    public $imagen;
    
    /**
     * @ODM\Property(type="string")
     */
    public $nombre;
}
