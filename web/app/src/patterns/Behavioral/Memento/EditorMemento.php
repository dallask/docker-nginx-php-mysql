<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 12:54
 */

namespace Dallask\Patterns\Behavioral\Memento;

/**
 * Class EditorMemento
 *
 * @package Dallask\Patterns\Behavioral\Memento
 */
class EditorMemento
{

    /**
     * @var string
     */
    protected $content;

    /**
     * EditorMemento constructor.
     *
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}