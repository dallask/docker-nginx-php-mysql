<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 13-Sep-18
 * Time: 11:47
 */

namespace Dallask\Patterns\Behavioral\State;

/**
 * Interface WritingState
 *
 * @package Dallask\Patterns\Behavioral\State
 */
interface WritingState
{

    /**
     * @param string $string
     *
     * @return mixed
     */
    public function write(string $string);
}