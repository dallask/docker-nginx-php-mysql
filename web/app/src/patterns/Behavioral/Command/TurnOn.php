<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 10:26
 */

namespace Dallask\Patterns\Behavioral\Command;

/**
 * Class TurnOn
 *
 * @package Dallask\Patterns\Behavioral\Command
 */
class TurnOn implements CommandInterface
{

    /**
     * @var \Dallask\Patterns\Behavioral\Command\Bulb
     */
    protected $bulb;

    /**
     * TurnOn constructor.
     *
     * @param \Dallask\Patterns\Behavioral\Command\Bulb $bulb
     */
    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    /**
     * @return mixed|string
     */
    public function execute()
    {
        return $this->bulb->turnOn();
    }

    /**
     * @return mixed|string
     */
    public function undo()
    {
        return $this->bulb->turnOff();
    }

    /**
     * @return mixed|string
     */
    public function redo()
    {
        return $this->execute();
    }
}