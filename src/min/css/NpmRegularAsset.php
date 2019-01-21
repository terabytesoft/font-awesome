<?php

namespace assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css webFont minified
 **/
class NpmRegularAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/';

	public $css = [
		'fontawesome-free/css/regular.min.css',
    ];

    public $depends = [
        \assets\fontawesome\min\css\NpmFontAwesomeAsset::class,
	];
}
