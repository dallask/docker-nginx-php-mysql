<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 08:17
 */

namespace Dallask\Patterns\Behavioral\Visitor;

use PHPUnit\Framework\TestCase;

class SpeakTest extends TestCase
{

    public function testVisitDolphin()
    {
        $dolphin = new Dolphin();

        $speak = new Speak();

        $dolphin->accept($speak);

        $this->expectOutputString('Tuut tuttu tuutt!');
    }

    public function testVisitMonkey()
    {
        $monkey = new Monkey();

        $speak = new Speak();

        $monkey->accept($speak);

        $this->expectOutputString('Ooh oo aa aa!');
    }

    public function testVisitLion()
    {
        $lion = new Lion();

        $speak = new Speak();

        $lion->accept($speak);

        $this->expectOutputString('Roaaar!');
    }
}
