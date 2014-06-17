<?php

namespace Cubalider\Test\Component\Money\Model;

use Cubalider\Component\Money\Model\Currency;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class CurrencyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Component\Money\Model\Currency::__construct
     * @covers \Cubalider\Component\Money\Model\Currency::getCode
     * @covers \Cubalider\Component\Money\Model\Currency::getName
     */
    public function testConstructorAndGetters()
    {
        $currency = new Currency('USD', 'Dollar');
        $this->assertEquals('USD', $currency->getCode());
        $this->assertEquals('Dollar', $currency->getName());
    }
}