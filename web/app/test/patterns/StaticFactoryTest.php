<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 14:27
 */

namespace Dallask\Patterns\Creational\StaticFactory;

use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{

    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            'Dallask\Patterns\Creational\StaticFactory\FormatNumber',
            StaticFactory::build('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            'Dallask\Patterns\Creational\StaticFactory\FormatString',
            StaticFactory::build('string')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::build('object');
    }
}
