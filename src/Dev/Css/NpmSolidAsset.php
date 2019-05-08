<?php

namespace TerabyteSoft\Assets\Fontawesome\Dev\Css;

use yii\web\AssetBundle;

/**
 * NpmSolidAsset
 *
 * The asset font awesome free solid css webFont
 **/
class NpmSolidAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
		'css/solid.css',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Dev\Css\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'css/fontawesome.css',
            'css/solid.css',
            'webfonts/fa-solid*',
        ],
    ];
}
