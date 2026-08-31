<?php
// HTTP_USER_AGENT contains information about the user's
// browser, operating system and other client details.
$userAgent = $_SERVER['HTTP_USER_AGENT'];
// Display the User-Agent information
echo "Your User-Agent is: " . $userAgent;
?>
