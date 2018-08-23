<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 11:33
 */

namespace Dallask\DesignPatterns;

class JSONParser implements Parser
{
    public function parse(string $input): array
    {
        return ['type' => 'json'];
    }
}