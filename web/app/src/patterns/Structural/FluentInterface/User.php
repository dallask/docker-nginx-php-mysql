<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 07-Sep-18
 * Time: 11:31
 */

namespace Dallask\Patterns\Structural\FluentInterface;

/**
 * Class User
 *
 * @package Dallask\Patterns\Structural\FluentInterface
 */
class User
{

    /**
     * @var string
     */
    private $name, $login, $password;

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $login
     *
     * @return $this
     */
    public function setLogin(string $login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->name . ' ' . $this->login . ' ' . $this->password;
    }
}