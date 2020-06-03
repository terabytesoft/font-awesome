<?php

declare(strict_types=1);

use Yiisoft\Aliases\Aliases;

return [
    Aliases::class => [
        '@assetsUrl' => '/assets',
        '@assets' => dirname(__DIR__) . '/tests/data/assets',
        '@npm' => dirname(__DIR__) . '/node_modules'
    ]
];
