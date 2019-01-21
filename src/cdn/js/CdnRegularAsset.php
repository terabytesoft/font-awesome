<?php

namespace assets\fontawesome\cdn\js;

use yii\web\AssetBundle;

/**
 * CdnRegularAsset
 *
 * The asset font awesome free regular css svg
 **/
class CdnRegularAsset extends AssetBundle
{
	public $js = [
		'https://use.fontawesome.com/releases/v5.6.3/js/regular.js',
    ];

    public $depends = [
        \assets\fontawesome\cdn\CdnFontAwesomeAsset::class,
	];
}
