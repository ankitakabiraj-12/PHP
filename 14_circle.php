<!DOCTYPE html>
<html>
<head>
<title>Circle Calculator</title>
</head>
<body>
<h1>Circle Circumference and Area</h1>
<form method="post">
<h3>Enter Radius:</h3>
<input type="number" name="radius" step="any" required>
<br><br>
<input type="submit" name="calculate" value="Calculate">
</form>
<?php
if (isset($_POST['calculate'])) {
$radius = $_POST['radius'];
$circumference = 2 * pi() * $radius;
$area = pi() * $radius * $radius;
echo "<h2>RESULT</h2>";
echo "<h3>Radius = " . $radius . "</h3>";
echo "<h3>Circumference = " . round($circumference, 2) . 
"</h3>";
echo "<h3>Area = " . round($area, 2) . "</h3>";
}
?>
</body>
</html>
