<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Dev\Js;

use Yiisoft\Assets\AssetBundle;

final class NpmBrandAsset extends AssetBundle
{
    public ?string $basePath = '@basePath';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/@fortawesome/fontawesome-free/';

    public array $js = [
        'js/brands.js'
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class
    ];

    public array $publishOptions = [
        'only' => [
            'js/brands.js',
            'js/fontawesome.js',
            'svgs/brands/*'
        ],
    ];
}
