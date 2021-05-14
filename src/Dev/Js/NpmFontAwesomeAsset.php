<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\dev\js;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class NpmFontAwesomeAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@vendor/fortawesome/font-awesome';

    public array $js = [
        'js/fontawesome.js',
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**/js/fontawesome.js'),
        ];
    }
}
