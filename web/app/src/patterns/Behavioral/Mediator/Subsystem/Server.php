<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 12:45
 */

namespace Dallask\Patterns\Behavioral\Mediator\Subsystem;

use Dallask\Patterns\Behavioral\Mediator\Colleague;

/**
 * Class Server
 *
 * @package Dallask\Patterns\Behavioral\Mediator\Subsystem
 */
class Server extends Colleague
{
    public function process()
    {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResponse(sprintf("Hello %s", $data));
    }
}