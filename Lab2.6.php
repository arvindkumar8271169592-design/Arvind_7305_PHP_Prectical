<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required>
    <br><br>

    Enter Second Number:
    <input type="number" name="num2" required>
    <br><br>

    Select Operation:
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php

// User Defined Function
function calculator($num1, $num2, $operation)
{
    if ($operation == "add") {
        return $num1 + $num2;
    }
    elseif ($operation == "sub") {
        return $num1 - $num2;
    }
    elseif ($operation == "mul") {
        return $num1 * $num2;
    }
    elseif ($operation == "div") {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Cannot divide by zero";
        }
    }
}

if (isset($_POST['submit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = calculator($num1, $num2, $operation);

    echo "<h3>Result: " . $result . "</h3>";
}

?>

</body>
</html>