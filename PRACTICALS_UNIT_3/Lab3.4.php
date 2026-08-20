<?php

setcookie("username", "Arvind", time() + 3600);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Cookie</title>
</head>
<body>

<h2>Delete Cookie Example</h2>

<?php

// Check if Delete button is clicked
if (isset($_POST['delete'])) {

    // Delete cookie by setting expiry time in the past
    setcookie("username", "", time() - 3600);

    echo "<h3>Cookie deleted successfully!</h3>";
}

?>

<form method="post">
    <input type="submit" name="delete" value="Delete Cookie">
</form>

</body>
</html>