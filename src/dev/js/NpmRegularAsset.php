<?php

namespace TerabyteSoft\Assets\Fontawesome\Dev\Js;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css svg
 **/
class NpmRegularAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $js = [
		'js/regular.js',
    ];

    public $depends = [
        \TerabyteSoft\Assets\Fontawesome\Dev\Js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/fontawesome.js',
            'js/regular.js',
            'svgs/regular/*',
        ],
    ];
}
