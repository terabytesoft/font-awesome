<?php

namespace TerabyteSoft\Assets\Fontawesome\Dev\Js;

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
		'js/solid.js',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Dev\Js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/fontawesome.js',
            'js/solid.js',
            'svgs/solid/*',
        ],
    ];
}
