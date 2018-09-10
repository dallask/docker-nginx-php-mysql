<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 10-Sep-18
 * Time: 11:07
 */

namespace Dallask\Patterns\Structural\Flyweight;

/**
 * Class TeaMaker
 *
 * @package Dallask\Patterns\Structural\Flyweight
 */
class TeaMaker
{

    /**
     * @var array
     */
    private $availableTea = [];

    /**
     * @param string $type
     *
     * @return \Dallask\Patterns\Structural\Flyweight\Tea|mixed
     */
    public function make(string $type)
    {
        if (empty($this->availableTea[$type])) {
            return $this->availableTea[$type] = new Tea();
        }
        return $this->availableTea[$type];
    }
}