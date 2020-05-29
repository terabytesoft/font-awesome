<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\dev\js;

use Yiisoft\Assets\AssetBundle;

final class NpmFontAwesomeAsset extends AssetBundle
{
    public ?string $basePath = '@basePath';
    public ?string $baseUrl = '@web';
    public ?string $sourcePath = '@npm/@fortawesome/fontawesome-free/';

    public array $js = [
        'js/fontawesome.js'
    ];

    public array $publishOptions = [
        'only' => [
            'js/fontawesome.js'
        ],
    ];
}
