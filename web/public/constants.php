<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Jun-18
 * Time: 12:23
 */

class MyClass
{
  const CONSTANT = 'значение константы';

  function showConstant() {
    echo  self::CONSTANT . "\n";
  }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n"; // начиная с PHP 5.3.0

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT."\n"; // начиная с PHP 5.3.0

#2 Пример со статичными данными
class foo1 {
  // Начиная с PHP 5.3.0
  const BAR = <<<'EOT'
bar
EOT;
  // Начиная с PHP 5.3.0
  const BAZ = <<<EOT
baz
EOT;
}

#3 Пример использования ::class с пространством имен
namespace foo {
  class bar {
  }

  echo bar::class; // foo\bar
}

#4 Пример констант, заданных выражением
const ONE = 1;

class foo {
  // Начиная с PHP 5.6.0
  const TWO = ONE * 2;
  const THREE = ONE + self::TWO;
  const SENTENCE = 'Значение константы THREE - ' . self::THREE;
}

#5 Модификаторы видимости констант класса
class FooNew {
  // Начиная с PHP 7.1.0
  public const BAR = 'bar';
  private const BAZ = 'baz';
}
echo FooNew::BAR, PHP_EOL;
echo FooNew::BAZ, PHP_EOL;