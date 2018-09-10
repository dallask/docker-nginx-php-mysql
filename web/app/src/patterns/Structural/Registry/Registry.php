<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 10-Sep-18
 * Time: 12:22
 */

namespace Dallask\Patterns\Structural\Registry;

/**
 * Class Registry
 *
 * @package Dallask\Patterns\Structural\Registry
 */
class Registry
{

    /**
     * @var array
     */
    private static $container = [];

    /**
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        if (!isset(self::$container[$key])) {
            self::$container[$key] = $value;
        } else {
            throw new \InvalidArgumentException('Invalid key given');
        }
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public static function get($key)
    {
        if (isset(self::$container[$key])) {
            return self::$container[$key];
        } else {
            throw new \InvalidArgumentException('Invalid key given');
        }
    }
}