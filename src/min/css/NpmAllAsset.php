<?php

namespace TerabyteSoft\Assets\Fontawesome\Min\Css;

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
            'css/fontawesome.min.css',
            'webfonts/*',
        ],
    ];
}
