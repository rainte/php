<?php

namespace Rainte\PHP\Providers;

use Rainte\PHP\Providers\AbstractProvider;

class MathProvider extends AbstractProvider
{
    /**
     * @inheritdoc
     */
    public static function name(): string
    {
        return 'Math';
    }
}
