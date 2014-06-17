<?php

namespace Cubalider\Test\Component\Money\Model;

use Cubalider\Component\Money\Model\Currency;
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
        $currency = new Currency();
        $currency->setCode('USD');
        $money = new Money(2, $currency);

        $this->assertEquals(2, $money->getAmount());
        $this->assertEquals($currency, $money->getCurrency());
    }
}