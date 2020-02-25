<?php
// Just a simple test to implement PHPUnit

use PHPUnit\Framework\TestCase;

class FileExistsTest extends TestCase
{

    public function testIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testIsFalse()
    {
        $this->assertFalse(false);
    }
}
