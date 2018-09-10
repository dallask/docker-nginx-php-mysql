<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 10-Sep-18
 * Time: 11:54
 */

namespace Dallask\Patterns\Structural\Proxy;

/**
 * Interface DoorIntarface
 *
 * @package Dallask\Patterns\Structural\Proxy
 */
interface DoorIntarface
{

    /**
     * @return string
     */
    public function open(): string;

    /**
     * @return string
     */
    public function close(): string;
}