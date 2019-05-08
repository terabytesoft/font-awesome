<?php

namespace TerabyteSoft\Assets\Fontawesome\Min\Js;

use yii\web\AssetBundle;

/**
 * NpmSolidAsset
 *
 * The asset font awesome free solid css svg
 **/
class NpmSolidAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $js = [
		'js/solid.min.js',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Min\Js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/solid.min.js',
            'js/regular.min.js',
            'svgs/solid/*',
        ],
    ];
}
