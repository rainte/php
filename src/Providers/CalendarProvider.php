<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Providers\AbstractProvider;

class CalendarProvider extends AbstractProvider
{
    /**
     * @inheritdoc
     */
    public static function name(): string
    {
        return 'Calendar';
    }
}
