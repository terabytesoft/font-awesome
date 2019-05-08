<?php

namespace TerabyteSoft\Assets\Fontawesome\Cdn\Css;

use yii\web\AssetBundle;

/**
 * CdnSolidAsset
 *
 * The asset font awesome free solid css webFont
 **/
class CdnSolidAsset extends AssetBundle
{
	public $css = [
		'https://use.fontawesome.com/releases/v5.6.3/css/solid.css',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Cdn\Css\CdnFontAwesomeAsset::class,
	];
}
