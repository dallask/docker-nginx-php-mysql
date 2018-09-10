<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 10-Sep-18
 * Time: 11:57
 */

namespace Dallask\Patterns\Structural\Proxy;

/**
 * Class SecuredDoor
 *
 * @package Dallask\Patterns\Structural\Proxy
 */
class SecuredDoor
{

    /**
     * @var \Dallask\Patterns\Structural\Proxy\DoorIntarface
     */
    private $door;

    /**
     * SecuredDoor constructor.
     *
     * @param \Dallask\Patterns\Structural\Proxy\DoorIntarface $door
     */
    public function __construct(DoorIntarface $door)
    {
        $this->door = $door;
    }

    /**
     * @param string $password
     *
     * @return bool
     */
    public function authenticate(string $password): bool
    {
        return $password === '$ecr@t';
    }

    /**
     * @param $password
     *
     * @return string
     */
    public function open($password): string
    {
        if ($this->authenticate($password)) {
            return $this->door->open();
        } else {
            return 'access denied';
        }
    }

    /**
     * @return string
     */
    public function close(): string
    {
        return $this->door->close();
    }
}