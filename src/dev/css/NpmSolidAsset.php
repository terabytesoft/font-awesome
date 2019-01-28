<?php

namespace assets\fontawesome\dev\css;

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
        \assets\fontawesome\dev\css\NpmFontAwesomeAsset::class,
    ];

    public $publishOptions = [
        'only' => [
            'css/solid.css',
        ],
    ];
}
