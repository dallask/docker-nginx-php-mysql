<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 13:12
 */

namespace Dallask\Patterns\Behavioral\NullObject;

/**
 * Interface LoggerInterface
 *
 * @package Dallask\Patterns\Behavioral\NullObject
 */
interface LoggerInterface
{

    /**
     * @param string $log
     *
     * @return mixed
     */
    public function log(string $log);
}