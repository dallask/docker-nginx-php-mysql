<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 07-Jun-18
 * Time: 13:31
 */

// Объявим интерфейс 'iTemplate'
interface iTemplate
{
  public function setVariable($name, $var);
  public function getHtml($template);
}

// Реализация интерфейса
// Это будет работать
class Template implements iTemplate
{
  private $vars = array();

  public function setVariable($name, $var)
  {
    $this->vars[$name] = $var;
  }

  public function getHtml($template)
  {
    foreach($this->vars as $name => $value) {
      $template = str_replace('{' . $name . '}', $value, $template);
    }

    return $template;
  }
}

// Это не будет работать
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (iTemplate::getHtml)
// (Фатальная ошибка: Класс BadTemplate содержит 1 абстрактный метод
// и поэтому должен быть объявлен абстрактным (iTemplate::getHtml))
class BadTemplate implements iTemplate
{
  private $vars = array();

  public function setVariable($name, $var)
  {
    $this->vars[$name] = $var;
  }
}

#2 Наследование интерфейсов
interface a
{
  const b = 'Константа интерфейса';
}

// Выведет: Константа интерфейса
echo a::b;


// Это, однако, не будет работать, так как
// константы переопределять нельзя.
class b implements a
{
  const b = 'Константа класса';
}

#3 Множественное наследование интерфейсов
interface a
{
  public function foo();
}

interface b
{
  public function bar();
}

interface c extends a, b
{
  public function baz();
}

class d implements c
{
  public function foo()
  {
  }

  public function bar()
  {
  }

  public function baz()
  {
  }
}

#4 Интерфейсы с константами
interface a
{
  const b = 'Константа интерфейса';
}

// Выведет: Константа интерфейса
echo a::b;


// Это, однако, не будет работать, так как
// константы переопределять нельзя.
class b implements a
{
  const b = 'Константа класса';
}