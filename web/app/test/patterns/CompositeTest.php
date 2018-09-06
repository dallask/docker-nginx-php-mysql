<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 13:55
 */

namespace Dallask\Patterns\Structural\Composite\Tests;

use Dallask\Patterns\Structural\Composite;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{

    public function testFormRender()
    {
        $form = new Composite\Form();
        $inputText = new Composite\InputText('Short Text');
        $inputButton = new Composite\InputButton('Button Name');

        $form->addField($inputText);
        $form->addField($inputButton);

        $embed = new Composite\Form();
        $inputTextEmbed = new Composite\InputText('Short Text Embed');
        $inputButtonEmbed = new Composite\InputButton('Button Name Embed');
        $embed->addField($inputTextEmbed);
        $embed->addField($inputButtonEmbed);

        $form->addField($embed);

        $this->assertEquals(
            '<form><input type="text" value="Short Text" /><button>Button Name</button><form><input type="text" value="Short Text Embed" /><button>Button Name Embed</button></form></form>',
            $form->render()
        );
    }
}