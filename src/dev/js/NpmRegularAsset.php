<?php

namespace assets\fontawesome\dev\js;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css svg
 **/
class NpmRegularAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/';

	public $js = [
		'fontawesome-free/js/regular.js',
    ];

    public $depends = [
        \assets\fontawesome\dev\js\NpmFontAwesomeAsset::class,
	];
}
