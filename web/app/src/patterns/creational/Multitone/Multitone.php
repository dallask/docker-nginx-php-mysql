<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 27-Aug-18
 * Time: 13:31
 */

namespace Dallask\Patterns\Creational\Multitone;

final class Multitone
{

    private static $instances = [];

    private function __construct()
    {

    }

    public static function getInstance(string $InstanceName)
    {
        if (!isset(self::$instances[$InstanceName])) {
            self::$instances[$InstanceName] = new self();
        }

        return self::$instances[$InstanceName];
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}