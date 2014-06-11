<?php

namespace Cubalider\Component\Money\Model;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface MoneyInterface
{
    /**
     * @return float
     */
    public function getAmount();

    /**
     * @return string
     */
    public function getCurrency();
}