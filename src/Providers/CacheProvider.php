<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Client;
use Rainte\PHP\Providers\AbstractProvider;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Psr16Cache;

class CacheProvider extends AbstractProvider
{
    /**
     * @inheritdoc
     */
    public static function name(): string
    {
        return 'Cache';
    }

    /**
     * @inheritdoc
     */
    protected function concrete(Client $app): mixed
    {
        $adapter = new FilesystemAdapter($app::name(), 1500);

        return new Psr16Cache($adapter);
    }
}
