<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 16:55
 */

namespace Dallask\Patterns\Creational\Builder;

use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{

    public function testBuild()
    {
        $director = new Director(new HouseBuilder());
        $this->assertInstanceOf('Dallask\Patterns\Creational\Builder\HouseBuilder', $director->build());
    }
}
