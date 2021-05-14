<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Dev\Css;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class NpmRegularAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/fortawesome/font-awesome';

    public array $css = [
        'css/regular.css',
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class,
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/css/fontawesome.css',
                '**/css/regular.css',
                '**/webfonts/fa-regular*',
            ),
        ];
    }
}
