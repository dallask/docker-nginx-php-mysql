<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 10-Sep-18
 * Time: 11:19
 */

namespace Dallask\Patterns\Structural\Flyweight;

use PHPUnit\Framework\TestCase;

class TeaShopTest extends TestCase
{

    public function testServe()
    {
        $teaShop = new TeaShop(new TeaMaker());
        $teaShop->takeOrder('less sugar', 1);
        $teaShop->takeOrder('more milk', 2);
        $teaShop->takeOrder('without sugar', 5);

        $this->assertEquals("Serving tea to table# 1; Serving tea to table# 2; Serving tea to table# 5;", $teaShop->serve());
    }
}
