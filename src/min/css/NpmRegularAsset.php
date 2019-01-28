<?php

namespace assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css webFont minified
 **/
class NpmRegularAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
		'css/regular.min.css',
    ];

    public $depends = [
        \assets\fontawesome\min\css\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'css/regular.min.css',
        ],
    ];
}
