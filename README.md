Cubalider Money As Abstract
===========================

This library provides an abstraction for money concepts.

# Currency Manager

You need to create your manager implementing CurrencyManagerInterface.

```
// $manager = new CurrencyManager();

// Adds a currency
$manager->add(new Currency('USD', 'United States Dollar'));

// Picks a currency
$currency = $manager->pick('USD');

// Removes a currency
$manager->remove($currency);
```

# Money

Money is useful for objects with price or money related properties.

```
use Cubalider\Component\Money\Model\Currency;
use Cubalider\Component\Money\Model\Money;

class Product
{
    /**
     * @var float;
     */
    private $price;

    /**
     * @var Currency;
     */
    private $currency;

    public function getPrice()
    {
        return new Money($this->price, $this->currency);
    }
}
```