<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 10-Sep-18
 * Time: 12:03
 */

namespace Dallask\Patterns\Structural\Proxy;

use PHPUnit\Framework\TestCase;

class SecuredDoorTest extends TestCase
{

    private $door;

    public function __construct(
        string $name = null, array $data = [], string $dataName = ''
    )
    {
        parent::__construct($name, $data, $dataName);
        $this->door = new SecuredDoor(new SimpleDoor());
    }

    public function testOpen()
    {
        $this->assertEquals('access denied', $this->door->open('invalid'));
        $this->assertEquals('opened', $this->door->open('$ecr@t'));
    }

    public function testClose()
    {
        $this->assertEquals('closed', $this->door->close());
    }
}
