<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:52
 */

namespace Dallask\Patterns\Structural\Adapter;

class EBookAdapter implements BookIterface
{
    private $EBook;

    public function __construct(EBookInterface $EBook)
    {
        $this->EBook = $EBook;
    }

    public function open()
    {
        $this->EBook->unlock();
    }

    public function getPage()
    {
        return $this->EBook->getBookPages()[0];
    }
}