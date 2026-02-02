<?php

use PHPUnit\Framework\TestCase;
use App\Adder;

class AdderTest extends TestCase
{
    public function testAddTwo()
    {
        $adder = new Adder();
        $this->assertEquals(5, $adder->addTwo(3));
    }
}
