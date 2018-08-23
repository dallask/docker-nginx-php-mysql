<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 22-Aug-18
 * Time: 16:46
 */

namespace Dallask\DesignPatternsTest;

use Dallask\DesignPatterns;
use Dallask\DesignPatterns\SimpleFactory;
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
        $this->assertInstanceOf('Dallask\DesignPatterns\FactoryA', $this->factory->createObject("A"));
    }

    public function testGetFactoryB()
    {
        $this->assertInstanceOf('Dallask\DesignPatterns\FactoryB', $this->factory->createObject("B"));
    }

    public function testGetFactoryDefault()
    {
        $this->assertInstanceOf('Dallask\DesignPatterns\FactoryA', $this->factory->createObject());
    }
}