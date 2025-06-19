<?php

namespace RobertWesner\SimpleMvcPhpMonologBundle;

use Monolog\Logger;
use Psr\Log\LoggerInterface;
use RobertWesner\SimpleMvcPhp\Bundles\BundleInterface;
use RobertWesner\SimpleMvcPhp\Configuration\Container;

class MonologBundle implements BundleInterface
{
    /**
     * @param MonologBundleConfiguration|null $configuration
     */
    public static function load(mixed $configuration = null): void
    {
        if (!$configuration instanceof MonologBundleConfiguration) {
            die('Invalid configuration passed to MonologBundle.');
        }

        Container::register(
            LoggerInterface::class,
            new Logger($configuration->name, $configuration->handlers),
        );
    }
}
