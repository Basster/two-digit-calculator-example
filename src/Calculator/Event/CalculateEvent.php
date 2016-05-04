<?php

namespace Calculator\Event;

use Symfony\Component\EventDispatcher\Event;

class CalculateEvent extends Event
{
    private $a;

    private $b;

    private $operand;
    
    private $result;

    /**
     * CalculateEvent constructor.
     *
     * @param $a
     * @param $b
     * @param $operand
     */
    public function __construct($a, $b, $operand)
    {
        $this->a = $a;
        $this->b = $b;
        $this->operand = $operand;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getOperand()
    {
        return $this->operand;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result)
    {
        $this->result = $result;
    }
}
