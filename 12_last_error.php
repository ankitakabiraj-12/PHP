<?php
// Generate an error intentionally for demonstration
echo $undefinedVariable;
// Get information about the last occurred error
$lastError = error_get_last();
// Check whether an error was found
if ($lastError != null) {
// Display the error type
echo "Error Type: " . $lastError['type'] . "<br>";
// Display the error message
echo "Error Message: " . $lastError['message'] . "<br>";
// Display the file where the error occurred
echo "Error File: " . $lastError['file'] . "<br>";
// Display the line number where the error occurred
echo "Error Line: " . $lastError['line'];
} else {
echo "No error occurred.";
}
?>
