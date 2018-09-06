<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 06-Sep-18
 * Time: 13:25
 */

namespace Dallask\Patterns\Structural\Composite;

class Form implements RenderInterface
{
    private $fields = [];

    public function __construct()
    {

    }

    public function addField(RenderInterface $field)
    {
        $this->fields[] = $field;
    }

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->fields as $fieldItem) {
            $formCode .= $fieldItem->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }
}