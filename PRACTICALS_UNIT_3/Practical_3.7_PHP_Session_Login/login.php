<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $message = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>

<h2>User Login</h2>

<form method="post" action="">
    <label>Username:</label>
    <input type="text" name="username" required>
    <br><br>

    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" value="Login">
</form>

<p style="color:red;"><?php echo $message; ?></p>

</body>
</html>
