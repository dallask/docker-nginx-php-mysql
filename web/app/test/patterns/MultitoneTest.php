<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 27-Aug-18
 * Time: 13:36
 */

namespace Dallask\Patterns\Creational\Multitone;

use PHPUnit\Framework\TestCase;

class MultitoneTest extends TestCase
{

    public function testGetInstance()
    {
        $firstCall = Multitone::getInstance("FirstItem");
        $secondCall = Multitone::getInstance("SecondItem");

        $this->assertInstanceOf(Multitone::class, $firstCall);
        $this->assertNotSame($firstCall, $secondCall);
    }
}
