<?php

namespace Rainte\PHP\Facades;

/**
 * @method array readfile(string $filename, string $separator = ",")
 * @method void filltrie(array $words)
 * @method void saveLexicon(string $filename)
 * @method void readLexicon(string $filename)
 * @method array search(string $str)
 * @method string replace(string $str, callable|string $to)
 * @method __destruct()
 *
 * @see \Rainte\PHP\Services\Sensitive\Client
 */
class Sensitive extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\SensitiveProvider::class;
}
