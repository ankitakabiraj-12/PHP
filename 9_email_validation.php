<!DOCTYPE html>
<html>
<head>
<title>Email Validation</title>
</head>
<body>
<h1>Email Validation</h1>
<form method="post">
<!-- Input field for email -->
<label>Enter Your Email:</label>
<input type="text" name="email">
<br><br>
<input type="submit" name="submit" value="Check Email">
</form>
<?php
// Check whether the form has been submitted
if (isset($_POST['submit'])) {
// Get the email entered by the user
$email = $_POST['email'];
// Validate the email format
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
// This runs if the email is valid
echo "<h2>Valid Email Address." . "</h2>";
} else {
// This runs if the email is invalid
echo "<h2>Invalid Email Address." . "</h2>";
}
}
?>
</body>
</html>
