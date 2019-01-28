<?php

namespace assets\fontawesome\dev\css;

use yii\web\AssetBundle;

/**
 * NpmAllAsset
 *
 * The asset font awesome free all css webFont
 **/
class NpmAllAsset extends AssetBundle
{
    public $sourcePath = '@npm/@fortawesome/fontawesome-free/';

	public $css = [
		'css/all.css',
    ];

    public $publishOptions = [
        'only' => [
            'css/all.css',
        ],
    ];
}
