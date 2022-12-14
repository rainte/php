<?php

use Rainte\PHP\Facades\Http;
use Rainte\PHP\Tests\TestCase;

class HttpTest extends TestCase
{
    /**
     * @test
     */
    public function testHttp()
    {
        $url = 'http://www.baidu.com';

        $response = Http::fake()->request('GET', $url);
        $response->getBody()->rewind();
        $status = $response->getStatusCode();

        $this->assertSame(200, $status);
    }
}
