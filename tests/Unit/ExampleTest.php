<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testThatTrueisTrue(): void
    {
        $this->assertFileExists('.env');
    }
}
