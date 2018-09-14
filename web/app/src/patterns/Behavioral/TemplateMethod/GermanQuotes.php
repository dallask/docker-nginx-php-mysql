<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 08:00
 */

namespace Dallask\Patterns\Behavioral\TemplateMethod;

/**
 * GermanQuotes, рeализует обрамление строки Немецкими кавычками (Лапками)
 */
class GermanQuotes extends AbstractQuotes
{

    /**
     * Открывающая кавычка
     *
     * @return string
     */
    public function open()
    {
        return "„";
    }

    /**
     * Закрывающая кавычка
     *
     * @return string
     */
    public function close()
    {
        return "“";
    }
}