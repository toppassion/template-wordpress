<?php
namespace App\Test\Example;

use PHPUnit\Framework\TestCase;

/**
 * PHPUnit Example Test
 *
 * @group  example
 */
class PHPUnitExampleTest extends TestCase
{

    /**
     * Example unit test
     *
     * The list of all available assertions is here:
     * https://phpunit.de/manual/current/en/appendixes.assertions.html
     */
    public function testExampleTest(): void
    {
        $this->assertTrue(true, "Truth is a lie");
    }
}
