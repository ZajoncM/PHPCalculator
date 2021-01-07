<?php

include __DIR__ . '/' .'autoload.php';

use \classes\Calculator;


try {

    $number = isset($_GET['first']) ? $_GET['first'] : 0;
    $numberTwo = isset($_GET['second']) ? $_GET['second'] : 0;
    $operation = isset($_GET['operation']) ? $_GET['operation'] : '';

    $calculator = new Calculator($number, $numberTwo, $operation);

} catch (\Throwable $th) {
    //throw $th;
}




var_dump($calculator);

include_once './views/calculator.html';