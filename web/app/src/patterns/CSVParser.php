<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 11:29
 */

namespace Dallask\DesignPatterns;

class CSVParser implements Parser
{
    public function parse(string $input): array
    {
        return ['type' => 'csv'];
    }
}