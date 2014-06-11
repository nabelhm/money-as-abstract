<?php

namespace Cubalider\Test\Component\Money\Model;

use Cubalider\Component\Money\Entity\Currency;
use Cubalider\Component\Money\Model\Money;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class MoneyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Component\Money\Model\Money::__construct
     * @covers \Cubalider\Component\Money\Model\Money::getAmount
     * @covers \Cubalider\Component\Money\Model\Money::getCurrency
     */
    public function testConstructorAndGetters()
    {
        $amount = 1.1;
        $currency = 'USD';
        $money = new Money($amount, $currency);
        $this->assertEquals(1.1, $money->getAmount());
        $this->assertEquals($currency, $money->getCurrency());
    }
}