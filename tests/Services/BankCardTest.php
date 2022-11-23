<?php

use Rainte\PHP\Facades\BankCard;
use Rainte\PHP\Tests\TestCase;

class BankCardTest extends TestCase
{
    /**
     * @test
     */
    public function testCard()
    {
        $res = BankCard::card('6228480322879495610');

        $this->assertArrayHasKey('validated', $res);
    }
}
