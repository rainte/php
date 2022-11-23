<?php

namespace Rainte\PHP\Facades;

/**
 * @method static array files(string $path, string $pattern = "*")
 *
 * @see \Rainte\PHP\Services\File\Client
 */
class File extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\FileProvider::class;
}
