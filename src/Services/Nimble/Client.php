<?php

namespace Rainte\PHP\Services\Nimble;

use Rainte\PHP\Services\Nimble\Arr;
use Rainte\PHP\Services\Nimble\Str;

class Client extends \Rainte\PHP\Services\AbstractService
{
    /**
     * 数组.
     *
     * @param array $data 数据.
     * @return Arr
     */
    public static function array(array $data): Arr
    {
        return new Arr($data);
    }

    /**
     * 字符串.
     *
     * @param string $str 字符串.
     * @return Str
     */
    public static function string(string $str): Str
    {
        return new Str($str);
    }
}
