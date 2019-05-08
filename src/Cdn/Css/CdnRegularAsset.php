<?php

namespace TerabyteSoft\Assets\Fontawesome\Cdn\Css;

use yii\web\AssetBundle;

/**
 * CdnRegularAsset
 *
 * The asset font awesome free regular css webFont
 **/
class CdnRegularAsset extends AssetBundle
{
	public $css = [
		'https://use.fontawesome.com/releases/v5.6.3/css/regular.css',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Cdn\Css\CdnFontAwesomeAsset::class,
	];
}
