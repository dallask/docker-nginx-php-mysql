<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 08:15
 */

namespace Dallask\Patterns\Behavioral\Visitor;

/**
 * Class Dolphin
 *
 * @package Dallask\Patterns\Behavioral\Visitor
 */
class Dolphin implements Animal
{

    public function speak()
    {
        echo 'Tuut tuttu tuutt!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }
}
