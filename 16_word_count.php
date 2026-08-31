<!DOCTYPE html>
<html>
<head>
<title>Word Count</title>
</head>
<body>
<h1>Find Search Word Count</h1>
<form method="post">
<label><h2>Enter Paragraph:</label></h2>
<textarea name="paragraph" rows="8" cols="60" 
required></textarea>
<br><br>
<label><h2>Enter Search Word:</label></h2>
<input type="text" name="search_word" required>
<br><br>
<input type="submit" name="submit" value="Search">
</form>
<?php
if (isset($_POST['submit'])) {
$paragraph = $_POST['paragraph'];
$search_word = $_POST['search_word'];
// Count the search word
$count = substr_count(strtolower($paragraph), 
strtolower($search_word));
echo "<h2>RESULT</h2>";
echo "<b>Paragraph: </b>" . $paragraph ."<br><br>";
echo "<b>Search Word: </b>" . $search_word ."<br><br>";
echo "<b>The word <i><b>" . $search_word . "</i></b> occurs 
<i><b>" . $count . "</i></b> times."."<br>";
}
?>
</body>
</html>
