<?php

$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

$firstName = "Arvind";
$middleName = "Kumar";
$lastName = "Yadav";

$sql = "SELECT
    LENGTH('$firstName') AS name_length,

    CONCAT('$firstName', ' ', '$lastName') AS full_name,

    CONCAT_WS('-', '$firstName', '$middleName', '$lastName') AS joined_name,

    TRIM('   Hello PHP   ') AS trim_text,

    RTRIM('Hello PHP   ') AS rtrim_text,

    LTRIM('   Hello PHP') AS ltrim_text,

    LPAD('$firstName', 10, '*') AS left_padded,

    RPAD('$lastName', 10, '*') AS right_padded,

    LOCATE('Kumar', '$firstName $middleName $lastName') AS position_of_kumar";

$result = mysqli_query($conn, $sql);

if ($result) {

    $row = mysqli_fetch_assoc($result);

    echo "<h2>MySQL String Manipulation Functions</h2>";

    echo "<b>1. LENGTH()</b><br>";
    echo "Length of First Name: " . $row['name_length'];
    echo "<br><br>";

    echo "<b>2. CONCAT()</b><br>";
    echo "Full Name: " . $row['full_name'];
    echo "<br><br>";

    echo "<b>3. CONCAT_WS()</b><br>";
    echo "Joined Name: " . $row['joined_name'];
    echo "<br><br>";

    echo "<b>4. TRIM()</b><br>";
    echo "After TRIM: [" . $row['trim_text'] . "]";
    echo "<br><br>";

    echo "<b>5. RTRIM()</b><br>";
    echo "After RTRIM: [" . $row['rtrim_text'] . "]";
    echo "<br><br>";

    echo "<b>6. LTRIM()</b><br>";
    echo "After LTRIM: [" . $row['ltrim_text'] . "]";
    echo "<br><br>";

    echo "<b>7. LPAD()</b><br>";
    echo "After LPAD: " . $row['left_padded'];
    echo "<br><br>";

    echo "<b>8. RPAD()</b><br>";
    echo "After RPAD: " . $row['right_padded'];
    echo "<br><br>";

    echo "<b>9. LOCATE()</b><br>";
    echo "Position of 'Kumar': " . $row['position_of_kumar'];

} else {
    echo "Query Failed: " . mysqli_error($conn);
}

mysqli_close($conn);

?>