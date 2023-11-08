<?php

namespace Rainte\PHP\Providers;

trait ProviderTrait
{
    /**
     * @var array 服务提供者.
     */
    protected $providers = [
        \Rainte\PHP\Providers\BankCardProvider::class,
        \Rainte\PHP\Providers\CacheProvider::class,
        \Rainte\PHP\Providers\CalendarProvider::class,
        \Rainte\PHP\Providers\ConfigProvider::class,
        \Rainte\PHP\Providers\ExpressProvider::class,
        \Rainte\PHP\Providers\FileProvider::class,
        \Rainte\PHP\Providers\HttpProvider::class,
        \Rainte\PHP\Providers\MathProvider::class,
        \Rainte\PHP\Providers\NimbleProvider::class,
        \Rainte\PHP\Providers\RequestProvider::class,
        \Rainte\PHP\Providers\ResponseProvider::class,
        \Rainte\PHP\Providers\SensitiveProvider::class,
        \Rainte\PHP\Providers\SequenceProvider::class,
        \Rainte\PHP\Providers\SnowflakeProvider::class,
        \Rainte\PHP\Providers\TreeProvider::class,
        \Rainte\PHP\Providers\WeChatPayProvider::class,
        \Rainte\PHP\Providers\WeChatProvider::class,
        \Rainte\PHP\Providers\WebHookProvider::class,
    ];
}
