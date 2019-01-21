<?php

namespace assets\fontawesome\min\js;

use yii\web\AssetBundle;

/**
 * NpmSolidAsset
 *
 * The asset font awesome free solid css svg
 **/
class NpmSolidAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/';

	public $js = [
		'fontawesome-free/js/solid.min.js',
    ];

    public $depends = [
        \assets\fontawesome\min\js\NpmFontAwesomeAsset::class,
	];
}
