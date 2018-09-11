<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 10:32
 */

namespace Dallask\Patterns\Behavioral\Command;

use PHPUnit\Framework\TestCase;

class RemoteControlTest extends TestCase
{

    public function testSubmit()
    {
        $bulb = new Bulb();

        $turnOn = new TurnOn($bulb);
        $turnOff = new TurnOff($bulb);

        $remote = new RemoteControl();

        $this->assertEquals('Bulb is turned on!', $remote->submit($turnOn));

        $this->assertEquals('Bulb is turned off!', $remote->submit($turnOff));
    }
}
