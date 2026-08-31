<?php
// Check whether HTTPS is enabled
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
// This block runs when the page is accessed using HTTPS
echo "<h2>The page is called from HTTPS." . "</h2>";
} else {
// This block runs when the page is accessed using HTTP
echo "<h2>The page is called from HTTP." . "</h2>";
}
?>
