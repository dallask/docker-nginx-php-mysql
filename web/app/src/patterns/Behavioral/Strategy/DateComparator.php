<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 07:49
 */

namespace Dallask\Patterns\Behavioral\Strategy;

/**
 * Class DateComparator
 *
 * @package Dallask\Patterns\Behavioral\Strategy
 */
class DateComparator implements ComparatorInterface
{

    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     */
    public function compare($a, $b): int
    {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}