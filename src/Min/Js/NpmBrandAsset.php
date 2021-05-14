<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Min\Js;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class NpmBrandAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/fortawesome/font-awesome';

    public array $js = [
        'js/brands.min.js',
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class,
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/js/brands.min.js',
                '**/js/fontawesome.min.js',
                '**/svgs/brands/*'
            ),
        ];
    }
}
