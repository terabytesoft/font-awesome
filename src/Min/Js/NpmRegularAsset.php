<?php

namespace TerabyteSoft\Assets\Fontawesome\Min\Js;

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
        \TerabyteSoft\Assets\Fontawesome\Min\Js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/fontawesome.min.js',
            'js/regular.min.js',
            'svgs/regular/*',
        ],
    ];
}
