<?php

namespace assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeAsset
 *
 * The asset font awesome free css webFont minified
 **/
class NpmFontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
		'css/fontawesome.min.css',
    ];

    public $publishOptions = [
        'only' => [
            'css/fontawesome.min.css',
        ],
    ];
}
