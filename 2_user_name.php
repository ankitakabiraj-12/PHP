<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-
scale=1.0">
<title>User Name</title>
</head>
<body>
<h1>Enter Your Name Below</h1> 
<!-- Form sends the user's name to the same PHP page -->
<form method="post">
<!-- Input field for user's name -->
<label>Enter Name:</label>
<input type="text" name="username"> <br>
<!-- Submit button -->
<br> <input type="submit" name="submit" value="Submit"> 
</form>
<?php
// check whether the form has been submitted
if (isset($_POST['submit'])) {
// get the name entered by the user
$name = $_POST['username'];
// display the name using echo
echo "<h2> Your Name is: " . $name . "</h2>";
}
?> 
</body>
</html>
