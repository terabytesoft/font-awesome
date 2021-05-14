<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Tests;

use Exception;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use ReflectionClass;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Assets\AssetConverter;
use Yiisoft\Assets\AssetConverterInterface;
use Yiisoft\Assets\AssetLoader;
use Yiisoft\Assets\AssetLoaderInterface;
use Yiisoft\Assets\AssetManager;
use Yiisoft\Assets\AssetPublisher;
use Yiisoft\Assets\AssetPublisherInterface;
use Yiisoft\Di\Container;
use Yiisoft\Factory\Definition\Reference;
use Yiisoft\Files\FileHelper;

abstract class TestCase extends BaseTestCase
{
    private ContainerInterface $container;
    protected Aliases $aliases;
    protected AssetManager $assetManager;
    protected AssetPublisherInterface $assetPublisher;

    protected function setUp(): void
    {
        parent::setUp();

        $this->container = new Container($this->config());
        $this->aliases = $this->container->get(Aliases::class);
        $this->assetManager = $this->container->get(AssetManager::class);
        $this->assetPublisher = $this->container->get(AssetPublisherInterface::class);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->removeAssets('@assets');

        unset($this->aliases, $this->assetManager, $this->assetPublisher);
    }

    /**
     * Returns the registered asset bundles.
     *
     * @param AssetManager $manager
     *
     * @return array The registered asset bundles {@see AssetManager::$registeredBundles}.
     */
    protected function getRegisteredBundles(AssetManager $manager): array
    {
        $reflection = new ReflectionClass($manager);
        $property = $reflection->getProperty('registeredBundles');
        $property->setAccessible(true);
        $registeredBundles = $property->getValue($manager);
        $property->setAccessible(false);
        return $registeredBundles;
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

            AssetLoaderInterface::class => AssetLoader::class,

            AssetManager::class => [
                'class' => AssetManager::class,
                'withConverter()' => [Reference::to(AssetConverterInterface::class)],
                'withPublisher()' => [Reference::to(AssetPublisherInterface::class)],

            ]
        ];
    }
}
