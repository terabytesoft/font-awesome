<?php

namespace assets\fontawesome\min\js;

use yii\web\AssetBundle;

/**
 * NpmAllAsset
 *
 * The asset font awesome free all css svg minified
 **/
class NpmAllAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/';

	public $js = [
		'fontawesome-free/js/all.min.js',
    ];
}
