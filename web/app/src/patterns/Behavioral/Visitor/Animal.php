<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 08:10
 */

namespace Dallask\Patterns\Behavioral\Visitor;

/**
 * Interface Animal
 *
 * @package Dallask\Patterns\Behavioral\Visitor
 */
interface Animal
{

    public function accept(AnimalOperation $operation);
}
