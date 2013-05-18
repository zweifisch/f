# f [![Build Status](https://travis-ci.org/zweifisch/f.png?branch=master)](https://travis-ci.org/zweifisch/f)

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
* filter
* first
* get
* inc
* keys
* last
* map
* mul
* odd
* partial
* reduce
* rem
* some
* sub
* vals

## tests

```sh
composer install --dev
vendor/bin/phpunit -c tests
```
