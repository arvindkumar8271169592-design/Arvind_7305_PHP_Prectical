<?php

$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

$datetime = "2026-08-19 15:45:30";

$sql = "SELECT
    '$datetime' AS given_datetime,

    HOUR('$datetime') AS hour_value,

    MINUTE('$datetime') AS minute_value,

    SECOND('$datetime') AS second_value,

    DATE_FORMAT('$datetime', '%d-%m-%Y %h:%i:%s %p') AS formatted_date,

    DATE_SUB('$datetime', INTERVAL 7 DAY) AS previous_date";

$result = mysqli_query($conn, $sql);

if ($result) {

    $row = mysqli_fetch_assoc($result);

    echo "<h2>MySQL Date and Time Functions</h2>";

    echo "<b>Given Date & Time:</b> ";
    echo $row['given_datetime'];
    echo "<br><br>";

    echo "<b>1. HOUR()</b><br>";
    echo "Hour: " . $row['hour_value'];
    echo "<br><br>";

    echo "<b>2. MINUTE()</b><br>";
    echo "Minute: " . $row['minute_value'];
    echo "<br><br>";

    echo "<b>3. SECOND()</b><br>";
    echo "Second: " . $row['second_value'];
    echo "<br><br>";

    echo "<b>4. DATE_FORMAT()</b><br>";
    echo "Formatted Date: " . $row['formatted_date'];
    echo "<br><br>";

    echo "<b>5. DATE_SUB()</b><br>";
    echo "Date after subtracting 7 days: " . $row['previous_date'];

} else {
    echo "Query Failed: " . mysqli_error($conn);
}

mysqli_close($conn);

?>