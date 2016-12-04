<?php
require_once("header.php");
?>

<?php
$to = $_POST["email"];
$from = "no-reply@winthrop.edu";
$headers = "From:" . $from . "\r\n";
$subject = "Trivia Results";
$body = "Here are your Trivia Results: ";
$body = "http://deltona.birdnest.org/~acc.hayness4/F15-CSCI241/results.php";
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{ 
	if (mail($to, $subject, $body, $headers, "-f " . $from))
	{
		echo '<h3>Your results have been sent!</h3>';
	}
	else
	{
       echo '<h3>There was a problem with your e-mail (' . $_POST['email'] . ')</h3>';   
	}
}
else
{
	echo '<h3>There was a problem with your e-mail (' . $_POST['email'] . ')</h3>';   
}
?>
<a href="index.php">Home</a>

<?php
require("footer.php");
?>
