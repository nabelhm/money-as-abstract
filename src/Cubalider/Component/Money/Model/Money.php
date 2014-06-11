<?php

namespace Cubalider\Component\Money\Model;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class Money implements MoneyInterface
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @param float $amount
     * @param string $currency
     */
    function __construct($amount, $currency)
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
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}