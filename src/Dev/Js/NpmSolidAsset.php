<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Dev\Js;

use Yiisoft\Assets\AssetBundle;

final class NpmSolidAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/fortawesome--fontawesome-free';

    public array $js = [
        'js/solid.js'
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class
    ];

    public array $publishOptions = [
        'only' => [
            'js/fontawesome.js',
            'js/solid.js',
            'svgs/solid/*'
        ],
    ];
}
