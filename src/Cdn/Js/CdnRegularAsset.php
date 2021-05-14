<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Cdn\Js;

use Yiisoft\Assets\AssetBundle;

final class CdnRegularAsset extends AssetBundle
{
    public bool $cdn = true;

    public array $js = [
        'https://use.fontawesome.com/releases/v5.15.3/js/regular.js',
    ];

    public array $depends = [
        CdnFontAwesomeAsset::class,
    ];
}
