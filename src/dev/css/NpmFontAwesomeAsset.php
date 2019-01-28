<?php

namespace assets\fontawesome\dev\css;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeAsset
 *
 * The asset font awesome free css webFont
 **/
class NpmFontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
		'css/fontawesome.css',
    ];

    public $publishOptions = [
        'only' => [
            'css/fontawesome.css',
        ],
    ];
}
