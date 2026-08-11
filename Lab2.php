<?php
//1.2 Write a PHP program to find out maximum and minimum number 
$numbers = array(25, 78, 12, 90, 45);

$maximum = max($numbers);
$minimum = min($numbers);

echo "Numbers: " . implode(", ", $numbers) . "<br><br>";

echo "Maximum Number: " . $maximum . "<br>";
echo "Minimum Number: " . $minimum;

?>
```
