<?php

use PHPUnit\Framework\TestCase;
use sampleUnitTestExample\Average;

class AverageTest extends TestCase
{
    protected $average;

    public function setUp()
    {
        $this->average = new Average();
    }

    public function testMeanAverage()
    {
        $numbers = [13, 18, 13, 14, 13, 16, 14, 21, 13];
        $this->assertEquals(15, $this->average->mean($numbers));
    }

    public function testMedianAverage()
    {
        $numbers = [13, 18, 13, 14, 13, 16, 14, 21, 13];
        $this->assertEquals(14, $this->average->median($numbers));
    }

    public function testModeAverage()
    {
        $numbers = [13, 18, 13, 14, 13, 16, 14, 21, 13];
        $this->assertSame(13, $this->average->mode($numbers));
    }
}
