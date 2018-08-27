<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 27-Aug-18
 * Time: 14:38
 */

namespace Dallask\Patterns\Creational\ObjectPool;

class Product
{

    /**
     * @var integer|string
     */
    protected $id;


    public function __construct($id) {
        $this->id = $id;
    }

    /**
     * @return integer|string
     */
    public function getId()
    {
        return $this->id;
    }
}