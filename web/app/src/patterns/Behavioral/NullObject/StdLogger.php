<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 13:14
 */

namespace Dallask\Patterns\Behavioral\NullObject;

/**
 * Class StdLogger
 *
 * @package Dallask\Patterns\Behavioral\NullObject
 */
class StdLogger implements LoggerInterface
{

    /**
     * @param string $log
     *
     * @return mixed|void
     */
    public function log(string $log)
    {
        echo $log;
    }
}