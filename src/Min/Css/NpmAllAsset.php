<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Min\Css;

use Yiisoft\Assets\AssetBundle;

final class NpmAllAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/fortawesome--fontawesome-free';

    public array $css = [
        'css/all.min.css'
    ];

    public array $publishOptions = [
        'only' => [
            'css/all.min.css',
            'css/fontawesome.min.css',
            'webfonts/*'
        ],
    ];
}
