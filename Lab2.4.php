<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body>

<?php

$str = "Hello World PHP";

echo "<h2>PHP String Functions</h2>";

echo "1. Length of string: " . strlen($str) . "<br><br>";

echo "2. Position of 'World': " . strpos($str, "World") . "<br><br>";

echo "3. Number of words: " . str_word_count($str) . "<br><br>";

echo "4. Reverse string: " . strrev($str) . "<br><br>";

echo "5. Lowercase string: " . strtolower($str) . "<br><br>";

echo "6. Uppercase string: " . strtoupper($str);

?>

</body>
</html>