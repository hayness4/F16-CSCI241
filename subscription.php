<?php
require_once("header.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lab 7</title>
	</head>
	<body>
		<h3>You have reached the maximum number of times to look at an article.<br>
		In order for you to keep looking at them you will have to subscribe<br>
		to the site and with the subscription, you will be able to look at<br>
		more news articles than what you have seen recently.</h3>
		<h1>Subscribe:</h1>
		<form method="post" action="subscribe.php">
			Name: <input type="text" name="name" size="25" required>
			Email: <input type="text" class="email" name="email" size="25" required>
			<input type="submit" value="submit" name="submit">
		</form>
<?php
require("footer.php");
?>

<br><a href="index.php">Home</a>