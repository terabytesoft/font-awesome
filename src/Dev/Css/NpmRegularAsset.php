<?php

namespace TerabyteSoft\Assets\Fontawesome\Dev\Css;

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
        \TerabyteSoft\Assets\Fontawesome\Dev\Css\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'css/fontawesome.css',
            'css/regular.css',
            'webfonts/fa-regular*',
        ],
    ];
}
