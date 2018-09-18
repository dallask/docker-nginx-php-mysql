<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 27-Aug-18
 * Time: 14:32
 */

namespace Dallask\Patterns\Creational\ObjectPool;

class ObjectFactory
{

    protected static $products;

    public static function pushProduct(Product $product)
    {
        self::$products[$product->getId()] = $product;
    }

    public static function getProduct($id)
    {
        return isset(self::$products[$id]) ? self::$products[$id] : null;
    }

    public static function removeProduct($id)
    {
        if (array_key_exists($id, self::$products)) {
            unset(self::$products[$id]);
        }
    }
}