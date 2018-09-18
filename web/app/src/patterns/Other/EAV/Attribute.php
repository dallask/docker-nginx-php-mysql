<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Sep-18
 * Time: 11:41
 */

namespace Dallask\Patterns\Other\EAV;

class Attribute {

  /**
   * @var \SplObjectStorage
   */
  private $values;

  /**
   * @var string
   */
  private $name;

  public function __construct(string $name) {
    $this->values = new \SplObjectStorage();
    $this->name = $name;
  }

  public function addValue(Value $value) {
    $this->values->attach($value);
  }

  /**
   * @return \SplObjectStorage
   */
  public function getValues(): \SplObjectStorage {
    return $this->values;
  }

  public function __toString(): string {
    return $this->name;
  }
}
