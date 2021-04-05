<?php

use PHPUnit\Framework\TestCase;
use tsarev\LinearEquation;
use tsarev\TsarevException;

class LinearEquationTest extends TestCase
{
    public function testLinearEquation()
    {
        $test = new LinearEquation();
        // общие случаи
        $this->assertEquals([-2], $test->LinearEquation(5, 10));
        $this->assertEquals([3], $test->LinearEquation(4, -12));

        // a = 0
        $this->expectException(TsarevException::class);
        $test->LinearEquation(0, 5);
    }
}