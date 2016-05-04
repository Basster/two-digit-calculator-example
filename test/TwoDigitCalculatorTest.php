<?php


use Calculator\TwoDigitCalculator;

class TwoDigitCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldAddTwoDigits()
    {
        self::assertEquals(2, (new TwoDigitCalculator())->calculate(1, 1, '+'));
    }

    /**
     * @test
     */
    public function shouldSubstractTwoDigits()
    {
        self::assertEquals(0, (new TwoDigitCalculator())->calculate(2, 2, '-'));
    }

    /**
     * @test
     */
    public function shouldMultiplyTwoDigits()
    {
        self::assertEquals(4, (new TwoDigitCalculator())->calculate(2, 2, '*'));
    }

    /**
     * @test
     */
    public function shouldDivideTwoDigits()
    {
        self::assertEquals(1, (new TwoDigitCalculator())->calculate(2, 2, '/'));
    }

    /**
     * @test
     */
    public function shouldCalculateThePower()
    {
        self::assertEquals(4,(new TwoDigitCalculator())->calculate(2, 2, '^'));
    }

    /**
     * @test
     * @expectedException \Calculator\Exception\DivideByZeroException
     */
    public function shouldThrowADivideByZeroException()
    {
        self::assertEquals(1, (new TwoDigitCalculator())->calculate(2, 0, '/'));
    }

    /**
     * @test
     * @expectedException \Calculator\Exception\UndefinedOperandException
     */
    public function shouldThrowAUndefinedOperandException()
    {
        (new TwoDigitCalculator())->calculate(2, 0, 'o');
    }

    /**
     * @test
     */
    public function shouldCalculateTheSqrt()
    {
        self::assertEquals(3,(new TwoDigitCalculator())->calculate(9, 2, 'v'));
    }
}
