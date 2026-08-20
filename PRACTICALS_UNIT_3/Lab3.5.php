<?php

session_start();

$_SESSION["username"] = "Arvind";
$_SESSION["course"] = "BCA";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Session</title>
</head>
<body>

<h2>PHP Session Example</h2>

<?php

echo "Session Created Successfully!<br><br>";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"];

?>

</body>
</html>