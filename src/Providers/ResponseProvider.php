<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Client;
use Rainte\PHP\Providers\AbstractProvider;
use Symfony\Component\HttpFoundation\Response;

class ResponseProvider extends AbstractProvider
{
    /**
     * @inheritdoc
     */
    public static function name(): string
    {
        return 'Response';
    }

    /**
     * @inheritdoc
     */
    protected function concrete(Client $app): mixed
    {
        return new Response();
    }
}
