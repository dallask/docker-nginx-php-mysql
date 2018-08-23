<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 22-Aug-18
 * Time: 16:46
 */

namespace Dallask\Patterns\Creational\SimpleFactory;

use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    private $factory;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->factory = new SimpleFactory();
    }

    public function testGetFactoryA()
    {
        $this->assertInstanceOf('Dallask\Patterns\Creational\SimpleFactory\FactoryA', $this->factory->createObject("A"));
    }

    public function testGetFactoryB()
    {
        $this->assertInstanceOf('Dallask\Patterns\Creational\SimpleFactory\FactoryB', $this->factory->createObject("B"));
    }

    public function testGetFactoryDefault()
    {
        $this->assertInstanceOf('Dallask\Patterns\Creational\SimpleFactory\FactoryA', $this->factory->createObject());
    }
}