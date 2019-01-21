<?php

namespace assets\fontawesome\dev\css;

use yii\web\AssetBundle;

/**
 * NpmBrandAsset
 *
 * The asset font awesome free brands css webFont
 **/
class NpmBrandAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/';

	public $css = [
		'fontawesome-free/css/brands.css',
    ];

    public $depends = [
        \assets\fontawesome\dev\css\NpmFontAwesomeAsset::class,
	];
}
