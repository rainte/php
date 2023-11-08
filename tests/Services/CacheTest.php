<?php

use Rainte\PHP\Facades\Cache;
use Rainte\PHP\Tests\TestCase;

class CacheTest extends TestCase
{
    /**
     * @test
     */
    public function testCache()
    {
        $client = Cache::fake();
        $client->set('cache.test', 'test');
        $value = $client->get('cache.test');

        $this->assertSame('test', $value);
    }
}
