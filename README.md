Cubalider Money As Abstract
===========================

This library provides an abstraction for money concepts.

## Currency

You need to create your manager implementing `CurrencyManagerInterface`.

```
// $manager = new CurrencyManager();

// Adds currencies
$currencies = include sprintf("%s/src/Cubalider/Component/Money/Resources/currencies.php", __DIR__);
foreach ($currencies as $code => $name) {
    $manager->add(new Currency($code, $name));
}

// Picks a currency using an array of criteria
$currency = $manager->pick(array('name' => 'USD'));

// Picks a currency using a code directly
$currency = $manager->pick('USD');

// Removes a currency
$manager->remove($currency);

// Collects currencies
$currencies = $manager->collect();
```

## Money

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