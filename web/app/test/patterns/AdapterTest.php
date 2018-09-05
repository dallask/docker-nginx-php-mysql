<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:55
 */

namespace Dallask\Patterns\Structural\Adapter\Tests;

use Dallask\Patterns\Structural\Adapter\PaperBook;
use Dallask\Patterns\Structural\Adapter\EBookAdapter;
use Dallask\Patterns\Structural\Adapter\EBook;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();

        $this->assertEquals(1, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new EBook();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->getPage();

        $this->assertEquals(1, $book->getPage());
    }
}