<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 07:59
 */

namespace Dallask\Patterns\Behavioral\TemplateMethod;

/**
 * FrenchQuotes, рeализует обрамление строки Французскими кавычками (Ёлочками)
 */
class FrenchQuotes extends AbstractQuotes
{

    /**
     * Открывающая кавычка
     *
     * @return string
     */
    public function open()
    {
        return "«";
    }

    /**
     * Закрывающая кавычка
     *
     * @return string
     */
    public function close()
    {
        return "»";
    }
}