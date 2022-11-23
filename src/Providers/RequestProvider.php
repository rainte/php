<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Client;
use Rainte\PHP\Providers\AbstractProvider;
use Symfony\Component\HttpFoundation\Request;

class RequestProvider extends AbstractProvider
{
    /**
     * @inheritdoc
     */
    public static function name(): string
    {
        return 'Request';
    }

    /**
     * @inheritdoc
     */
    protected function concrete(Client $app): mixed
    {
        return Request::createFromGlobals();
    }
}
