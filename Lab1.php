
<?php
//1.1 Write a PHP program for print Previous semester Result using variables & 
//constants in PHP.
define("MAX_MARKS", 100);

$php = 78;
$dbms = 72;
$java = 80;
$networking = 75;
$softwareEngineering = 70;

$total = $php + $dbms + $java + $networking + $softwareEngineering;

$totalMaxMarks = MAX_MARKS * 5;

$percentage = ($total / $totalMaxMarks) * 100;

echo "<h2>Previous Semester Result</h2>";

echo "PHP: $php / " . MAX_MARKS . "<br>";
echo "DBMS: $dbms / " . MAX_MARKS . "<br>";
echo "Java: $java / " . MAX_MARKS . "<br>";
echo "Networking: $networking / " . MAX_MARKS . "<br>";
echo "Software Engineering: $softwareEngineering / " . MAX_MARKS . "<br>";

echo "<br>Total Marks: $total / $totalMaxMarks";
echo "<br>Percentage: " . $percentage . "%";

?>
```
