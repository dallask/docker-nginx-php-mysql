<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 11:41
 */

namespace Dallask\Patterns\Behavioral\Specification\Tests;

use Dallask\Patterns\Behavioral\State;

use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{

    private $testString = 'AbCdEfG';
    private $stateDefault;
    private $stateLower;
    private $stateUpper;
    private $editor;

    public function __construct(
        string $name = null, array $data = [], string $dataName = ''
    )
    {
        parent::__construct($name, $data, $dataName);

        $this->stateDefault = new State\DefaultWrite();
        $this->stateLower = new State\LowerWrite();
        $this->stateUpper = new State\UpperWrite();
        $this->editor = new State\TextEditor($this->stateDefault);
    }

    public function testStateDefault()
    {
        $this->editor->text($this->testString);

        $this->expectOutputString('AbCdEfG');
    }

    public function testStateLower()
    {
        $this->editor->setState($this->stateLower);
        $this->editor->text($this->testString);
        $this->expectOutputString('abcdefg');
    }

    public function testStateUpper()
    {
        $this->editor->setState($this->stateUpper);
        $this->editor->text($this->testString);
        $this->expectOutputString('ABCDEFG');
    }
}