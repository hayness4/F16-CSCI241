<?php
require_once("header.php");
?>
	<h1>Index:</h1>
	<?php
	
	$articlesText = fopen("articles.txt", "r");
	
	if(!is_resource($articlesText))
	{
		echo "Could not open!";
		exit();
	}
	
	while($article= fgets($articlesText))
	{
		$articles[] = explode("|",$article);
	}
	
	fclose($articlesText);
	
	$count=0;
	
	foreach($articles as $position=> $article)
	{
		echo "<a href='news.php?id=$position'>$article[0]</a>"; 
		echo "<br>";
		echo substr($article[1],0,100);
		echo "<br><br>";
		$count++;
	
		if($count==3)
		{
			break;
		}
	}
	if (isset($_COOKIE['views']))
	{
		$cookie = ++$_COOKIE['views'];
		setcookie("views", $cookie);
					
		if ($cookie > 5)
		{
			header("Location: subscription.php"); 
		}
	}
	else
	{
		$cookie = 1;
		setcookie("views", $cookie);
	}
?>

<?php
require("footer.php");
?>