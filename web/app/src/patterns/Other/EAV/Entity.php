<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Sep-18
 * Time: 11:38
 */

namespace Dallask\Patterns\Other\EAV;

/**
 * Class Entity
 *
 * @package Dallask\Patterns\Other\EAV
 */
class Entity {

  /**
   * @var \SplObjectStorage
   */
  private $values;

  /**
   * @var string
   */
  private $name;

  /**
   * @param string  $name
   * @param Value[] $values
   */
  public function __construct(string $name, $values) {
    $this->values = new \SplObjectStorage();
    $this->name = $name;

    foreach ($values as $value) {
      $this->values->attach($value);
    }
  }

  public function __toString(): string {
    $text = [$this->name];

    foreach ($this->values as $value) {
      $text[] = (string) $value;
    }

    return join(', ', $text);
  }
}
