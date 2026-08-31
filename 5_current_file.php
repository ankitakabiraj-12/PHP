<?php
// PHP_SELF gives the path of the currently executing PHP file
$filePath = $_SERVER['PHP_SELF'];
// basename() removes the directory path and gives only the file 
name
$fileName = basename($filePath);
// Display the current file name
echo "<h2> Current File Name is: " . $fileName. "</h2>" ;
?>
