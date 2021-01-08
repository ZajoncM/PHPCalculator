<?php

namespace classes;

class Calculator {
    
    /**
   * @var float
   */
    private $firstNumber;

    /**
   * @var float
   */
    private $secondNumber;

    /**
   * @var string
   */
    private $operation;

    /**
   * @var float
   */
    private $result;

    public function __construct(float $firstNumber = 0, float $secondNumber = 0,string $operation = '' ) {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operation = $operation;
    }

    public function getFirstNumber() {
        return $this->firstNumber;
    }

    public function getSecondNumber() {
        return $this->secondNumber;
    }

    public function getOperation() {
        return $this->operation;
    }

    public function getResult() {
        return $this->result;
    }

    public function setResult(float $result) {
        $this->result = $result;
    }


    public function calculate() {
        switch($this->operation){
            case 'addition':
                 $this->setResult($this->firstNumber + $this->secondNumber);
                 break;
            case 'subtraction':
                 $this->setResult($this->firstNumber - $this->secondNumber);
                 break;
            case 'multiplication':
                 $this->setResult($this->firstNumber * $this->secondNumber);
                 break;
            case 'division':
                if((int)$this->secondNumber === 0) {
                    throw new \Exception('Nie można dzielić przez 0!!!');
                    return false;
                } else {
                    return $this->setResult($this->firstNumber / $this->secondNumber);
                }
                
            default: return false;
        }
    }

}