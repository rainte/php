<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Client;
use Rainte\PHP\Contracts\Provider as ContractsProvider;
use Rainte\PHP\Providers\ConfigProvider;

abstract class AbstractProvider implements ContractsProvider
{
    /**
     * @inheritdoc
     */
    public function register(\Pimple\Container $pimple)
    {
        $pimple[static::name()] = function (Client $app) {
            return $this->concrete($app);
        };
    }

    /**
     * Concrete.
     *
     * @param Client $app 程序.
     * @return mixed
     */
    protected function concrete(Client $app): mixed
    {
        $class = '\Rainte\PHP\Services\\' . static::name() . '\Client';

        return new $class($app, $this->config($app));
    }

    /**
     * 配置.
     *
     * @param Client $app 程序.
     * @return array
     */
    protected function config(Client $app): array
    {
        $name = static::name();
        $config = ConfigProvider::name();

        return $app[$config][$name] ?? [];
    }
}
