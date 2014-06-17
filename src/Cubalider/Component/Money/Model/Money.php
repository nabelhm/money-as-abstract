<?php

namespace Cubalider\Component\Money\Model;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class Money
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var Currency
     */
    private $currency;

    /**
     * @param float $amount
     * @param Currency $currency
     */
    function __construct($amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}