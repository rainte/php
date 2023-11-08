<?php

namespace Rainte\PHP\Facades;

/**
 * @method static setData(array $data)
 * @method static setTopValue(string $value)
 * @method static setIdField(string $value)
 * @method static setParentField(string $value)
 * @method static setChildrenField(string $value)
 * @method array build()
 *
 * @see \Rainte\PHP\Services\Tree\Client
 */
class Tree extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\TreeProvider::class;
}
