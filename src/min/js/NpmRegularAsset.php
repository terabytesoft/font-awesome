<?php

namespace assets\fontawesome\min\js;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css svg minified
 **/
class NpmRegularAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $js = [
		'js/regular.min.js',
    ];

    public $depends = [
        \assets\fontawesome\min\js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/regular.min.js',
        ],
    ];
}
