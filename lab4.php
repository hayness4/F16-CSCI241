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
		
		if($start > $end)
		{
			echo "Start number should be less than the End number.";
		}
		
		else if((int)$start == $start && (int)$end == $end)
		{
			echo "<table><tr><td>";
			for($col = $start; $col <= $end; $col++)
 	  		{
			    echo "<th>" .  $col . "</th>";
		    }
		
			echo "</tr></td>";
			echo "<tr>";
	    
			for($row = $start; $row <= $end; $row++)
			{
				echo "<th>" . $row . "</th>";
				
				for($col = $start; $col <= $end; $col++)
    			{
					echo "<td>" . ($row * $col) . "</td>";
	   			}
				echo "</tr>";
			}
			echo "</table>";
			echo "</body></html>";
		}
		
		else
		{
			echo "Please go back and enter correct data!";	
		}
	?>
<?php
}