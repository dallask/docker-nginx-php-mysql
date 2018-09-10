<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 10-Sep-18
 * Time: 11:56
 */

namespace Dallask\Patterns\Structural\Proxy;

/**
 * Class SimpleDoor
 *
 * @package Dallask\Patterns\Structural\Proxy
 */
class SimpleDoor implements DoorIntarface
{

    /**
     * @return string
     */
    public function open(): string
    {
        return 'opened';
    }

    /**
     * @return string
     */
    public function close(): string
    {
        return 'closed';
    }
}