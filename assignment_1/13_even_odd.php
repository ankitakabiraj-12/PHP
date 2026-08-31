<!DOCTYPE html>
<html>
<head>
<title>Even or Odd</title>
</head>
<body>
<h1>Check Even or Odd</h1>
<form method="post">
<!-- User enters a number -->
<label><h3>Enter a Number:</h3></label>
<input type="number" name="number">
<br><br>
<input type="submit" name="submit" value="Check">
</form>
<?php
// Check whether the form has been submitted
if (isset($_POST['submit'])) {
// Convert the input value into an integer
$number = (int) $_POST['number'];
// Check whether the number is divisible by 2
if ($number % 2 == 0) {
echo "<h2>$number is an Even Number." . "</h2>";
} else {
echo "<h2>$number is an Odd Number." . "</h2>";
}
}
?>
</body>
</html>
