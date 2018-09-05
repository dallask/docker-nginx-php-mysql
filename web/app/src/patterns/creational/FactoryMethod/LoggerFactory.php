<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 12:58
 */

namespace Dallask\Patterns\Creational\FactoryMethod;

interface LoggerFactory
{
    public function createLogger() : Logger;
}