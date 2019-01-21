<?php

namespace assets\fontawesome\cdn\js;

use yii\web\AssetBundle;

/**
 * CdnBrandAsset
 *
 * The asset font awesome free brands css svg
 **/
class CdnBrandAsset extends AssetBundle
{
	public $js = [
		'https://use.fontawesome.com/releases/v5.6.3/js/brands.js',
    ];

    public $depends = [
        \assets\fontawesome\cdn\CdnFontAwesomeAsset::class,
	];
}
