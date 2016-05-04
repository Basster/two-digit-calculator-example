<?php

namespace Calculator\Calculation;

use Calculator\Event\CalculateEvent;
use Calculator\Exception\UndefinedOperandException;
use Symfony\Component\EventDispatcher\EventDispatcher;

class CalculationFactory
{
    /** @var array|TwoDigitCalculation[] */
    private $calculations;

    /** @var \Symfony\Component\EventDispatcher\EventDispatcher */
    private $dispatcher;

    public function __construct(EventDispatcher $dispatcher)
    {
        $dispatcher->addListener('event.calculate', [$this, 'onCalculate']);
        $this->calculations = [
          '+' => new Addition(),
          '-' => new Substraction(),
          '*' => new Multiplication(),
          '/' => new Division(),
          '^' => new Power(),
          'v' => new BaseSqrt(),
        ];

        $this->dispatcher = $dispatcher;
    }

    public function onCalculate(CalculateEvent $event)
    {
        $event->setResult(
          $this->getCalculationMethod(
            $event->getOperand()
          )->calculate(
            $event->getA(),
            $event->getB()
          )
        );
    }

    /**
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    public function getDispatcher()
    {
        return $this->dispatcher;
    }

    /**
     * @param $operand
     *
     * @return \Calculator\Calculation\TwoDigitCalculation|mixed
     * @throws \Calculator\Exception\UndefinedOperandException
     */
    public function getCalculationMethod($operand)
    {
        if (!array_key_exists($operand, $this->calculations)) {
            throw new UndefinedOperandException();
        }

        return $this->calculations[$operand];
    }
}
