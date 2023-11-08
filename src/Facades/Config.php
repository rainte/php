<?php

namespace Rainte\PHP\Facades;

/**
 * @method mixed get(string $key, $default = null)
 * @method void set(string $key, $value)
 * @method bool has(string $key)
 * @method bool offsetExists($offset)
 * @method mixed offsetGet($offset)
 * @method void offsetSet($offset, $value)
 * @method void offsetUnset($offset)
 *
 * @see \Rainte\PHP\Support\Collection
 */
class Config extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\ConfigProvider::class;
}
