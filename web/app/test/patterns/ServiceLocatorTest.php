<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Sep-18
 * Time: 11:19
 */

namespace Dallask\Patterns\Other\ServiceLocator\Tests;

use Dallask\Patterns\Other\ServiceLocator\LogService;
use Dallask\Patterns\Other\ServiceLocator\ServiceLocator;
use PHPUnit\Framework\TestCase;

class ServiceLocatorTest extends TestCase {

  /**
   * @var ServiceLocator
   */
  private $serviceLocator;

  public function setUp() {
    $this->serviceLocator = new ServiceLocator();
  }

  public function testHasServices() {
    $this->serviceLocator->addInstance(LogService::class, new LogService());

    $this->assertTrue($this->serviceLocator->has(LogService::class));
    $this->assertFalse($this->serviceLocator->has(self::class));
  }

  public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet(
  ) {
    $this->serviceLocator->addClass(LogService::class, []);
    $logger = $this->serviceLocator->get(LogService::class);

    $this->assertInstanceOf(LogService::class, $logger);
  }
}
