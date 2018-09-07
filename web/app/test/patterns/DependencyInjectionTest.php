<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:55
 */

namespace Dallask\Patterns\Structural\DependencyInjection\Tests;

use Dallask\Patterns\Structural\DependencyInjection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{

    public function testDependencyInjection()
    {
        $config = new DependencyInjection\DatabaseConnectionConfig('localhost', '3300', 'username', '12345');
        $connection = new DependencyInjection\DatabaseConnection($config);

        $this->assertEquals('username:12345@localhost:3300', $connection->getDsn());
    }
}