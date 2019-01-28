<?php

namespace assets\fontawesome\dev\js;

use yii\web\AssetBundle;

/**
 * NpmBrandAsset
 *
 * The asset font awesome free brands css svg
 **/
class NpmBrandAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $js = [
		'js/brands.js',
    ];

    public $depends = [
        \assets\fontawesome\dev\js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/brands.js',
            'js/fontawesome.js',
            'svgs/brands/*',
        ],
    ];
}
