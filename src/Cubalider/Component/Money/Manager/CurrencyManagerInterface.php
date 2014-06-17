<?php

namespace Cubalider\Component\Money\Manager;

use Cubalider\Component\Money\Model\Currency;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface CurrencyManagerInterface
{
    /**
     * Picks a currency using given criteria
     *      
     * @api
     * @param mixed $criteria
     * @return Currency The currency
     */
    public function pick($criteria);
}