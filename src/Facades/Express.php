<?php

namespace Rainte\PHP\Facades;

/**
 * @method array kdniao(string $url, string $type, array $params)
 *
 * @see \Rainte\PHP\Services\Express\Client
 */
class Express extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\ExpressProvider::class;
}
