<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 12:41
 */

namespace Dallask\Patterns\Behavioral\Mediator;

/**
 * Class Mediator
 *
 * @package Dallask\Patterns\Behavioral\Mediator
 */
class Mediator implements MediatorInterface
{

    /**
     * @var Subsystem\Server
     */
    private $server;

    /**
     * @var Subsystem\Database
     */
    private $database;

    /**
     * @var Subsystem\Client
     */
    private $client;

    /**
     * @param Subsystem\Database $database
     * @param Subsystem\Client   $client
     * @param Subsystem\Server   $server
     */
    public function __construct(
        Subsystem\Database $database, Subsystem\Client $client,
        Subsystem\Server $server
    )
    {
        $this->database = $database;
        $this->server = $server;
        $this->client = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb(): string
    {
        return $this->database->getData();
    }

    /**
     * @param string $content
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}