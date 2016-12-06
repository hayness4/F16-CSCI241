<?php
require_once("header.php");
?>
<?php
$to = $_POST["email"];
$from = "no-reply@winthrop.edu";
$headers = "From:" . $from . "\r\n";
$subject = "Subscription";
$body = "Welcome to the site" . $_POST['name'];
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{ 
    if (mail($to, $subject, $body, $headers))
    {
        echo $_POST['name'] . ', your e-mail (' . $_POST['email'] . ') has been added to our mailing list!';
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
<br><a href="http://deltona.birdnest.org/~acc.hayness4/F16-CSCI241/index.php">Home</a>
<?php
require("footer.php");
?>