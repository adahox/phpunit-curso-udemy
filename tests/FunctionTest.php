<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testSumReturnTheCorrectSum()
    {
        require 'functions.php';

        $this->assertEquals(6, sum(2,4));
        $this->assertEquals(7, sum(3,4));
        $this->assertEquals(9, sum(5,4));
    }

    public function testSUmDoesNotResturnTheIncorrectSum()
    {
        $this->assertNotEquals(4, sum(3,4));
        $this->assertNotEquals(7, sum(2,4));
    }
}