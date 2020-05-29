<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Cdn\Js;

use Yiisoft\Assets\AssetBundle;

final class CdnFontAwesomeAsset extends AssetBundle
{
    public bool $cdn = true;

    public array $js = [
        'https://use.fontawesome.com/releases/v5.13.0/js/fontawesome.js'
    ];
}
