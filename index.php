<?php

include __DIR__ . '/' .'autoload.php';

use \classes\Calculator;


try {
    $calculator = new Calculator(
        !empty($_GET['first']) ? $_GET['first'] : 0, 
        !empty($_GET['second']) ? $_GET['second'] : 0, 
        !empty($_GET['operation']) ? $_GET['operation'] : ''
    );

    $calculator->calculate();

} catch (\Exception $th) {
    echo $th->getMessage();
}

include_once './views/template.php';