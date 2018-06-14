<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Jun-18
 * Time: 16:10
 */

class A {
  function example() {
    echo "I am A::example() and provide basic functionality.<br />\n";
  }
}

class B extends A {
  function example() {
    echo "I am B::example() and provide additional functionality.<br />\n";
    parent::example();
  }
}

$b = new B;

// This will call B::example(), which will in turn call A::example().
$b->example();