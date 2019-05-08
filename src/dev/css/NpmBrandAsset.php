<?php

namespace TerabyteSoft\Assets\Fontawesome\Dev\Css;

use yii\web\AssetBundle;

/**
 * NpmBrandAsset
 *
 * The asset font awesome free brands css webFont
 **/
class NpmBrandAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
		'css/brands.css',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Dev\Css\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'css/brands.css',
            'css/fontawesome.css',
            'webfonts/fa-brands*',
        ],
    ];
}
