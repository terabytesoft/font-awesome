<?php

namespace assets\fontawesome\cdn\css;

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
        \assets\fontawesome\cdn\CdnFontAwesomeAsset::class,
	];
}
