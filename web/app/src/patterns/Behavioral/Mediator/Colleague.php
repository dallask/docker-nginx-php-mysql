<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 12:43
 */

namespace Dallask\Patterns\Behavioral\Mediator;

/**
 * Class Colleague
 *
 * @package Dallask\Patterns\Behavioral\Mediator
 */
abstract class Colleague
{

    /**
     * this ensures no change in subclasses.
     *
     * @var MediatorInterface
     */
    protected $mediator;

    /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}