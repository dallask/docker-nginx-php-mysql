<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:02
 */

namespace Dallask\Patterns\Creational\FactoryMethod;

class FileLoggerFactory implements LoggerFactory
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}