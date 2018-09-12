<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 16:55
 */

namespace Dallask\Patterns\Behavioral\Memento;

use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{

    public function testRestore()
    {
        $editor = new Editor();

        // Type some stuff
        $editor->type('This is the first sentence.');

        $editor->type('This is second.');

        // Save the state to restore to : This is the first sentence. This is second.
        $saved = $editor->save();

        $this->assertEquals(
            ' This is the first sentence. This is second.',
            $editor->getContent()
        );

        // Type some more
        $editor->type('And this is third.');

        $this->assertEquals(
            ' This is the first sentence. This is second. And this is third.',
            $editor->getContent()
        );

        // Restoring to last saved state
        $editor->restore($saved);

        $this->assertEquals(
            ' This is the first sentence. This is second.',
            $editor->getContent()
        );
    }
}
