<?php

namespace TerabyteSoft\Assets\Fontawesome\Cdn\Js;

use yii\web\AssetBundle;

/**
 * CdnSolidAsset
 *
 * The asset font awesome free solid css svg
 **/
class CdnSolidAsset extends AssetBundle
{
	public $js = [
		'https://use.fontawesome.com/releases/v5.6.3/js/solid.js',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Cdn\Js\CdnFontAwesomeAsset::class,
	];
}
