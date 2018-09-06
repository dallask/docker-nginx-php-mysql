<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 06-Sep-18
 * Time: 13:22
 */

namespace Dallask\Patterns\Structural\Composite;

/**
 * Class InputButton
 *
 * @package Dallask\Patterns\Structural\Composite
 */
class InputButton implements RenderInterface
{

    /**
     * @var string
     */
    private $name;

    /**
     * InputButton constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return '<button>' . $this->name . '</button>';
    }
}