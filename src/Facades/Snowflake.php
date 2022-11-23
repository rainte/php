<?php

namespace Rainte\PHP\Facades;

/**
 * @method string id()
 * @method array parseId(string $id, bool $bin = false)
 * @method int startMicrotime()
 * @method static setStartMicrotime(int $microtime)
 * @method Rainte\PHP\Services\Snowflake\SequenceInterface|callable sequence()
 * @method static setSequence(Rainte\PHP\Services\Snowflake\SequenceInterface|callable $sequence)
 *
 * @see \Rainte\PHP\Services\Snowflake\Client
 */
class Snowflake extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\SnowflakeProvider::class;
}
