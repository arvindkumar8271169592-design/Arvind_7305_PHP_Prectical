<?php

$a = 10;
$b = 5;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

$c = $a;
echo "Assignment: " . $c . "<br>";

echo "Is a greater than b? ";
echo ($a > $b) ? "True" : "False";
echo "<br>";

echo "Logical AND: ";
echo ($a > 5 && $b < 10) ? "True" : "False";

?>