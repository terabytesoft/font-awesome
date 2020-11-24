<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="80px">
    </a>
    <a href="https://fontawesome.com/start" target="_blank" rel="external">
        <img src="docs/images/logo-fontawesome.jpg" height="80px">
    </a>
    <h1 align="center">Yii Extension Fontawesome Free Extension</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/yii-extension/fontawesome/v/stable.png)](https://packagist.org/packages/yii-extension/fontawesome)
[![Total Downloads](https://poser.pugx.org/yii-extension/fontawesome/downloads.png)](https://packagist.org/packages/yii-extension/fontawesome)
[![build](https://github.com/yii-extension/fontawesome/workflows/build/badge.svg)](https://github.com/yii-extension/fontawesome/actions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yiisoft/fontawesome/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yiisoft/fontawesome/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/yiisoft/fontawesome/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/yiisoft/fontawesome/?branch=master)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fyiisoft%2Ffontawesome%2Fmaster)](https://dashboard.stryker-mutator.io/reports/github.com/yiisoft/fontawesome/master)
[![static analysis](https://github.com/yiisoft/fontawesome/workflows/static%20analysis/badge.svg)](https://github.com/yiisoft/fontawesome/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yiisoft/fontawesome/coverage.svg)](https://shepherd.dev/github/yiisoft/fontawesome)


### Requirements:

The minimum requirement by this project template that your Web server supports PHP 7.4.0.


### Installation:

The package could be installed via composer:

```php
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

### Run test phpunit:

~~~
vendor/bin/phpunit
~~~
