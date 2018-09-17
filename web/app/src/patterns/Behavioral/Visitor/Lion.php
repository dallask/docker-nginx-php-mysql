<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 08:14
 */

namespace Dallask\Patterns\Behavioral\Visitor;

/**
 * Class Lion
 *
 * @package Dallask\Patterns\Behavioral\Visitor
 */
class Lion implements Animal
{

    public function roar()
    {
        echo 'Roaaar!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}
