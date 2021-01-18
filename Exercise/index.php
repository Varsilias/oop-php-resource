<?php
    declare(strict_types = 1);
    require 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-PHP Exercise</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
        <input type="number" name="num1" id="num1">
        <select name="operand">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <input type="number" name="num2" id="num2">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>