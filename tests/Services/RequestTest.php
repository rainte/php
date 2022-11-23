<?php

use Rainte\PHP\Facades\Request;
use Rainte\PHP\Tests\TestCase;

class RequestTest extends TestCase
{
    /**
     * @test
     */
    public function testRequest()
    {
        $scheme = Request::fake()->getScheme();

        $this->assertSame('http', $scheme);
    }
}
