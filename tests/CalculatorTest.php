<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    public function testAdd()
    {
        $this->assertEquals(5, $this->calc->add(2, 3));
    }

    public function testSubtract()
    {
        $this->assertEquals(4, $this->calc->subtract(10, 6));
    }

    public function testMultiply()
    {
        $this->assertEquals(12, $this->calc->multiply(3, 4));
    }

    public function testDivide()
    {
        $this->assertEquals(2, $this->calc->divide(10, 5));
    }

    public function testDivideByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calc->divide(5, 0);
    }
}
