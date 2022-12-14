<?php

namespace Rainte\PHP\Facades;

/**
 * @method Symfony\Component\HttpFoundation\Response serve(?callable $handler = null, ?Symfony\Component\HttpFoundation\Request $request = null)
 * @method Psr\Http\Message\ResponseInterface fetch(Psr\Http\Message\UriInterface|string $uri = "", string $method = "GET", array $params = [], array $options = [])
 *
 * @see \Rainte\PHP\Services\WeChat\Client
 */
class WeChat extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\WeChatProvider::class;
}
