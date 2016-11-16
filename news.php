<?php
require_once("header.php");
?>
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
		if($_SERVER["REQUEST_METHOD"] == "GET")
		{
			if(isset($_GET["id"]))
			{
				echo "<h1>News:</h1>";
				if(isset($articles[$_GET["id"]]))
				{
					echo "<h4>" . $articles[$_GET["id"]][0] . "</h4>";
					echo $articles[$_GET["id"]][1];
					echo "<br><br>";
					echo "<a href='index.php'>Home</a>";					
				}
				else
				{
					echo "<a href='index.php'>Home</a>";			
				}
			}
		}	
?>

<?php
require_once("footer.php")
?>