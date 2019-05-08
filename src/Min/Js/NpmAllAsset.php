<?php

namespace TerabyteSoft\Assets\Fontawesome\Min\Js;

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
            'js/fontawesome.min.js',
            'svgs/*',
        ],
    ];
}
