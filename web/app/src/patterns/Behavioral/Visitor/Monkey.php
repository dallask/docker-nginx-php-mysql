<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 08:13
 */

namespace Dallask\Patterns\Behavioral\Visitor;

/**
 * Class Monkey
 *
 * @package Dallask\Patterns\Behavioral\Visitor
 */
class Monkey implements Animal
{

    public function shout()
    {
        echo 'Ooh oo aa aa!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }
}
