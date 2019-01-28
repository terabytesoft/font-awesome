<?php

namespace assets\fontawesome\min\js;

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
        \assets\fontawesome\min\js\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'js/solid.min.js',
        ],
    ];
}
