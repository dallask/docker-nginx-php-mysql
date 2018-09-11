<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 09:31
 */

namespace Dallask\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Class PayPal
 *
 * @package Dallask\Patterns\Behavioral\ChainOfResponsibility
 */
class PayPal extends AccountAbstract
{

    /**
     * @var float
     */
    protected $balance;

    /**
     * PayPal constructor.
     *
     * @param float $balance
     */
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}