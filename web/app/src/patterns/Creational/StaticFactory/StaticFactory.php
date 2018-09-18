<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 14:17
 */

namespace Dallask\Patterns\Creational\StaticFactory;

final class StaticFactory
{
    public static function build($type = '') :FormatterIterface
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}