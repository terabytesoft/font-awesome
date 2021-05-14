<?php

declare(strict_types=1);

namespace Yii\Extension\FontAwesome\Tests;

use Yii\Extension\Fontawesome\Tests\TestCase;
use Yiisoft\Assets\AssetBundle;

final class CdnAssetTest extends TestCase
{
    /**
     * @return array
     */
    public function registerCdnDataProvider(): array
    {
        return [
            [
                'Css',
                \Yii\Extension\Fontawesome\Cdn\Css\CdnFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Cdn\Css\CdnBrandAsset::class,
                \Yii\Extension\Fontawesome\Cdn\Css\CdnFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Cdn\Css\CdnRegularAsset::class,
                \Yii\Extension\Fontawesome\Cdn\Css\CdnFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Cdn\Css\CdnSolidAsset::class,
                \Yii\Extension\Fontawesome\Cdn\Css\CdnFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Cdn\Js\CdnFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Cdn\Js\CdnBrandAsset::class,
                \Yii\Extension\Fontawesome\Cdn\Js\CdnFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Cdn\Js\CdnRegularAsset::class,
                \Yii\Extension\Fontawesome\Cdn\Js\CdnFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Cdn\Js\CdnSolidAsset::class,
                \Yii\Extension\Fontawesome\Cdn\Js\CdnFontAwesomeAsset::class,
            ],
        ];
    }

    /**
     * @dataProvider registerCdnDataProvider
     *
     * @param string $type
     * @param string $cdnBundle
     * @param string $cdnDepend
     */
    public function testCdnAssetRegister(string $type, string $cdnBundle, ?string $cdnDepend = null): void
    {
        $bundle = new $cdnBundle();

        if ($cdnDepend !== null) {
            $depend = new $cdnDepend();
        }

        $this->assertEmpty($this->getRegisteredBundles($this->assetManager));

        $this->assetManager->register([$cdnBundle]);

        if ($cdnDepend !== null && $type === 'Css') {
            $this->assertEquals($depend->css[0], $this->assetManager->getCssFiles()[$depend->css[0]][0]);
        } elseif ($type === 'Css') {
            $this->assertEquals($bundle->css[0], $this->assetManager->getCssFiles()[$bundle->css[0]][0]);
        }

        if ($cdnDepend !== null && $type === 'Js') {
            $this->assertEquals($depend->js[0], $this->assetManager->getJsFiles()[$depend->js[0]][0]);
        } elseif ($type === 'Js') {
            $this->assertEquals($bundle->js[0], $this->assetManager->getJsFiles()[$bundle->js[0]][0]);
        }

        $this->removeAssets('@assets');
    }

    /**
     * @dataProvider registerCdnDataProvider
     *
     * @param string $type
     * @param string $cdnBundle
     * @param string $cdnDepend
     */
    public function testCdnAssetDependency(string $type, string $cdnBundle, ?string $cdnDepend = null): void
    {
        $this->assertEmpty($this->getRegisteredBundles($this->assetManager));

        $this->assetManager->register([$cdnBundle]);

        if ($cdnDepend !== null) {
            $this->assertCount(2, $this->getRegisteredBundles($this->assetManager));
        } else {
            $this->assertCount(1, $this->getRegisteredBundles($this->assetManager));
        }

        $this->assertArrayHasKey($cdnBundle, $this->getRegisteredBundles($this->assetManager));
        $this->assertInstanceOf(AssetBundle::class, $this->getRegisteredBundles($this->assetManager)[$cdnBundle]);

        if ($cdnDepend !== null) {
            $this->assertArrayHasKey($cdnDepend, $this->getRegisteredBundles($this->assetManager));
            $this->assertInstanceOf(AssetBundle::class, $this->getRegisteredBundles($this->assetManager)[$cdnDepend]);
        }
    }
}
