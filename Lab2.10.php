<?php

$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT
    CURDATE() AS current_date1,
    CURRENT_DATE AS current_date2,

    CURTIME() AS current_time1,
    CURRENT_TIME() AS current_time2,

    UNIX_TIMESTAMP() AS unix_time,

    FROM_UNIXTIME(UNIX_TIMESTAMP()) AS converted_time";

$result = mysqli_query($conn, $sql);

if ($result) {

    $row = mysqli_fetch_assoc($result);

    echo "<h2>MySQL Date and Time Functions</h2>";

    echo "<b>1. CURDATE()</b><br>";
    echo "Current Date: " . $row['current_date1'];
    echo "<br><br>";

    echo "<b>2. CURRENT_DATE</b><br>";
    echo "Current Date: " . $row['current_date2'];
    echo "<br><br>";

    echo "<b>3. CURTIME()</b><br>";
    echo "Current Time: " . $row['current_time1'];
    echo "<br><br>";

    echo "<b>4. CURRENT_TIME()</b><br>";
    echo "Current Time: " . $row['current_time2'];
    echo "<br><br>";

    echo "<b>5. UNIX_TIMESTAMP()</b><br>";
    echo "Unix Timestamp: " . $row['unix_time'];
    echo "<br><br>";

    echo "<b>6. FROM_UNIXTIME()</b><br>";
    echo "Converted Date & Time: " . $row['converted_time'];

} else {
    echo "Query Failed: " . mysqli_error($conn);
}

mysqli_close($conn);

?>