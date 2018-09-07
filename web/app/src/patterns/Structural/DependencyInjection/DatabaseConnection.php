<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 07-Sep-18
 * Time: 10:21
 */

namespace Dallask\Patterns\Structural\DependencyInjection;

/**
 * Class DatabaseConnection
 *
 * @package Dallask\Patterns\Structural\DependencyInjection
 */
class DatabaseConnection
{

    /**
     * @var \Dallask\Patterns\Structural\DependencyInjection\DatabaseConnectionConfig
     */
    private $configuration;

    /**
     * DatabaseConnection constructor.
     *
     * @param \Dallask\Patterns\Structural\DependencyInjection\DatabaseConnectionConfig $config
     */
    public function __construct(DatabaseConnectionConfig $config)
    {
        $this->configuration = $config;
    }

    /**
     * @return string
     */
    public function getDsn()
    {
        return sprintf(
            "%s:%s@%s:%d",
            $this->configuration->getUser(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}
