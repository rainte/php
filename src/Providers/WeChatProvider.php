<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Providers\AbstractProvider;

class WeChatProvider extends AbstractProvider
{
    /**
     * @inheritdoc
     */
    public static function name(): string
    {
        return 'WeChat';
    }
}
