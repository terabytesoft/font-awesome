<?php

namespace assets\fontawesome\min\js;

use yii\web\AssetBundle;

/**
 * NpmBrandAsset
 *
 * The asset font awesome free brands css svg minified
 **/
class NpmBrandAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/';

	public $js = [
		'fontawesome-free/js/brands.min.js',
    ];

    public $depends = [
        \assets\fontawesome\min\js\NpmFontAwesomeAsset::class,
	];
}
