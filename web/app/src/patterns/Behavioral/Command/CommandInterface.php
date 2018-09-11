<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 10:22
 */

namespace Dallask\Patterns\Behavioral\Command;

/**
 * Interface CommandInterface
 *
 * @package Dallask\Patterns\Behavioral\Command
 */
interface CommandInterface
{

    /**
     * @return mixed
     */
    public function execute();

    /**
     * @return mixed
     */
    public function undo();

    /**
     * @return mixed
     */
    public function redo();
}