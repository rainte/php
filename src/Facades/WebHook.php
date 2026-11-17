<?php

namespace Rainte\PHP\Facades;

/**
 * @method static setRequest(Symfony\Component\HttpFoundation\Request $request)
 * @method bool checkSign()
 * @method bool checkRepository()
 * @method array exec()
 * @method void log(mixed $data)
 * @method bool run()
 *
 * @see \Rainte\PHP\Services\WebHook\Client
 */
class WebHook extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\WebHookProvider::class;
}
