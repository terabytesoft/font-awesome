<?php

namespace TerabyteSoft\Assets\Fontawesome\Min\Css;

use yii\web\AssetBundle;

/**
 * NpmSolidAsset
 *
 * The asset font awesome free solid css webFont minified
 **/
class NpmSolidAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
        'css/solid.min.css',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Min\Css\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'css/fontawesome.min.css',
            'css/solid.min.css',
            'webfonts/fa-solid*',
        ],
    ];
}
