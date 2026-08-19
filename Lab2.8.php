<?php

$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

$date = "2026-08-19";

$sql = "SELECT
    '$date' AS given_date,
    DAYOFWEEK('$date') AS day_of_week,
    WEEKDAY('$date') AS weekday_number,
    DAYOFMONTH('$date') AS day_of_month,
    DAYOFYEAR('$date') AS day_of_year,
    DAYNAME('$date') AS day_name";

$result = mysqli_query($conn, $sql);

if ($result) {

    $row = mysqli_fetch_assoc($result);

    echo "<h2>MySQL Date and Time Functions</h2>";

    echo "<b>Given Date:</b> " . $row['given_date'];
    echo "<br><br>";

    echo "<b>1. DAYOFWEEK()</b><br>";
    echo "Day of Week Number: " . $row['day_of_week'];
    echo "<br><br>";

    echo "<b>2. WEEKDAY()</b><br>";
    echo "Weekday Number: " . $row['weekday_number'];
    echo "<br><br>";

    echo "<b>3. DAYOFMONTH()</b><br>";
    echo "Day of Month: " . $row['day_of_month'];
    echo "<br><br>";

    echo "<b>4. DAYOFYEAR()</b><br>";
    echo "Day of Year: " . $row['day_of_year'];
    echo "<br><br>";

    echo "<b>5. DAYNAME()</b><br>";
    echo "Day Name: " . $row['day_name'];

} else {
    echo "Query Failed: " . mysqli_error($conn);
}

mysqli_close($conn);

?>