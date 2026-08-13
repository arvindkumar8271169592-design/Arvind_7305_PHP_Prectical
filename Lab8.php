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

    <input type="submit" value="Print Array">
</form>

<?php

if (isset($_POST['num'])) {

    $numbers = $_POST['num'];

    echo "<h3>Array Values:</h3>";

    foreach ($numbers as $value) {
        echo $value . "<br>";
    }
}

?>

</body>
</html>