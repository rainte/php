<?php

namespace Rainte\PHP\Facades;

/**
 * @method mixed get($key, $default = null)
 * @method bool set($key, $value, $ttl = null)
 * @method bool delete($key)
 * @method bool clear()
 * @method iterable getMultiple($keys, $default = null)
 * @method bool setMultiple($values, $ttl = null)
 * @method bool deleteMultiple($keys)
 * @method bool has($key)
 * @method bool prune()
 * @method reset()
 *
 * @see \Symfony\Component\Cache\Psr16Cache
 */
class Cache extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\CacheProvider::class;
}
