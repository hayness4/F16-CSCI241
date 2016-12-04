<?php
require_once("header.php");
require_once("common.php");
?>

<form action="results.php" method="post">
	<h3>1. Who won the Super Bowl 50?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question1" id="question1A" value="A">
	<label for="question1A">A. Carolina Panthers</label><br><br>

	<input type="radio" name="question1" id="question1B" value="B">
	<label for="question1B">B. New England Patriots</label><br><br>

	<input type="radio" name="question1" id="question1C" value="C">
	<label for="question1C">C. Denver Broncos</label><br><br>
	
	<input type="radio" name="question1" id="question1D" value="D">
	<label for="question1D">D. Seattle Seahawks</label>

	<h3>2. Which team won the NBA Finals this year?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question2" id="question2A" value="A">
	<label for="question2A">A. San Antonio Spurs</label><br><br>

	<input type="radio" name="question2" id="question2B" value="B">
	<label for="question2B">B. Golden State Warriors</label><br><br>

	<input type="radio" name="question2" id="question2C" value="C">
	<label for="question2C">C. Miami Heat</label><br><br>
	
	<input type="radio" name="question2" id="question2D" value="D">
	<label for="question2D">D. Cleveland Cavaliers</label>

	<h3>3. Who won the FIFA Club World Cup in 2015?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question3" id="question3A" value="A">
	<label for="question3A">A. Barcelona</label><br><br>

	<input type="radio" name="question3" id="question3B" value="B">
	<label for="question3B">B. River Plate</label><br><br>

	<input type="radio" name="question3" id="question3C" value="C">
	<label for="question3C">C. Sanfrecce Hiroshima</label><br><br>
	
	<input type="radio" name="question3" id="question3D" value="D">
	<label for="question3D">D. Guangzhou Evergrande</label>

	<h3>4. Which team won the Stanley Cup this year?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question4" id="question4A" value="A">
	<label for="question4A">A. San Jose Sharks</label><br><br>

	<input type="radio" name="question4" id="question4B" value="B">
	<label for="question4B">B. Pittsburgh Penguins</label><br><br>

	<input type="radio" name="question4" id="question4C" value="C">
	<label for="question4C">C. Tampa Bay Lightning</label><br><br>
	
	<input type="radio" name="question4" id="question4D" value="D">
	<label for="question4D">D. Nashville Predators</label>

	<h3>5. Who won the World Series this year?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question5" id="question5A" value="A">
	<label for="question5A">A. Atlanta Braves</label><br><br>

	<input type="radio" name="question5" id="question5B" value="B">
	<label for="question5B">B. Boston Red Sox</label><br><br>

	<input type="radio" name="question5" id="question5C" value="C">
	<label for="question5C">C. Cleveland Indians</label><br><br>
	
	<input type="radio" name="question5" id="question5D" value="D">
	<label for="question5D">D. Chicago Cubs</label><br><br>

	<input type="submit" value="SUBMIT ANSWERS"><br><br>
	<a href="index.php">Home</a>
</form>
<?php
require_once("footer.php");
?>