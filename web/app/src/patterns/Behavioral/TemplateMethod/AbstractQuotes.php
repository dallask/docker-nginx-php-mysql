<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 07:57
 */

namespace Dallask\Patterns\Behavioral\TemplateMethod;

/**
 * Class AbstractQuotes
 *
 * @package Dallask\Patterns\Behavioral\TemplateMethod
 */
abstract class AbstractQuotes
{

    /**
     * Template Method
     *
     * @param string $str - строка
     *
     * @return string
     */
    public function quotes($str)
    {
        return $this->open() . $str . $this->close();
    }

    /**
     * Открывающая кавычка
     *
     * @return string
     */
    public abstract function open();

    /**
     * Закрывающая кавычка
     *
     * @return string
     */
    public abstract function close();
}