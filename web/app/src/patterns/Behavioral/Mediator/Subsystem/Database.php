<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 12:44
 */

namespace Dallask\Patterns\Behavioral\Mediator\Subsystem;

use Dallask\Patterns\Behavioral\Mediator\Colleague;

/**
 * Class Database
 *
 * @package Dallask\Patterns\Behavioral\Mediator\Subsystem
 */
class Database extends Colleague
{

    public function getData(): string
    {
        return 'World';
    }
}