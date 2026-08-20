<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<form method="post">
    Enter your name:
    <input type="text" name="username" required>
    <input type="submit" name="save" value="Create Cookie">
</form>

<?php
if (isset($_POST['save'])) {

    $name = $_POST['username'];

    setcookie("username", $name, time() + 3600);

    echo "Cookie created successfully!";
    echo "<br>Your Name: " . $name;
}
?>

</body>
</html>