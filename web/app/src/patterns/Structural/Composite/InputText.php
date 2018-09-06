<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 06-Sep-18
 * Time: 13:18
 */

namespace Dallask\Patterns\Structural\Composite;

/**
 * Class InputText
 *
 * @package Dallask\Patterns\Structural\Composite
 */
class InputText implements RenderInterface
{

    /**
     * @var string
     */
    private $text;

    /**
     * InputText constructor.
     *
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return '<input type="text" value="' . $this->text . '" />';
    }
}