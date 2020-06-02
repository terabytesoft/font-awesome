<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Min\Css;

use Yiisoft\Assets\AssetBundle;

final class NpmRegularAsset extends AssetBundle
{
    public ?string $basePath = '@basePath';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/@fortawesome/fontawesome-free/';

    public array $css = [
        'css/regular.min.css'
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class
    ];

    public array $publishOptions = [
        'only' => [
            'css/fontawesome.min.css',
            'css/regular.min.css',
            'svgs/regular/*'
        ],
    ];
}
