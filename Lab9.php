<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter 5 numbers:<br><br>

    <input type="number" name="num[]" required><br><br>
    <input type="number" name="num[]" required><br><br>
    <input type="number" name="num[]" required><br><br>
    <input type="number" name="num[]" required><br><br>
    <input type="number" name="num[]" required><br><br>

    <input type="submit" value="Reverse Array">
</form>

<?php

if (isset($_POST['num'])) {

    $numbers = $_POST['num'];

    echo "<h3>Original Array:</h3>";

    foreach ($numbers as $value) {
        echo $value . " ";
    }

    $reverse = array_reverse($numbers);

    echo "<h3>Reverse Array:</h3>";

    foreach ($reverse as $value) {
        echo $value . " ";
    }
}

?>

</body>
</html>