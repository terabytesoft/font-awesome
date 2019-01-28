<?php

namespace assets\fontawesome\dev\js;

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
        \assets\fontawesome\dev\js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/solid.js',
        ],
    ];
}
