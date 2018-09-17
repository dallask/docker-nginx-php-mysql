<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 08:16
 */

namespace Dallask\Patterns\Behavioral\Visitor;

/**
 * Class Speak
 *
 * @package Dallask\Patterns\Behavioral\Visitor
 */
class Speak implements AnimalOperation
{

    /**
     * @param \Dallask\Patterns\Behavioral\Visitor\Monkey $monkey
     */
    public function visitMonkey(Monkey $monkey)
    {
        $monkey->shout();
    }

    /**
     * @param \Dallask\Patterns\Behavioral\Visitor\Lion $lion
     */
    public function visitLion(Lion $lion)
    {
        $lion->roar();
    }

    /**
     * @param \Dallask\Patterns\Behavioral\Visitor\Dolphin $dolphin
     */
    public function visitDolphin(Dolphin $dolphin)
    {
        $dolphin->speak();
    }
}
