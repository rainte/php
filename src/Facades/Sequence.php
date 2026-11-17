<?php

namespace Rainte\PHP\Facades;

/**
 * @method string id()
 * @method string encode()
 * @method Rainte\PHP\Services\Sequence\SequenceInterface|callable sequence()
 * @method static setSequence(Rainte\PHP\Services\Sequence\SequenceInterface|callable $sequence)
 *
 * @see \Rainte\PHP\Services\Sequence\Client
 */
class Sequence extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\SequenceProvider::class;
}
