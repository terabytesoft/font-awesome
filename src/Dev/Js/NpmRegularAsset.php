<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Dev\Js;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class NpmRegularAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@vendor/fortawesome/font-awesome';

    public array $js = [
        'js/regular.js',
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class,
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/js/fontawesome.js',
                '**/js/regular.js',
                '**/svgs/regular/*',
            ),
        ];
    }
}
