<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 27-Aug-18
 * Time: 14:13
 */

namespace Dallask\Patterns\Creational\Prototype;

class BarBook extends BookPrototype
{
    protected $category = 'Bar';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}