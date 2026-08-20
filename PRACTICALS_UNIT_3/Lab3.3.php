<?php
if (isset($_POST['submit'])) {

    $name = $_POST['username'];

    setcookie("username", $name, time() + 3600);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie with Header</title>
</head>
<body>

<h2>Cookie Using Header</h2>

<form method="post">
    Enter Your Name:
    <input type="text" name="username" required>
    <input type="submit" name="submit" value="Create Cookie">
</form>

<?php

if (isset($_COOKIE['username'])) {
    echo "<h3>Welcome " . htmlspecialchars($_COOKIE['username']) . "</h3>";
} else {
    echo "<h3>Cookie is not set.</h3>";
}

?>

</body>
</html>