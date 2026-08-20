<?php

session_start();

$_SESSION["username"] = "Arvind";
$_SESSION["course"] = "BCA";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Destroy Session</title>
</head>
<body>

<h2>PHP Destroy Session</h2>

<?php

echo "Before Destroying Session:<br>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"] . "<br><br>";

session_unset();
session_destroy();

echo "Session Destroyed Successfully!";

?>

</body>
</html>