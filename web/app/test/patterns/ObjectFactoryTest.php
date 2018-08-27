<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 27-Aug-18
 * Time: 14:39
 */

namespace Dallask\Patterns\Creational\ObjectPool;

use PHPUnit\Framework\TestCase;

class ObjectFactoryTest extends TestCase
{

    public function testPushProduct()
    {
        ObjectFactory::pushProduct(new Product('first'));
        ObjectFactory::pushProduct(new Product('second'));

        $this->assertEquals('first', ObjectFactory::getProduct('first')->getId());
        $this->assertEquals('second', ObjectFactory::getProduct('second')->getId());
    }

}
