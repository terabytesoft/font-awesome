<?php

namespace TerabyteSoft\Assets\Fontawesome\Min\Css;

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
        \TerabyteSoft\Assets\Fontawesome\Min\Css\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'css/fontawesome.css',
            'css/fontawesome.min.css',
            'svgs/regular/*',
        ],
    ];
}
