<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:55
 */

namespace Dallask\Patterns\Structural\FluentInterface\Tests;

use Dallask\Patterns\Structural\FluentInterface;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{

    public function testBuildSQL()
    {
        $query = (new FluentInterface\Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        $this->assertEquals(
            'SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string)$query
        );
    }

    public function testUser()
    {
        $user = (new FluentInterface\User())
            ->setName('Johnatan')
            ->setLogin('jhon')
            ->setPassword('12345');

        $this->assertEquals(
            'Johnatan jhon 12345', $user->getUser()
        );
    }
}
