<?php

// Create an array
$arr = array(30, 10, 50, 20, 40);

echo "Original Array:<br>";
print_r($arr);

echo "<br><br>";

// 1. count() - total elements
echo "Total Elements: " . count($arr);

// 2. sort() - ascending order
sort($arr);
echo "<br>After sort(): ";
print_r($arr);

// 3. rsort() - descending order
rsort($arr);
echo "<br>After rsort(): ";
print_r($arr);

// 4. array_reverse() - reverse array
$reverse = array_reverse($arr);
echo "<br>After array_reverse(): ";
print_r($reverse);

// 5. array_sum() - sum of elements
echo "<br>Sum of Array: " . array_sum($arr);

// 6. in_array() - check value
if (in_array(30, $arr)) {
    echo "<br>30 is present in the array.";
} else {
    echo "<br>30 is not present in the array.";
}

?>