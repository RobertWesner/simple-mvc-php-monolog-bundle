<?php

namespace RobertWesner\SimpleMvcPhpMonologBundle;

use Monolog\Handler\HandlerInterface;

class MonologBundleConfiguration
{
    /**
     * @param HandlerInterface[] $handlers
     */
    public function __construct(
        private(set) string $name,
        private(set) array $handlers,
    ) {}
}
