<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:55
 */

namespace Dallask\Patterns\Structural\Decorator\Tests;

use Dallask\Patterns\Structural\Decorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{

    public function testMakeSimpleCoffee()
    {
        $Coffee = new Decorator\SimpleCoffee();

        $this->assertEquals($Coffee->getPrice(), 10);
        $this->assertEquals(
            $Coffee->getTitle(), 'Simple Coffee'
        );
    }


    public function testMakeMilkCoffee()
    {
        $milkCoffee = new Decorator\MilkCoffee(new Decorator\SimpleCoffee());

        $this->assertEquals($milkCoffee->getPrice(), 15);
        $this->assertEquals(
            $milkCoffee->getTitle(), 'Simple Coffee, with milk'
        );
    }

    public function testMakeMilkDoubleSugarCoffee()
    {
        $milkDoubleSugarCoffee = new Decorator\DoubleSugar(
            new Decorator\MilkCoffee(new Decorator\SimpleCoffee())
        );

        $this->assertEquals($milkDoubleSugarCoffee->getPrice(), 22);
        $this->assertEquals(
            $milkDoubleSugarCoffee->getTitle(),
            'Simple Coffee, with milk, double sugar'
        );
    }
}