<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 09:34
 */

namespace Dallask\Patterns\Behavioral\ChainOfResponsibility;

use PHPUnit\Framework\TestCase;

class AccountAbstractTest extends TestCase
{

    public function testPay()
    {
        $bank = new Bank(100);          // Bank with balance 100
        $paypal = new PayPal(200);      // Paypal with balance 200
        $bitcoin = new Bitcoin(300);    // Bitcoin with balance 300

        $bank->setNext($paypal);
        $paypal->setNext($bitcoin);

        // Let's try to pay using the first priority i.e. bank
        $this->assertEquals(
            'Paid 259!' . PHP_EOL, $bank->pay(259)
        );

    }
}
