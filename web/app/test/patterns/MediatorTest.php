<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 12:46
 */

namespace Dallask\Patterns\Tests\Mediator\Tests;

use Dallask\Patterns\Behavioral\Mediator\Mediator;
use Dallask\Patterns\Behavioral\Mediator\Subsystem\Client;
use Dallask\Patterns\Behavioral\Mediator\Subsystem\Database;
use Dallask\Patterns\Behavioral\Mediator\Subsystem\Server;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{

    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator(new Database(), $client, new Server());

        $this->expectOutputString('Hello World');
        $client->request();
    }
}