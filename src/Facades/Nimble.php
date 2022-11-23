<?php

namespace Rainte\PHP\Facades;

/**
 * @method static Rainte\PHP\Services\Nimble\Arr array(array $data)
 * @method static Rainte\PHP\Services\Nimble\Str string(string $str)
 *
 * @see \Rainte\PHP\Services\Nimble\Client
 */
class Nimble extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\NimbleProvider::class;
}
