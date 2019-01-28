<?php

namespace assets\fontawesome\dev\js;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeAsset
 *
 * The asset font awesome free css svg
 **/
class NpmFontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $js = [
		'js/fontawesome.js',
    ];

    public $publishOptions = [
        'only' => [
            'js/fontawesome.js',
        ],
    ];
}
