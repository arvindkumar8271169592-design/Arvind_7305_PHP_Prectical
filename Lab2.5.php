<!DOCTYPE html>
<html>
<head>
    <title>PHP Type Casting</title>
</head>
<body>

<?php

$num = 100;

echo "Value: " . $num . "<br>";
echo "Original Type: " . gettype($num) . "<br><br>";

settype($num, "string");

echo "After Type Casting:<br>";
echo "Value: " . $num . "<br>";
echo "New Type: " . gettype($num);

?>

</body>
</html>