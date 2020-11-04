# Yii2 string helpers

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/hyperia-sk/yii2-string-helpers/master/LICENSE)

> Extension for Yii2 string helpers

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```shell
composer require hyperia/yii2-string-helpers:"^1.0"
```

or add

```
"hyperia/yii2-string-helpers": "^1.0"
```

to the require section of your composer.json.

## Available Methods

- contains
- isLonger
- isShorter
- length
- toLower
- toUpper
- firstCharToUpper
- removeAccent

## Usage

```php
use hyperia\helpers\StringHelper;

echo StringHelper::isLonger('This is test string', 12); // 1
echo StrinhHelper::removeAccent('Ħí ŧħə®ë, юßť å test!'); // Hi there, jusst a test!
echo StringHelper::contains('is', 'This is test string'); // 1
```

## Tests
```
./vendor/bin/phpunit
```