<?php

use PHPUnit\Framework\TestCase;
use tsarev\QuadraticEquation;
use tsarev\TsarevException;

class QuadraticEquationTestTest extends TestCase
{
    public function testSolve()
    {
        $test = new QuadraticEquation();
        // общие случаи
        $this->assertEquals([-2.5,3], $test->solve(2,-1,-15));
        $this->assertEquals([-3.5,-0.5], $test->solve(2,8,3.5));

        // a = 0
        $this->assertEquals([-2], $test->solve(0,5,10));

        // дискриминант = 0
        $this->assertEquals([2.5], $test->solve(4,-20,25));

        // дискриминант < 0
        $this->expectException(TsarevException::class);
        $test->solve(10,5,10);
    }
}