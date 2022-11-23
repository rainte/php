<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Providers\AbstractProvider;

class TreeProvider extends AbstractProvider
{
    /**
     * @inheritdoc
     */
    public static function name(): string
    {
        return 'Tree';
    }
}
