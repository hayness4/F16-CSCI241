<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
?>

<!DOCTYPE html>
<html> 
    <head>
		<title>Times Tables</title>
	</head>
    <body> 
        <form method="POST" action="lab4.php">
        	<label> Start: <input type="number" name="start"/></label>
            <label> End: <input type="number" name="end"/> </label><br><br>
            <label><input type="submit" name="submit" value="Submit" /></label>
        </form>
    </body>
</html>

<?php
}else if($_SERVER["REQUEST_METHOD"] == "POST")
{
?>
<!DOCTYPE html>
<html> 
    <head>
        <title>Times Tables</title>
    </head>
    <body> 
	<?php 
			
		$start = $_POST["start"];
		$end = $_POST["end"];
					
		if(is_numeric($start) && is_numeric($end))
		{
			echo "<table><tr><td>";
			for($col = $start; $col <= $end; $col++)
			{
				echo "<th>" .  $col . "</th>";
			}
		
			echo "<tr>";
	    
			for($row = $start; $row <= $end; $row++)
			{
				echo "<th>" . $row . "</th>";
				
				for($col = $start; $col <= $end; $col++)
				{
					echo "<td>" . ($row * $col) . "</td>";
				}
						
				echo "</td></tr>";
			}
			echo "</table>";
			echo "</body></html>";
		}
		
		if($start < 0 && $end < 0 && $end != $start)
		{
			echo "Go back and change your numbers!";
		}
		
		if(is_nan($start) && is_nan($end))
		{
			echo "Go back and put a number!";
		}
	?>
<?php
}