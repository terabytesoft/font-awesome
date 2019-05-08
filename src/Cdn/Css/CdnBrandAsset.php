<?php

namespace TerabyteSoft\Assets\Fontawesome\Cdn\Css;

use yii\web\AssetBundle;

/**
 * CdnBrandAsset
 *
 * The asset font awesome free brands css webFont
 **/
class CdnBrandAsset extends AssetBundle
{
	public $css = [
		'https://use.fontawesome.com/releases/v5.6.3/css/brands.css',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Cdn\Css\CdnFontAwesomeAsset::class,
	];
}
