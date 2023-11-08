<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Client;
use Rainte\PHP\Support\Collection;
use Rainte\PHP\Providers\AbstractProvider;

class ConfigProvider extends AbstractProvider
{
    /**
     * @inheritdoc
     */
    public static function name(): string
    {
        return 'Config';
    }

    /**
     * @inheritdoc
     */
    protected function concrete(Client $app): mixed
    {
        return new Collection($app->config());
    }
}
