<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
</head>
<body>
<h1>User Registration Form</h1>
<form method="post">
<!-- Full name -->
<label>Full Name:</label>
<input type="text" name="fullname">
<br><br>
<!-- Date of birth -->
<label>Date of Birth:</label>
<input type="date" name="dob">
<br><br>
<!-- ID -->
<label>Email ID:</label>
<input type="text" name="email">
<br><br>
<!-- Mobile -->
<label>Mobile:</label>
<input type="text" name="mobile">
<br><br>
<!-- Terms and conditions -->
<input type="checkbox" name="terms" value="yes">
<label>I agree to the Terms and Conditions</label>
<br><br>
<input type="submit" name="submit" value="Register">
</form>
<?php
if (isset($_POST['submit'])) {
$fullname = trim($_POST['fullname']);
$dob = $_POST['dob'];
$email = trim($_POST['email']);
$mobile = trim($_POST['mobile']);
$errors = [];
// Validate Full Name
if (!preg_match("/^[A-Za-z]+(?:\s+[A-Za-z]+)+$/", $fullname)) {
$errors[] = "Full name must contain at least two words.";
}
// Validate Date of Birth / Age
if (empty($dob)) {
$errors[] = "Date of birth is required.";
} else {
$birthDate = new DateTime($dob);
$today = new DateTime();
$age = $today->diff($birthDate)->y;
if ($age <= 18) {
$errors[] = "Age must be above 18 years.";
}
}
// Validate Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$errors[] = "Please enter a valid email address.";
}
// Validate Mobile Number
if (!preg_match("/^[0-9]{10}$/", $mobile)) {
$errors[] = "Mobile number must contain exactly 10 digits.";
}
// Check Terms and Conditions
if (!isset($_POST['terms'])) {
$errors[] = "You must agree to the Terms and Conditions.";
}
// Display Result
if (empty($errors)) {
echo "<h3>Successful Registration</h3>";
} else {
echo "<h3>Please fix the following errors:</h3>";
echo "<ul>";
foreach ($errors as $error) {
echo "<li>" . $error . "</li>";
}
echo "</ul>";
}
}
?>
</body>
</html>
