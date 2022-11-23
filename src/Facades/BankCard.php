<?php

namespace Rainte\PHP\Facades;

/**
 * @method static array banks()
 * @method static string logo(string $bankNo)
 * @method static array card(string $cardNo)
 *
 * @see \Rainte\PHP\Services\BankCard\Client
 */
class BankCard extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\BankCardProvider::class;
}
