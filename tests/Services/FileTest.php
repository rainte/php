<?php

use Rainte\PHP\Facades\File;
use Rainte\PHP\Tests\TestCase;

class FileTest extends TestCase
{
    /**
     * @test
     */
    public function testFiles()
    {
        $res = File::files(__DIR__, '*?Test.php');

        $this->assertFileExists($res[0]);
    }
}
