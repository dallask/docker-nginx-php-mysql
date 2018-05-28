<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 28-May-18
 * Time: 11:40
 */

/**
 * Scalar type declarations
 */

// Пример callback-функции
function my_callback_function() {
  echo 'hello world!';
}

function testFunc(array $array, callable $callable, bool $bool, float $float, int $int, string $string) {
  echo '<pre>';
  print_r($array);
  echo '<br />';
  call_user_func($callable);
  echo '<br />';
  print_r($bool);
  echo '<br />';
  print_r($float);
  echo '<br />';
  print_r($int);
  echo '<br />';
  print_r($string);
  echo '<br />Function has worked!';
  echo '</pre>';
}

/* correct */
testFunc([1, 2, 3], 'my_callback_function', TRUE, 1.2, 10, 'Hello world!');
/* incorrect */
//testFunc('string', 123, 8.5, 'sdfgdsgf', 1.0, 15.6);
echo '<hr />';

/**
 * Return type declarations
 */
function arraysSum(array ...$arrays): array
{
  return array_map(function(array $array): int {
    return array_sum($array);
  }, $arrays);
}

print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));
echo '<hr />';

/**
 * Null coalescing operator
 */
echo $username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
echo '<hr />';

/**
 * Spaceship operator
 */
// Integers
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Floats
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// Strings
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
echo '<hr />';

/**
 * Constant arrays using define()
 */
define('ANIMALS', [
  'dog',
  'cat',
  'bird'
]);

echo ANIMALS[1]; // outputs "cat"
echo '<hr />';

/**
 * Anonymous classes
 */
$util = new class {
  public function log($msg)
  {
    echo $msg;
  }
};
$util->log('Log message.');
echo '<hr />';

/**
 * Unicode codepoint escape syntax
 */
echo "\u{aa}";
echo "\u{0000aa}";
echo "\u{9999}";
echo '<hr />';

/**
 * Closure::call()
 */
class A {private $x = 1;}

// До PHP 7
$getX = function() {return $this->x;};
$getXCB = $getX->bindTo(new A, 'A'); // промежуточное замыкание
echo $getXCB();

// PHP 7+
$getX = function() {return $this->x;};
echo $getX->call(new A);
echo '<hr />';

/**
 * Filtered unserialize()
 */
// converts all objects into __PHP_Incomplete_Class object
$data = unserialize($foo, ["allowed_classes" => false]);

// converts all objects into __PHP_Incomplete_Class object except those of MyClass and MyClass2
$data = unserialize($foo, ["allowed_classes" => ["MyClass", "MyClass2"]]);

// default behaviour (same as omitting the second argument) that accepts all classes
$data = unserialize($foo, ["allowed_classes" => true]);
echo '<hr />';

/**
 * IntlChar
 */
printf('%x', IntlChar::CODEPOINT_MAX);
echo IntlChar::charName('@');
var_dump(IntlChar::ispunct('!'));

/**
 * Expectations
 */
ini_set('assert.exception', 1);

class CustomError extends AssertionError {}

//assert(false, new CustomError('Some error message'));
echo '<hr />';

/**
 * Group use declarations
 */
// Pre PHP 7 code
//use some\namespace\ClassA;
//use some\namespace\ClassB;
//use some\namespace\ClassC as C;
//
//use function some\namespace\fn_a;
//use function some\namespace\fn_b;
//use function some\namespace\fn_c;
//
//use const some\namespace\ConstA;
//use const some\namespace\ConstB;
//use const some\namespace\ConstC;
//
//// PHP 7+ code
//use some\namespace\{ClassA, ClassB, ClassC as C};
//use function some\namespace\{fn_a, fn_b, fn_c};
//use const some\namespace\{ConstA, ConstB, ConstC};
echo '<hr />';

/**
 * Generator Return Expressions
 */
$gen = (function() {
  yield 1;
  yield 2;

  return 3;
})();

foreach ($gen as $val) {
  echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;
echo '<hr />';

/**
 * Generator delegation
 */
function gen()
{
  yield 1;
  yield 2;
  yield from gen2();
}

function gen2()
{
  yield 3;
  yield 4;
}

foreach (gen() as $val)
{
  echo $val, PHP_EOL;
}
echo '<hr />';

/**
 * Integer division with intdiv()
 */
var_dump(intdiv(10, 3));
echo '<hr />';

/**
 * Session options
 */
session_start([
  'cache_limiter' => 'private',
  'read_and_close' => true,
]);
echo '<hr />';

/**
 * preg_replace_callback_array()
 */
$subject = 'Aaaaaa Bbb';

preg_replace_callback_array(
  [
    '~[a]+~i' => function ($match) {
      echo 'Найдено ', strlen($match[0]), ' совпадений "a"', PHP_EOL;
    },
    '~[b]+~i' => function ($match) {
      echo 'Найдено ', strlen($match[0]), ' совпадений "b"', PHP_EOL;
    }
  ],
  $subject
);
echo '<hr />';

/**
 * CSPRNG Functions (random_bytes() and random_int())
 */

var_dump(bin2hex(random_bytes(5)));
var_dump(random_int(100, 999));
var_dump(random_int(-1000, 0));
echo '<hr />';