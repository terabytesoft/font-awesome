<?php

namespace TerabyteSoft\Assets\Fontawesome\Min\Js;

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
        \TerabyteSoft\Assets\Fontawesome\Min\Js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/brands.min.js',
            'js/fontawesome.min.js',
            'svgs/brands/*',
        ],
    ];
}
