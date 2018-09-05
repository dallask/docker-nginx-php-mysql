<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:47
 */

namespace Dallask\Patterns\Structural\Adapter;

class PaperBook implements BookIterface
{
    public $page;

    public function open()
    {
        $this->page = 1;
    }

    public function getPage()
    {
        return $this->page;
    }
}