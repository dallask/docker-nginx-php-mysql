<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Sep-18
 * Time: 11:43
 */

namespace Dallask\Patterns\Other\EAV\Tests;

use Dallask\Patterns\Other\EAV\Attribute;
use Dallask\Patterns\Other\EAV\Entity;
use Dallask\Patterns\Other\EAV\Value;
use PHPUnit\Framework\TestCase;

class EAVTest extends TestCase
{
  public function testCanAddAttributeToEntity()
  {
    $colorAttribute = new Attribute('color');
    $colorSilver = new Value($colorAttribute, 'silver');
    $colorBlack = new Value($colorAttribute, 'black');

    $memoryAttribute = new Attribute('memory');
    $memory8Gb = new Value($memoryAttribute, '8GB');

    $entity = new Entity('MacBook Pro', [$colorSilver, $colorBlack, $memory8Gb]);

    $this->assertEquals('MacBook Pro, color: silver, color: black, memory: 8GB', (string) $entity);
  }
}
