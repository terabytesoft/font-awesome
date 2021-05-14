<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Min\Css;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class NpmAllAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/fortawesome/font-awesome';

    public array $css = [
        'css/all.min.css',
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/css/all.min.css',
                '**/css/fontawesome.min.css',
                '**/webfonts/*',
            ),
        ];
    }
}
