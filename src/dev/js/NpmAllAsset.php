<?php

namespace assets\fontawesome\dev\js;

use yii\web\AssetBundle;

/**
 * NpmAllAsset
 *
 * The asset font awesome free all css svg
 **/
class NpmAllAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $js = [
		'js/all.js',
    ];

    public $depends = [
        \assets\fontawesome\dev\js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/all.js',
            'js/fontawesome.js',
            'svgs/*',
        ],
    ];
}
