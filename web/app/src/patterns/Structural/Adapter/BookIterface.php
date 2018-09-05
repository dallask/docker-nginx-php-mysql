<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:44
 */

namespace Dallask\Patterns\Structural\Adapter;

interface BookIterface
{
    public function open();

    public function getPage();
}