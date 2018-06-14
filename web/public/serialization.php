<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Jun-18
 * Time: 15:21
 */
// classa.inc:

class A {
  public $one = 1;

  public function show_one() {
    echo $this->one;
  }
}

// page1.php:

include("classa.inc");

$a = new A;
$s = serialize($a);
// сохраняем $s где-нибудь, откуда page2.php сможет его получить.
file_put_contents('store', $s);

// page2.php:

// это нужно для того, чтобы функция unserialize работала правильно.
include("classa.inc");

$s = file_get_contents('store');
$a = unserialize($s);

// теперь можно использовать метод show_one() объекта $a.
$a->show_one();