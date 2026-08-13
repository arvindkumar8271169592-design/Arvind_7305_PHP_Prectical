<?php

$file = "message.php";

file_put_contents($file, '<?php echo "Hello from message.php<br>"; ?>');

echo "Using Include:<br>";
include "message.php";

echo "Using Require:<br>";
require "message.php";

?>