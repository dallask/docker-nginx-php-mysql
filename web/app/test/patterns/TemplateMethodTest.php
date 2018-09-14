<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 08:01
 */

namespace Dallask\Patterns\Tests\TemplateMethod\Tests;

use Dallask\Patterns\Behavioral\TemplateMethod\FrenchQuotes;
use Dallask\Patterns\Behavioral\TemplateMethod\GermanQuotes;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{

    public function testTemplateMethod()
    {
        $expect = "«Test String»";
        $qt = new FrenchQuotes();
        $result = $qt->Quotes("Test String");
        $this->assertEquals($result, $expect);

        $expect = "„Test String“";
        $qt = new GermanQuotes();
        $result = $qt->Quotes("Test String");
        $this->assertEquals($result, $expect);
    }
}