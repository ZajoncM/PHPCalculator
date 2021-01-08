<?php

namespace classes;

class Calculator {
    
    /**
   * @var float
   */
    protected $firstNumber;

    /**
   * @var float
   */
    protected $secondNumber;

    /**
   * @var string
   */
    protected $operation;

    /**
   * @var float
   */
    protected $result;

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
                if($this->secondNumber === 0) {
                    throw new \Exception('Dzielenie przez 0');
                }
                return $this->setResult($this->firstNumber / $this->secondNumber);
            default: return false;
        }
    }

}