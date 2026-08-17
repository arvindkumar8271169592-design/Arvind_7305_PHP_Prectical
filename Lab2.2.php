<?php

echo "Enter numbers separated by space: ";
$input = trim(fgets(STDIN));

$array = explode(" ", $input);

sort($array);

echo "Sorted Array: ";

foreach ($array as $value) {
    echo $value . " ";
}

?>