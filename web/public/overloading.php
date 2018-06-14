<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 07-Jun-18
 * Time: 12:36
 */

class PropertyTest
{
  /**  Место хранения перегружаемых данных.  */
  private $data = array();

  /**  Перегрузка не применяется к объявленным свойствам.  */
  public $declared = 1;

  /**  Здесь перегрузка будет использована только при доступе вне класса.  */
  private $hidden = 2;

  public function __set($name, $value)
  {
    echo "Установка '$name' в '$value'\n";
    $this->data[$name] = $value;
  }

  public function __get($name)
  {
    echo "Получение '$name'\n";
    if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
    }

    $trace = debug_backtrace();
    trigger_error(
      'Неопределенное свойство в __get(): ' . $name .
      ' в файле ' . $trace[0]['file'] .
      ' на строке ' . $trace[0]['line'],
      E_USER_NOTICE);
    return null;
  }

  /**  Начиная с PHP 5.1.0  */
  public function __isset($name)
  {
    echo "Установлено ли '$name'?\n";
    return isset($this->data[$name]);
  }

  /**  Начиная с PHP 5.1.0  */
  public function __unset($name)
  {
    echo "Уничтожение '$name'\n";
    unset($this->data[$name]);
  }

  /**  Не магический метод, просто для примера. */
  public function getHidden()
  {
    return $this->hidden;
  }
}


echo "<pre>\n";

$obj = new PropertyTest;

$obj->a = 1;
echo "<hr>\n";
echo $obj->a . "\n\n";
echo "<hr>\n";
echo $obj->b . "\n\n";
echo "<hr>\n";
var_dump(isset($obj->a));
echo "<hr>\n";
unset($obj->a);
echo "<hr>\n";
var_dump(isset($obj->a));
echo "<hr>\n";

echo $obj->declared . "\n\n";

echo "Давайте поэкспериментируем с закрытым свойством 'hidden':\n";
echo "Закрытые свойства видны внутри класса, поэтому __get() не используется...\n";
echo $obj->getHidden() . "\n";
echo "Закрытые свойства не видны вне класса, поэтому __get() используется...\n";
echo $obj->hidden . "\n";




class MethodTest {
  public function __call($name, $arguments) {
    // Замечание: значение $name регистрозависимо.
    echo "Вызов метода '$name' "
      . implode(', ', $arguments). "\n";
  }

  /**  Начиная с PHP 5.3.0  */
  public static function __callStatic($name, $arguments) {
    // Замечание: значение $name регистрозависимо.
    echo "Вызов статического метода '$name' "
      . implode(', ', $arguments). "\n";
  }
}

$obj = new MethodTest;
$obj->runTest('в контексте объекта');

MethodTest::runTest('в статическом контексте');  // Начиная с PHP 5.3.0