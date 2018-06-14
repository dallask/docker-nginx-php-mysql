<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Jun-18
 * Time: 15:53
 */

class Animal {
  protected static $name = 'Animal';

  public static function getName() {
    return static::$name;
  }
}

class Cat extends Animal {
  protected static $name = 'Cat';
}

echo Animal::getName(); // Animal
echo Cat::getName(); // Cat