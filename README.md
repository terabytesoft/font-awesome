<p align="center">
    <a href="https://github.com/yii-extension" target="_blank">
        <img src="https://lh3.googleusercontent.com/ehSTPnXqrkk0M3U-UPCjC0fty9K6lgykK2WOUA2nUHp8gIkRjeTN8z8SABlkvcvR-9PIrboxIvPGujPgWebLQeHHgX7yLUoxFSduiZrTog6WoZLiAvqcTR1QTPVRmns2tYjACpp7EQ=w2400" height="80px">
    </a>
    <a href="https://fontawesome.com/start" target="_blank" rel="external">
        <img src="docs/images/logo-fontawesome.jpg" height="80px">
    </a>
    <h1 align="center">Yii Extension Fontawesome Free Extension</h1>
    <br>
</p>

[![Total Downloads](https://poser.pugx.org/yii-extension/fontawesome/downloads.png)](https://packagist.org/packages/yii-extension/fontawesome)
[![build](https://github.com/yii-extension/fontawesome/workflows/build/badge.svg)](https://github.com/yii-extension/fontawesome/actions)
[![static analysis](https://github.com/yii-extension/fontawesome/workflows/static%20analysis/badge.svg)](https://github.com/yii-extension/fontawesome/actions?query=workflow%3A%22static+analysis%22)


### Installation:

```shell
composer require yii-extension/fontawesome
```

### How to use:

The package provides all available versions CDN, DEV, MIN.

In view (Example CDN All fonts css):
```php
<?php

declare(strict_types=1);

use Yii\Extension\Fontawesome\Cdn\Css\CdnAllAsset;

$assetManager->register([
    CdnAllAsset::class,
]);

$this->setCssFiles($assetManager->getCssFiles());
$this->setJsFiles($assetManager->getJsFiles());

```

In view (Example DEV brand fonts js):
```php
<?php

declare(strict_types=1);

use Yii\Extension\Fontawesome\Dev\Js\NpmBrandAsset;

$assetManager->register([
    NpmBrandAsset::class,
]);

$this->setCssFiles($assetManager->getCssFiles());
$this->setJsFiles($assetManager->getJsFiles());

```

In view (Example MIN solid fonts css):
```php
<?php

declare(strict_types=1);

use Yii\Extension\Fontawesome\Min\Css\NpmSolidAsset;

$assetManager->register([
    NpmSolidAsset::class,
]);

$this->setCssFiles($assetManager->getCssFiles());
$this->setJsFiles($assetManager->getJsFiles());

```

### Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

### Mutation testing

The package tests are checked with [Infection](https://infection.github.io/) mutation framework. To run it:

```shell
./vendor/bin/infection
```

### Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/). To run static analysis:

```shell
./vendor/bin/psalm
```
