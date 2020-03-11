<?php

include 'dbconnection.php';
echo	'<a href="./SA-search.php">Search For Diseases</a> ';

?>

<!DOCTYPE html>
<html>
	<head>
		<script src="SA-validate.js"></script>
		<title>Search</title>
	</head>
	<body>
		<h1>Search</h1>
		<form name = "textsearch" action="SA-query.php" onsubmit = "return validate()" method="post">
 			What are you looking for?<br>
 			<input type="text" name="search">
 			<br>
 			<input type="submit" name="query">
		</form>
	</body>
</html>

