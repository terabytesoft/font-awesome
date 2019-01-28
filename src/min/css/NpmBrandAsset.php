<?php

namespace assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmBrandAsset
 *
 * The asset font awesome free brands css webFont minified
 **/
class NpmBrandAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
		'css/brands.min.css',
    ];

    public $depends = [
        \assets\fontawesome\min\css\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'css/brands.min.css',
            'css/fontawesome.min.css',
            'webfonts/fa-brands*',
        ],
    ];
}
