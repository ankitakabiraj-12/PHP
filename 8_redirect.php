<!DOCTYPE html>
<html>
<head>
<title>User Name</title>
</head>
<body>
<h2>Welcome!</h2>
<p><h1>You have been successfully redirected to this 
page.</p></h1>
<?php
// Redirect the user to User_Name.php
header("Location: 2_User_Name.php");
// Stop executing the current script after redirection
exit();
?>
</body>
</html>
