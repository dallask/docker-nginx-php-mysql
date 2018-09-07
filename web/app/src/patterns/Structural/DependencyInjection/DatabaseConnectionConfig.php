<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 07-Sep-18
 * Time: 10:15
 */

namespace Dallask\Patterns\Structural\DependencyInjection;

/**
 * Class DatabaseConnectionConfig
 *
 * @package Dallask\Patterns\Structural\DependencyInjection
 */
class DatabaseConnectionConfig
{

    /**
     * @var string
     */
    private $host, $user, $password;

    /**
     * @var int
     */
    private $port;

    /**
     * DatabaseConnectionConfig constructor.
     *
     * @param string $host
     * @param int    $port
     * @param string $user
     * @param string $password
     */
    public function __construct(
        string $host, int $port, string $user, string $password
    )
    {
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
