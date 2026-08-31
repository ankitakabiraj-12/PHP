<?php
// The URL given in the assignment
$url = "https://www.w3resource.com/php-exercises/php-basic-
exercises.php";
// parse_url() breaks the URL into different components
$urlParts = parse_url($url);
// Display the scheme/protocol
echo "<h3><b>Scheme</b> : " . $urlParts['scheme'] . "</h3>";
// Display the host/domain name
echo "<h3><b>Host</b> : " . $urlParts['host'] . "</h3>";
// Display the path
echo "<h3><b>Path</b> : " . $urlParts['path'] . "</h3>";
// Get only the file name from the path
$fileName = basename($urlParts['path']);
echo "<h3><b>File Name</b> : " . $fileName . "</h3>";
?>
