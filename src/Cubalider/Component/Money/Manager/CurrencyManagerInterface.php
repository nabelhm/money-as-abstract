<?php

namespace Cubalider\Component\Money\Manager;

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
     * @return mixed The currency
     */
    public function pick($criteria);
}