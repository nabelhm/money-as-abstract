Cubalider Money As Abstract
===========================

This library provides an abstraction for money concepts.

```
// You need to implement your manager using CurrencyManagerInterface
// $manager = new CurrencyManager();

// Adds a currency
$manager->add(new Currency('USD', 'United States Dollar'));

// Picks a currency
$currency = $manager->pick('USD');

// Removes a currency
$manager->remove($currency);
```