<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 06-Sep-18
 * Time: 15:27
 */

namespace Dallask\Patterns\Structural\Decorator;

/**
 * Class DoubleSugar
 *
 * @package Dallask\Patterns\Structural\Decorator
 */
class DoubleSugar implements CoffeeInterface
{

    /**
     * @var \Dallask\Patterns\Structural\Decorator\CoffeeInterface
     */
    private $coffee;

    /**
     * @var int
     */
    private static $extraPrice = 7;

    /**
     * @var string
     */
    private static $extraTitle = ', double sugar';

    /**
     * DoubleSugar constructor.
     *
     * @param \Dallask\Patterns\Structural\Decorator\CoffeeInterface $coffee
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
        return $this->coffee->getPrice() + self::$extraPrice;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->coffee->getTitle() . self::$extraTitle;
    }
}