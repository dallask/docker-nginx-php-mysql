<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:06
 */

namespace Dallask\Patterns\Creational\FactoryMethod\Tests;

use Dallask\Patterns\Creational\FactoryMethod\FileLogger;
use Dallask\Patterns\Creational\FactoryMethod\FileLoggerFactory;
use Dallask\Patterns\Creational\FactoryMethod\StdoutLogger;
use Dallask\Patterns\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}