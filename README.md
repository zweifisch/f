# f

functional building blocks for php

## synopsis

```php
$f = \f\F::get();

$f->map($f->comp($f->even,$f->inc), [1,2]);
```

## available functions

* add
* complement
* comp
* dec
* div
* even
* every
* first
* get
* inc
* keys
* last
* map
* minus
* mul
* odd
* partial
* rem
* some
* vals

## tests

```sh
composer install --dev
vendor/bin/phpunit -c tests
```
