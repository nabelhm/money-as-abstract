<?php

namespace Cubalider\Component\Money\Manager;

use Cubalider\Component\Money\Model\Currency;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface CurrencyManagerInterface
{
    /**
     * Adds given currency.
     *
     * @api
     *
     * @param Currency $currency
     */
    public function add(Currency $currency);

    /**
     * Picks a currency using given criteria.
     * Criteria can be also a currency code.
     *      
     * @api
     *
     * @param array|string $criteria
     *
     * @return Currency The currency
     */
    public function pick($criteria);

    /**
     * Gets all currencies.
     *
     * @api
     *
     * @return Currency[]
     */
    public function collect();

    /**
     * Removes given currency.
     *
     * @api
     *
     * @param Currency $currency
     */
    public function remove(Currency $currency);
}