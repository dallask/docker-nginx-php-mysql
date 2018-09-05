<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:50
 */

namespace Dallask\Patterns\Structural\Adapter;

class EBook implements EBookInterface
{
    private $pages = [0, 0];

    public function unlock()
    {
        $this->pages = [1, 1000];
    }

    public function getBookPages()
    {
        return $this->pages;
    }
}