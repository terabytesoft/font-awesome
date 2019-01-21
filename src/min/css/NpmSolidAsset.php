<?php

namespace assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmSolidAsset
 *
 * The asset font awesome free solid css webFont minified
 **/
class NpmSolidAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/';

	public $css = [
		'fontawesome-free/css/solid.min.css',
    ];

    public $depends = [
        \assets\fontawesome\min\css\NpmFontAwesomeAsset::class,
	];
}
