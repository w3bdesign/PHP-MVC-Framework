<?php

use PHPUnit\Framework\TestCase;

class FileExistsTest extends TestCase
{
    public function testFileExists()
    {
        $this->assertFileExists('index.php');
    }

    public function testIsTrue()
    {
        $this->assertTrue(true);
    }
}
