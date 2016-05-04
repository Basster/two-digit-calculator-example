<?php


use Calculator\Calculation\Addition;

class AdditionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldAddTwoDigits()
    {
        self::assertEquals(2, (new Addition())->calculate(1,1));
    }
}
