<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Sep-18
 * Time: 11:42
 */

namespace Dallask\Patterns\Other\EAV;

/**
 * Class Value
 *
 * @package Dallask\Patterns\Other\EAV
 */
class Value {

  /**
   * @var Attribute
   */
  private $attribute;

  /**
   * @var string
   */
  private $name;

  public function __construct(Attribute $attribute, string $name) {
    $this->name = $name;
    $this->attribute = $attribute;

    $attribute->addValue($this);
  }

  public function __toString(): string {
    return sprintf('%s: %s', $this->attribute, $this->name);
  }
}
