<?php
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
} else {
    $username = "";
    $password = "";
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

  
    if ($username == "admin" && $password == "12345") {

    
        if (isset($_POST['remember'])) {

            setcookie("username", $username, time() + (30 * 24 * 60 * 60), "/");
            setcookie("password", $password, time() + (30 * 24 * 60 * 60), "/");

            $message = "Login successful! Username and password remembered.";
        } else {

  
            setcookie("username", "", time() - 3600, "/");
            setcookie("password", "", time() - 3600, "/");

            $message = "Login successful!";
        }

    } else {
        $message = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="">

    Username:
    <input type="text" name="username"
           value="<?php echo htmlspecialchars($username); ?>"
           required>
    <br><br>

    Password:
    <input type="password" name="password"
           value="<?php echo htmlspecialchars($password); ?>"
           required>
    <br><br>

    <input type="checkbox" name="remember">
    Remember Me
    <br><br>

    <input type="submit" value="Login">

</form>

<p><?php echo $message; ?></p>

</body>
</html>
