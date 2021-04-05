<?php

use PHPUnit\Framework\TestCase;
use tsarev\MyLog;

class MyLogTest extends TestCase
{
    // тест Instance
    public function testInstance()
    {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }

    // тест вывода
    public function testLog()
    {
        $this->expectOutputString('test successful');
        MyLog::log('test');
        MyLog::log(' successful');
        MyLog::write();
    }
}