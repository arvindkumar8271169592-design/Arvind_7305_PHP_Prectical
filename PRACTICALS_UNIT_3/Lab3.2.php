<?php
if (isset($_POST['save'])) {
    $name = $_POST['username'];

    setcookie("username", $name, time() + 3600);

    echo "Cookie Created Successfully!<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Read Cookie</title>
</head>
<body>

<form method="post">
    Enter Name:
    <input type="text" name="username" required>
    <input type="submit" name="save" value="Create Cookie">
</form>

<?php
if (isset($_COOKIE['username'])) {
    echo "<h3>Cookie Value: " . $_COOKIE['username'] . "</h3>";
} else {
    echo "<h3>Cookie is not set.</h3>";
}
?>

</body>
</html>