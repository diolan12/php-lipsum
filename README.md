# PHP Lorem Ipsum Generator

[![PHP Composer](https://github.com/diolan12/php-lipsum/actions/workflows/php.yml/badge.svg)](https://github.com/diolan12/php-lipsum/actions/workflows/php.yml)
[![Downloads](https://img.shields.io/packagist/dt/diolan12/php-lipsum)](https://packagist.org/packages/diolan12/php-lipsum)
[![Latest Stable Version](https://img.shields.io/packagist/v/diolan12/php-lipsum)](https://packagist.org/packages/diolan12/php-lipsum)
[![License](https://img.shields.io/packagist/l/diolan12/php-lipsum)](https://packagist.org/packages/diolan12/php-lipsum)

 PHP Lorem Ipsum generator

 Github [diolan12/php-lipsum](https://github.com/diolan12/php-lipsum)

 Packagist [diolan12/php-lipsum](https://packagist.org/packages/diolan12/php-lipsum)

## Installation

```cli
composer require diolan12/php-lipsum
```

## Usage

### Class Instantiation

```php
use Diolan12\LoremIpsum;


$lipsum = new LoremIpsum();
```

or without `use` import

```php
$lipsum = new \Diolan12\LoremIpsum();
```

instantiation via static method

```php
use Diolan12\LoremIpsum;


$lipsum = LoremIpsum::instance();
```

or without `use` import

```php
$lipsum = \Diolan12\LoremIpsum::instance();
```

### Words generation

This method has default value of int 2

```php
use Diolan12\LoremIpsum;


$lipsum = LoremIpsum::instance();
echo $lipsum->words()."\n";
echo $lipsum->words(5);
```

produce:

```cli
Lorem ipsum
Lorem ipsum dolor sit amet,
```

### Sentences generation

This method has default value of int 1

```php
use Diolan12\LoremIpsum;


$lipsum = LoremIpsum::instance();
echo $lipsum->sentences()."\n\n";
echo $lipsum->sentences(2);
```

produce:

```cli
Lorem ipsum dolor sit amet, consectetur adipiscing elit.

lit. Maecenas mollis vehicula urna, ac dictum turpis vulputate rutrum.
```

### Paragraphs generation

This method has default value of int 1

```php
use Diolan12\LoremIpsum;


$lipsum = LoremIpsum::instance();
echo $lipsum->paragraphs();
```

produce:

```cli
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis vehicula urna, ac dictum turpis vulputate rutrum. Nulla pharetra massa ligula, a malesuada nibh vehicula nec. Morbi rhoncus sagittis accumsan. Nulla lacinia ex a vehicula cursus. Nunc pulvinar finibus pulvinar. Maecenas eleifend ut sapien a pellentesque. Vestibulum justo purus, tristique quis enim et, dignissim volutpat arcu. Aliquam erat volutpat. In hac habitasse platea dictumst. Nulla et malesuada turpis, ac finibus enim. Fusce non arcu ut est imperdiet mollis. Mauris ultrices purus a tortor consequat rhoncus. Sed eu lacus ac odio fermentum ullamcorper ac rutrum ipsum. Vestibulum lobortis dolor pretium aliquet mollis. Curabitur euismod ante commodo neque ornare, in semper nunc gravida. Ut pretium tellus pulvinar dolor lacinia, vel pretium lacus dictum.
```

### Using Wrapper

We recommend you to use static method instantiation on the class generation. The wrap method has default `<p>` tag value, returning the class instance of `Diolan12\LoremIpsum`

```php
use Diolan12\LoremIpsum;


echo LoremIpsum::instance()->wrap()->words(3)."\n";
echo LoremIpsum::instance()->wrap('span')->words(3);
```

```cli
<p>Lorem ipsum dolor</p>
<span>Lorem ipsum dolor</span>
```

Wrapper method can be use on all method `words()`, `sentences()`, and `paragraphs()`

Here is example when using wrapper with single instance of the class.

```php
use Diolan12\LoremIpsum;


$lipsum = LoremIpsum::instance();

echo $lipsum->words()."\n";

$lipsum->wrap(); // set wrapper with default tag <p>
echo $lipsum->words()."\n";

$lipsum->wrap(null); // disable wrapper with null value
echo $lipsum->words()."\n";

$lipsum->wrap('span'); // set wrapper with <span>
echo $lipsum->words()."\n";
```

```cli
Lorem ipsum
<p>Lorem ipsum</p>
<span>Lorem ipsum</span>
```

## Dev Test

```cli
./vendor/bin/phpunit tests
```
