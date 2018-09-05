<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:55
 */

namespace Dallask\Patterns\Structural\Adapter\Tests;

use Dallask\Patterns\Structural\Bridge\WhiteTheme;
use Dallask\Patterns\Structural\Bridge\GreenTheme;
use Dallask\Patterns\Structural\Bridge\BlackTheme;
use Dallask\Patterns\Structural\Bridge\WebPage;
use Dallask\Patterns\Structural\Bridge\AnotherWebPage;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testGetWebPageColors()
    {
        $whiteTheme = new WhiteTheme();
        $greenTheme = new GreenTheme();
        $blackTheme = new BlackTheme();

        $whiteWebPage = new WebPage($whiteTheme);
        $greenWebPage = new WebPage($greenTheme);
        $blackWebPage = new WebPage($blackTheme);

        $this->assertEquals("Web Page in White color", $whiteWebPage->getPage());
        $this->assertEquals("Web Page in Green color", $greenWebPage->getPage());
        $this->assertEquals("Web Page in Black color", $blackWebPage->getPage());
    }

    public function testGetAnotherWebPageColors()
    {
        $whiteTheme = new WhiteTheme();
        $greenTheme = new GreenTheme();
        $blackTheme = new BlackTheme();

        $whiteWebPage = new AnotherWebPage($whiteTheme);
        $greenWebPage = new AnotherWebPage($greenTheme);
        $blackWebPage = new AnotherWebPage($blackTheme);

        $this->assertEquals("Another Web Page in White color", $whiteWebPage->getPage());
        $this->assertEquals("Another Web Page in Green color", $greenWebPage->getPage());
        $this->assertEquals("Another Web Page in Black color", $blackWebPage->getPage());
    }
}