<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 12:40
 */

namespace Dallask\Patterns\Behavioral\Mediator;

/**
 * Interface MediatorInterface
 *
 * @package Dallask\Patterns\Behavioral\Mediator
 */
interface MediatorInterface
{

    /**
     * sends the response.
     *
     * @param string $content
     */
    public function sendResponse($content);

    /**
     * makes a request
     */
    public function makeRequest();

    /**
     * queries the DB
     */
    public function queryDb();
}