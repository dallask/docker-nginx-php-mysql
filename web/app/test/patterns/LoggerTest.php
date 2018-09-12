<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 13:17
 */

namespace Dallask\Patterns\Behavioral\NullObject\Tests;

use Dallask\Patterns\Behavioral\NullObject\NullLogger;
use Dallask\Patterns\Behavioral\NullObject\StdLogger;
use Dallask\Patterns\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{

    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new StdLogger());
        $this->expectOutputString(
            'We are in Dallask\Patterns\Behavioral\NullObject\Service::doSomething'
        );
        $service->doSomething();
    }
}