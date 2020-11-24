<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Cdn\Css;

use Yiisoft\Assets\AssetBundle;

final class CdnAllAsset extends AssetBundle
{
    public bool $cdn = true;

    public array $css = [
        'https://use.fontawesome.com/releases/v5.15.1/css/all.css'
    ];
}
