<?php

namespace assets\fontawesome\cdn\css;

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
        \assets\fontawesome\cdn\CdnFontAwesomeAsset::class,
	];
}
