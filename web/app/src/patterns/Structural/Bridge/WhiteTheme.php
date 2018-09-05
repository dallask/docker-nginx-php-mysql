<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 14:21
 */

namespace Dallask\Patterns\Structural\Bridge;

class WhiteTheme implements ThemeInterface
{
    public function getColor()
    {
        return "White";
    }
}