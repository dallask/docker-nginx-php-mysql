<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 08:11
 */

namespace Dallask\Patterns\Behavioral\Visitor;

/**
 * Interface AnimalOperation
 *
 * @package Dallask\Patterns\Behavioral\Visitor
 */
interface AnimalOperation
{

    public function visitMonkey(Monkey $monkey);

    public function visitLion(Lion $lion);

    public function visitDolphin(Dolphin $dolphin);
}
