<?php

namespace Cubalider\Test\Component\Money\Entity;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class currenciesTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $file = sprintf("%s/../../../../../src/Cubalider/Component/Money/Resources/currencies.php", __DIR__);
        $array = require $file;

        $this->assertTrue(is_array($array));
    }
}