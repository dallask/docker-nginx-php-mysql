<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 07-Jun-18
 * Time: 12:37
 */

class TestParent {

  public function f1() {
    echo 1;
  }

  public function f2() {
    echo 2;
  }
}

class TestChild extends TestParent {

  public function f2() {
    echo "Overridden f2 function in child class";
  }
}

$tc = new TestChild;
$tc->f2(); // outputs  "Overridden f2 function in child class"