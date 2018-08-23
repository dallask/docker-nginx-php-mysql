<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 22-Aug-18
 * Time: 15:51
 */

namespace Dallask\DesignPatterns;

class SimpleFactory
{
    public function createObject($factoryType = "A")
    {
        if ($factoryType == "A") {
            $factoryObject = new FactoryA();
        } else {
            $factoryObject = new FactoryB();
        }
        return $factoryObject;
    }
}