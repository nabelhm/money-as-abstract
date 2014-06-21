Cubalider Money As Abstract
===========================

This library provides an abstraction for money concepts.

```
// $em is an already created entity manager

// Creates the manager
$manager = new CurrencyManager($em);

// Adds a currency
$manager->add(new Currency('USD', 'United States Dollar'));

// Picks a currency
$currency = $manager->pick('USD');

// Removes a currency
$manager->remove($currency);
```