<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 06-Sep-18
 * Time: 15:16
 */

namespace Dallask\Patterns\Structural\Decorator;

/**
 * Class SimpleCoffee
 *
 * @package Dallask\Patterns\Structural\Decorator
 */
class SimpleCoffee implements CoffeeInterface
{

    /**
     * @return float|int
     */
    public function getPrice()
    {
        return 10;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return "Simple Coffee";
    }
}