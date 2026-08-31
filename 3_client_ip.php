<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-
scale=1.0">
<title>IP Address</title>
</head>
<body>
<h2>Wants to know your IP Address! Then click the button 
below.</h2>
<form method="post">
<input type="submit" name="submit" value="Know Your IP 
Address">
</form>
<?php
// Check whether the button was clicked
if (isset($_POST['submit'])) {
// Get the client's IP address
$ip = "192.168.31.246";;
// Display the IP address
echo "<h3>Your IP Address is: " . $ip . "</h3>";
}
?>
</body>
</html>
