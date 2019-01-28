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
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $js = [
		'js/brands.min.js',
    ];

    public $depends = [
        \assets\fontawesome\min\js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/brands.min.js',
            'js/fontawesome.min.js',
            'svgs/brands/*',
        ],
    ];
}
