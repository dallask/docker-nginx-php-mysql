<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:49
 */

namespace Dallask\Patterns\Structural\Adapter;

interface EBookInterface
{
    public function unlock();

    public function getBookPages();
}