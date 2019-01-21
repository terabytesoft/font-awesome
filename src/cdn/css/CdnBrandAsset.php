<?php

namespace assets\fontawesome\cdn\css;

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
        \assets\fontawesome\cdn\css\CdnFontAwesomeAsset::class,
	];
}
