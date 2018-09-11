<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 10:23
 */

namespace Dallask\Patterns\Behavioral\Command;

/**
 * Class Bulb
 *
 * @package Dallask\Patterns\Behavioral\Command
 */
class Bulb
{

    /**
     * @return string
     */
    public function turnOn()
    {
        return "Bulb is turned on!";
    }

    /**
     * @return string
     */
    public function turnOff()
    {
        return "Bulb is turned off!";
    }
}