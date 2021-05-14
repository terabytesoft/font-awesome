<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Cdn\Css;

use Yiisoft\Assets\AssetBundle;

final class CdnRegularAsset extends AssetBundle
{
    public bool $cdn = true;

    public array $css = [
        'https://use.fontawesome.com/releases/v5.15.3/css/regular.css',
    ];

    public array $depends = [
        CdnFontAwesomeAsset::class,
    ];
}
