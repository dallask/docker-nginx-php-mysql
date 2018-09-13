<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 13-Sep-18
 * Time: 11:53
 */

namespace Dallask\Patterns\Behavioral\State;

/**
 * Class TextEditor
 *
 * @package Dallask\Patterns\Behavioral\State
 */
class TextEditor
{

    /**
     * @var \Dallask\Patterns\Behavioral\State\WritingState
     */
    protected $state;

    /**
     * TextEditor constructor.
     *
     * @param \Dallask\Patterns\Behavioral\State\WritingState $state
     */
    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    /**
     * @param \Dallask\Patterns\Behavioral\State\WritingState $state
     */
    public function setState(WritingState $state)
    {
        $this->state = $state;
    }

    /**
     * @param string $text
     */
    public function text(string $text)
    {
        $this->state->write($text);
    }
}