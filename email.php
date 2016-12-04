<?php
require_once("header.php");
?>

<form method="post" action="confirmation.php">
	Name: <input type="text" name="name" size="25" required>
	Email: <input type="text" class="email" name="email" size="25" required>
	<input type="submit" value="submit" name="submit">
</form>

<br><a href="index.php">Home</a>

<?php
require_once("footer.php");
?>