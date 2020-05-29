<?php

declare(strict_types=1);

use Yiisoft\Aliases\Aliases;

return [
    Aliases::class => [
        '@basePath' => dirname(__DIR__) . '/tests/data/assets',
        '@npm' => dirname(__DIR__) . '/node_modules',
    ]
];
