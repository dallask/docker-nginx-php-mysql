<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 13-Sep-18
 * Time: 11:48
 */

namespace Dallask\Patterns\Behavioral\State;

/**
 * Class UpperWrite
 *
 * @package Dallask\Patterns\Behavioral\State
 */
class UpperWrite implements WritingState
{

    /**
     * @param string $string
     *
     * @return string
     */
    public function write(string $string)
    {
        echo strtoupper($string);
    }
}