<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 13:15
 */

namespace Dallask\Patterns\Behavioral\NullObject;

/**
 * Class NullLogger
 *
 * @package Dallask\Patterns\Behavioral\NullObject
 */
class NullLogger implements LoggerInterface
{

    /**
     * @param string $log
     *
     * @return mixed|void
     */
    public function log(string $log)
    {
        //Do nothing;
    }
}