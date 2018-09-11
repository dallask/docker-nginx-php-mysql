<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 10:29
 */

namespace Dallask\Patterns\Behavioral\Command;

/**
 * Class RemoteControl
 *
 * @package Dallask\Patterns\Behavioral\Command
 */
class RemoteControl
{

    /**
     * @param \Dallask\Patterns\Behavioral\Command\CommandInterface $command
     *
     * @return mixed
     */
    public function submit(CommandInterface $command)
    {
        return $command->execute();
    }
}