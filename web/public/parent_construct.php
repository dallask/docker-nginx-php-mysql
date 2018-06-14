<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Jun-18
 * Time: 16:12
 */

class BaseClass {
  function __construct() {
    print "Конструктор класса BaseClass\n";
  }
}

class SubClass extends BaseClass {
  function __construct() {
    parent::__construct();
    print "Конструктор класса SubClass\n";
  }
}

class OtherSubClass extends BaseClass {
  // наследует конструктор BaseClass
}

// Конструктор класса BaseClass
$obj = new BaseClass();

// Конструктор класса BaseClass
// Конструктор класса SubClass
$obj = new SubClass();

// Конструктор класса BaseClass
$obj = new OtherSubClass();