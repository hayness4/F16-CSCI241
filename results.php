<?php
require_once("header.php");
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$answer1 = $_POST["question1"];
	$answer2 = $_POST["question2"];
	$answer3 = $_POST["question3"];
	$answer4 = $_POST["question4"];
	$answer5 = $_POST["question5"];
	$totalCorrect = 0;
	if ($answer1 == "C") { $totalCorrect++; }
	else {echo "<h3>Answer 1 is incorrect</h3>";}
	if ($answer2 == "D") { $totalCorrect++; }
	else {echo "<h3>Answer 2 is incorrect</h3>";}
	if ($answer3 == "A") { $totalCorrect++; }
	else {echo "<h3>Answer 3 is incorrect</h3>";}
	if ($answer4 == "B") { $totalCorrect++; }
	else {echo "<h3>Answer 4 is incorrect</h3>";}
	if ($answer5 == "D") { $totalCorrect++; }
	else {echo "<h3>Answer 5 is incorrect</h3>";}
	echo "<h2>You got " . $totalCorrect . " out of 5 questions right</h2>";
}
?>
<tr>
	<td><a href="index.php">Home</a></td>
	<td><a href="email.php">Email your results</a></td>
</tr>

<?php
require_once("footer.php");
?>