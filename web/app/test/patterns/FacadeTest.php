<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:55
 */

namespace Dallask\Patterns\Structural\Facade\Tests;

use Dallask\Patterns\Structural\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{

    public function testItsMyLife()
    {
        $myLife = new Facade\ItsMyLifeFacade(new Facade\ItsMyLife());

        $this->assertEquals(
            'Stop fighting me Stop yelling me Stop telling me Stop seeing me It\'s my life',
            $myLife->itsMyLife()
        );
    }

}