<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 06-Sep-18
 * Time: 15:13
 */

namespace Dallask\Patterns\Structural\Decorator;

/**
 * Interface CoffeeInterface
 *
 * @package Dallask\Patterns\Structural\Decorator
 */
interface CoffeeInterface
{

    /**
     * @return float
     */
    public function getPrice();

    /**
     * @return string
     */
    public function getTitle();
}