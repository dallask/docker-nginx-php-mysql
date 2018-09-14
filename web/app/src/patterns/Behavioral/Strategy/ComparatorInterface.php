<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 07:48
 */

namespace Dallask\Patterns\Behavioral\Strategy;

/**
 * Interface ComparatorInterface
 *
 * @package Dallask\Patterns\Behavioral\Strategy
 */
interface ComparatorInterface
{

    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     */
    public function compare($a, $b): int;
}