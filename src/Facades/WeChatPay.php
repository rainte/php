<?php

namespace Rainte\PHP\Facades;

/**
 * @method WeChatPay\BuilderChainable client()
 * @method string mchSerial()
 * @method mixed mchKey()
 * @method string certSerial()
 * @method mixed certKey()
 * @method string sign(string $prepayid)
 * @method string encrypt(string $str)
 * @method string decrypt(string $ciphertext, string $nonce, string $aad)
 * @method array serve(?Symfony\Component\HttpFoundation\Request $request = null)
 *
 * @see \Rainte\PHP\Services\WeChatPay\Client
 */
class WeChatPay extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\WeChatPayProvider::class;
}
