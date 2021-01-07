<?php

namespace classes;

class Calculator {
    
    protected $firstNumber;
    protected $secondNumber;
    protected $operation;

    public function __construct(int $firstNumber = 0, int $secondNumber = 0, string $operation = '') {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operation = $operation;
    }
}