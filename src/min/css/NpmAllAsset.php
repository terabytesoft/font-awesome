<?php

namespace assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmAllAsset
 *
 * The asset font awesome free all css webFont minified
 **/
class NpmAllAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
		'css/all.min.css',
    ];

    public $publishOptions = [
        'only' => [
            'css/all.min.css',
        ],
    ];
}
