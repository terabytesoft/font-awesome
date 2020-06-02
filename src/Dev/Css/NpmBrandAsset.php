<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Dev\Css;

use Yiisoft\Assets\AssetBundle;

final class NpmBrandAsset extends AssetBundle
{
    public ?string $basePath = '@basePath';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/@fortawesome/fontawesome-free/';

    public array $css = [
        'css/brands.css'
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class
    ];

    public array $publishOptions = [
        'only' => [
            'css/brands.css',
            'css/fontawesome.css',
            'webfonts/fa-brands*'
        ],
    ];
}
