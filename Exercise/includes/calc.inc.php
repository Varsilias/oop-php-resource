<?php
    declare(strict_types = 1);
    require 'autoloader.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operand'];

$calculator = new Calculator($operator, (int)$num1, (int)$num2);

try {
    $result = $calculator->calculate();
    echo $result;
} catch (\TypeError $e) {
    echo "Error!: {$e->getMessage()}";
}
