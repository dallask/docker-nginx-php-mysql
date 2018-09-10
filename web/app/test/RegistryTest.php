<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 10-Sep-18
 * Time: 12:24
 */

namespace Dallask\Patterns\Structural\Registry;

use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{

    public function testSet()
    {
        Registry::set('name', 'Peter');
        $this->assertEquals('Peter', Registry::get('name'));

        $this->expectExceptionMessage('Invalid key given');
        Registry::set('name', 'Dilan');
    }

    public function testGet()
    {
        Registry::set('name', 'Peter');
        Registry::get('name');
        $this->assertEquals('Peter', Registry::get('name'));

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid key given');
        Registry::get('test');
    }
}
