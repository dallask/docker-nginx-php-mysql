<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Jun-18
 * Time: 14:52
 */
class myClass {
  public function __construct() {
    echo "myClass init'ed successfuly!!!<br />";
  }
}


// we've writen this code where we need
function __autoload($classname) {
  $filename = "./". $classname .".php";
  include_once($filename);
}

// we've called a class ***
$obj = new myClass();
$obj_one = new myNewClass();
$obj_two = new myNewTwoClass();