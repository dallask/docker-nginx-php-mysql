<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 06-Sep-18
 * Time: 15:19
 */

namespace Dallask\Patterns\Structural\Decorator;

/**
 * Class MilkCoffee
 *
 * @package Dallask\Patterns\Structural\Decorator
 */
class MilkCoffee implements CoffeeInterface
{

    /**
     * @var \Dallask\Patterns\Structural\Decorator\CoffeeInterface
     */
    private $coffee;

    /**
     * @var int
     */
    private static $milkPrice = 5;

    /**
     * @var string
     */
    private static $milkTitle = ', with milk';



    /**
     * @return mixed
     */
    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * @return float|int
     */
    public function getPrice()
    {
        return $this->coffee->getPrice() + self::$milkPrice;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->coffee->getTitle() . self::$milkTitle;
    }
}