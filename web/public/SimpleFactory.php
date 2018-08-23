<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 22-Aug-18
 * Time: 16:36
 */

include '../app/vendor/autoload.php';

use Dallask\DesignPatterns\SimpleFactory;

$factory = new SimpleFactory();
$factory->createObject();
$factory->createObject("A");
$factory->createObject("B");
