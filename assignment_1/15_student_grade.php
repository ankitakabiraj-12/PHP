<!DOCTYPE html>
<html>
<head>
<title>Student Grade</title>
</head>
<body>
<h1>Student Grade Calculation</h1>
<form method="post">
<!-- User enters the total marks -->
<label><h2>Enter Total Marks:</label></h2>
<input type="number" name="marks" min="0" max="1000">
<br><br> 
<input type="submit" name="submit" value="Calculate Grade">
</form>
<?php
// Check whether the form has been submitted
if (isset($_POST['submit'])) {
// Convert the input into an integer
$marks = (int) $_POST['marks'];
// Check whether marks are within the valid range
if ($marks > 800 && $marks <= 1000) {
echo "<h2>Class I"."</h2>";
} elseif ($marks > 600 && $marks <= 800) {
echo "<h2>Class II"."</h2>";
} elseif ($marks > 400 && $marks <= 600) {
echo "<h2>Class III"."</h2>";
} elseif ($marks >= 0 && $marks <= 400) {
echo "<h2>Fail"."</h2>";
} else {
echo "<h2>Invalid Marks"."</h2>";
}
}
?>
</body>
</html>
