<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Cdn\Css;

use Yiisoft\Assets\AssetBundle;

final class CdnSolidAsset extends AssetBundle
{
    public bool $cdn = true;

    public array $css = [
        'https://use.fontawesome.com/releases/v5.13.0/css/solid.css'
    ];

    public array $depends = [
        CdnFontAwesomeAsset::class
    ];
}
