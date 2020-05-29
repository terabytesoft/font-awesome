<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Min\Css;

use Yiisoft\Assets\AssetBundle;

final class NpmBrandAsset extends AssetBundle
{
    public ?string $basePath = '@basePath';
    public ?string $baseUrl = '@web';
    public ?string $sourcePath = '@npm/@fortawesome/fontawesome-free/';

    public array $css = [
        'css/brands.min.css'
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class
    ];

    public array $publishOptions = [
        'only' => [
            'css/brands.min.css',
            'css/fontawesome.min.css',
            'webfonts/fa-brands*'
        ],
    ];
}
