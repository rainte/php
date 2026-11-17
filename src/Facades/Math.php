<?php

namespace Rainte\PHP\Facades;

/**
 * @method static string add(string $num1, string $num2, int $scale = 2)
 * @method static string sub(string $num1, string $num2, int $scale = 2)
 * @method static string mul(string $num1, string $num2, int $scale = 2)
 * @method static string div(string $num1, string $num2, int $scale = 2)
 * @method static string percent(string $num1, string $num2, int $scale = 2)
 *
 * @see \Rainte\PHP\Services\Math\Client
 */
class Math extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\MathProvider::class;
}
