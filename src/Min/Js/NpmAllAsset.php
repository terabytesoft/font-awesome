<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Min\Js;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class NpmAllAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/fortawesome/font-awesome';

    public array $js = [
        'js/all.min.js',
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/js/all.min.js',
                '**/js/fontawesome.min.js',
                '**/svgs/*',
            ),
        ];
    }
}
