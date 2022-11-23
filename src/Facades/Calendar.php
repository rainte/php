<?php

namespace Rainte\PHP\Facades;

/**
 * @method static array statute(int $year)
 *
 * @see \Rainte\PHP\Services\Calendar\Client
 */
class Calendar extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\CalendarProvider::class;
}
