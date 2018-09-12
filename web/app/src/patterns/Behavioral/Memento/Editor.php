<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 12:55
 */

namespace Dallask\Patterns\Behavioral\Memento;

/**
 * Class Editor
 *
 * @package Dallask\Patterns\Behavioral\Memento
 */
class Editor
{

    /**
     * @var string
     */
    protected $content = '';

    /**
     * @param string $words
     */
    public function type(string $words)
    {
        $this->content = $this->content . ' ' . $words;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return \Dallask\Patterns\Behavioral\Memento\EditorMemento
     */
    public function save()
    {
        return new EditorMemento($this->content);
    }

    /**
     * @param \Dallask\Patterns\Behavioral\Memento\EditorMemento $memento
     */
    public function restore(EditorMemento $memento)
    {
        $this->content = $memento->getContent();
    }
}