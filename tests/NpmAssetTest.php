<?php

declare(strict_types=1);

namespace Yii\Extension\FontAwesome\Tests;

use Yii\Extension\Fontawesome\Tests\TestCase;
use Yiisoft\Assets\AssetBundle;

final class NpmAssetTest extends TestCase
{
    /**
     * @return array
     */
    public function registerCdnDataProvider(): array
    {
        return [
            [
                'Css',
                \Yii\Extension\Fontawesome\Dev\Css\NpmFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Dev\Css\NpmBrandAsset::class,
                \Yii\Extension\Fontawesome\Dev\Css\NpmFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Dev\Css\NpmRegularAsset::class,
                \Yii\Extension\Fontawesome\Dev\Css\NpmFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Dev\Css\NpmSolidAsset::class,
                \Yii\Extension\Fontawesome\Dev\Css\NpmFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Min\Css\NpmFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Min\Css\NpmBrandAsset::class,
                \Yii\Extension\Fontawesome\Min\Css\NpmFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Min\Css\NpmRegularAsset::class,
                \Yii\Extension\Fontawesome\Min\Css\NpmFontAwesomeAsset::class,
            ],
            [
                'Css',
                \Yii\Extension\Fontawesome\Min\Css\NpmSolidAsset::class,
                \Yii\Extension\Fontawesome\Min\Css\NpmFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Dev\Js\NpmFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Dev\Js\NpmBrandAsset::class,
                \Yii\Extension\Fontawesome\Dev\Js\NpmFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Dev\Js\NpmRegularAsset::class,
                \Yii\Extension\Fontawesome\Dev\Js\NpmFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Dev\Js\NpmSolidAsset::class,
                \Yii\Extension\Fontawesome\Dev\Js\NpmFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Min\Js\NpmFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Min\Js\NpmBrandAsset::class,
                \Yii\Extension\Fontawesome\Min\Js\NpmFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Min\Js\NpmRegularAsset::class,
                \Yii\Extension\Fontawesome\Min\Js\NpmFontAwesomeAsset::class,
            ],
            [
                'Js',
                \Yii\Extension\Fontawesome\Min\Js\NpmSolidAsset::class,
                \Yii\Extension\Fontawesome\Min\Js\NpmFontAwesomeAsset::class,
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
            $dependUrl = $this->assetPublisher->getPublishedUrl($depend->sourcePath) . '/' . $depend->css[0];
            $this->assertEquals($dependUrl, $this->assetManager->getCssFiles()[$dependUrl][0]);
        } elseif ($type === 'Css') {
            $bundleUrl = $this->assetPublisher->getPublishedUrl($bundle->sourcePath) . '/' . $bundle->css[0];
            $this->assertEquals($bundleUrl, $this->assetManager->getCssFiles()[$bundleUrl][0]);
        }

        if ($cdnDepend !== null && $type === 'Js') {
            $dependUrl = $this->assetPublisher->getPublishedUrl($depend->sourcePath) . '/' . $depend->js[0];
            $this->assertEquals($dependUrl, $this->assetManager->getJsFiles()[$dependUrl][0]);
        } elseif ($type === 'Js') {
            $bundleUrl = $this->assetPublisher->getPublishedUrl($bundle->sourcePath) . '/' . $bundle->js[0];
            $this->assertEquals($bundleUrl, $this->assetManager->getJsFiles()[$bundleUrl][0]);
        }

        $this->removeAssets('@assets');
    }
}
