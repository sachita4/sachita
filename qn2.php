<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Area Calculator</title>
</head>
<body>
    <form method="post" action="">
    <center><label for="radius">Enter Radius:</label>
        <input type="number"  name="radius"  required>
        <button type="submit">Calculate</button>
</center> 
    </form>
</body>
</html>
<?php

// Area of Circle Calculator
define("PI", 3.141592653589793);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = floatval($_POST['radius']);
    $area = PI * $radius * $radius;
    echo "<h2>Area of Circle</h2>";
    echo "<h2>Radius: $radius</h2><br>";
    echo "<h2> area of circle is: $area</h2><br>";
}
?>
