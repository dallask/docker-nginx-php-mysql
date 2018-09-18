<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 11:35
 */

namespace Dallask\Patterns\Creational\AbstractFactory;

class AbstractFactory
{
    public function createCSVParser() :CSVParser
    {
        return new CSVParser();
    }

    public function createJSONParser() :JSONParser
    {
        return new JSONParser();
    }
}