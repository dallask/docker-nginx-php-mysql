<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 12:52
 */

namespace Dallask\Patterns\Creational\FactoryMethod;

interface Logger {
    public function log(string $message);
}