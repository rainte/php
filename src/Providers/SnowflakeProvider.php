<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Providers\AbstractProvider;

class SnowflakeProvider extends AbstractProvider
{
    /**
     * @inheritdoc
     */
    public static function name(): string
    {
        return 'Snowflake';
    }
}
