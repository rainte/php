<?php

use Rainte\PHP\Facades\Response;
use Rainte\PHP\Tests\TestCase;

class ResponseTest extends TestCase
{
    /**
     * @test
     */
    public function testResponse()
    {
        $res = Response::fake()
            ->setContent('success')
            ->getContent();

        $this->assertSame('success', $res);
    }
}
