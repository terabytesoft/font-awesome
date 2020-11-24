<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Tests;

use Exception;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Assets\AssetConverter;
use Yiisoft\Assets\AssetConverterInterface;
use Yiisoft\Assets\AssetManager;
use Yiisoft\Assets\AssetPublisher;
use Yiisoft\Assets\AssetPublisherInterface;
use Yiisoft\Di\Container;
use Yiisoft\Factory\Definitions\Reference;
use Yiisoft\Files\FileHelper;

abstract class TestCase extends BaseTestCase
{
    private ContainerInterface $container;
    protected AssetManager $assetManager;
    protected Aliases $aliases;

    protected function setUp(): void
    {
        parent::setUp();

        $this->container = new Container($this->config());
        $this->assetManager = $this->container->get(AssetManager::class);
        $this->aliases = $this->container->get(Aliases::class);
    }

    protected function removeAssets(string $basePath): void
    {
        $handle = opendir($dir = $this->aliases->get($basePath));

        if ($handle === false) {
            throw new Exception("Unable to open directory: $dir");
        }

        while (($file = readdir($handle)) !== false) {
            if ($file === '.' || $file === '..' || $file === '.gitignore') {
                continue;
            }
            $path = $dir . DIRECTORY_SEPARATOR . $file;
            if (is_dir($path)) {
                FileHelper::removeDirectory($path);
            } else {
                FileHelper::unlink($path);
            }
        }

        closedir($handle);
    }

    private function config(): array
    {
        return [
            Aliases::class => [
                '__construct()' => [
                    [
                        '@assetsUrl' => '/assets',
                        '@assets' => dirname(__DIR__) . '/tests/data/assets',
                        '@npm' => dirname(__DIR__) . '/node_modules'
                    ]
                ]
            ],

            LoggerInterface::class => NullLogger::class,

            AssetConverterInterface::class => AssetConverter::class,

            AssetPublisherInterface::class => AssetPublisher::class,

            AssetManager::class => [
                '__class' => AssetManager::class,
                'setConverter()' => [Reference::to(AssetConverterInterface::class)],
                'setPublisher()' => [Reference::to(AssetPublisherInterface::class)],

            ]
        ];
    }
}
