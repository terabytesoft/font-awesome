<?php

namespace assets\fontawesome\dev\css;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css webFont
 **/
class NpmRegularAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
		'css/regular.css',
    ];

    public $depends = [
        \assets\fontawesome\dev\css\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'css/fontawesome.css',
            'css/regular.css',
            'webfonts/fa-regular*',
        ],
    ];
}
