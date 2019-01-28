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
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $js = [
		'js/all.min.js',
    ];

    public $publishOptions = [
        'only' => [
            'js/all.min.js',
        ],
    ];
}
