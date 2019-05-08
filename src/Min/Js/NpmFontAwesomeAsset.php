<?php

namespace TerabyteSoft\Assets\Fontawesome\Min\Js;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeAsset
 *
 * The asset font awesome free css svg minified
 **/
class NpmFontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $js = [
		'js/fontawesome.min.js',
    ];

    public $publishOptions = [
        'only' => [
            'js/fontawesome.min.js',
        ],
    ];
}
