<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 09:27
 */

namespace Dallask\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Class AccountAbstract
 *
 * @package Dallask\Patterns\Behavioral\ChainOfResponsibility
 */
abstract class AccountAbstract
{

    /**
     * @var
     */
    protected $successor;

    /**
     * @var
     */
    protected $balance;

    /**
     * @param \Dallask\Patterns\Behavioral\ChainOfResponsibility\AccountAbstract $account
     *
     * @return \Dallask\Patterns\Behavioral\ChainOfResponsibility\AccountAbstract
     */
    public function setNext(AccountAbstract $account)
    {
        return $this->successor = $account;
    }

    /**
     * @param float $amountToPay
     *
     * @return string
     */
    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            return sprintf(
                'Paid %s!' . PHP_EOL, $amountToPay
            );
        } elseif ($this->successor) {
            echo 'Cannot pay. Proceeding ..' . PHP_EOL;
            return $this->successor->pay($amountToPay);
        } else {
            throw new Exception('None of the accounts have enough balance');
        }
    }

    /**
     * @param $amountToPay
     *
     * @return bool
     */
    public function canPay($amountToPay)
    {
        return $this->balance >= $amountToPay;
    }
}