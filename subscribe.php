<?php
require_once("header.php");
?>
<?php
$to = $_POST["email"];
$from = "no-reply@winthrop.edu";
$headers = "From:" . $from . "\r\n";
$subject = "Subscribe";
$body = "Welcome to the site!";
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{ 
    if (mail($to, $subject, $body, $headers, "-f " . $from))
    {
        echo 'Your e-mail (' . $_POST['email'] . ') has been added to our mailing list!';
    }
    else
    {
       echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
    }
}
else
{
   echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
}
?>
<?php
require("footer.php");
?>

<br><a href="http://deltona.birdnest.org/~acc.hayness4/F16-CSCI241/Lab%207/index.php">Home</a>