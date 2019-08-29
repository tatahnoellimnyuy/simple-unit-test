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
        $numbers = [5, 2, 1, 6];
        $this->assertEquals(3.5, $this->average->mean($numbers));
    }

    public function testMedianAverage()
    {
        $numbers = [3, 8, 6, 1, 5];
        $this->assertEquals(5, $this->average->median($numbers));
    }
}
