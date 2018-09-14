<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 07:50
 */

namespace Dallask\Patterns\Behavioral\Strategy;

/**
 * Class IdComparator
 *
 * @package Dallask\Patterns\Behavioral\Strategy
 */
class IdComparator implements ComparatorInterface
{

    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     */
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}