<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 11:26
 */

namespace Dallask\Patterns\Creational\AbstractFactory;

interface Parser
{
    public function parse(string $input) :array;
}