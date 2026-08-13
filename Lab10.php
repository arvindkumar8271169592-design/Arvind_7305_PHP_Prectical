<!DOCTYPE html>
<html>
<body>

<form method="post">

    <h3>Enter First Array</h3>

    <input type="text" name="array1" placeholder="Example: 10,20,30" required>
    <br><br>

    <h3>Enter Second Array</h3>

    <input type="text" name="array2" placeholder="Example: 40,50,60" required>
    <br><br>

    <input type="submit" value="Merge Arrays">

</form>

<?php

if (isset($_POST['array1']) && isset($_POST['array2'])) {

    $array1 = explode(",", $_POST['array1']);
    $array2 = explode(",", $_POST['array2']);

    $mergedArray = array_merge($array1, $array2);

    echo "<h3>First Array:</h3>";
    foreach ($array1 as $value) {
        echo $value . " ";
    }

    echo "<h3>Second Array:</h3>";
    foreach ($array2 as $value) {
        echo $value . " ";
    }

    echo "<h3>Merged Array:</h3>";
    foreach ($mergedArray as $value) {
        echo $value . " ";
    }
}

?>

</body>
</html>