<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
?>

<!DOCTYPE html>
<html> 
    <head>
        Times Tables
    </head>
    <title>
    	Lab 4
    </title>
    <body> 
        <form method="POST" action="lab4.php">
        	<label> Start: <input type="text" name="start"/></label>
            <label> End: <input type="text" name="end"/> </label><br><br>
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
        Times Tables
    </head>
    <title>
    	Lab 4
    </title>
    <body> 
	<?php 
			
		$start = $_POST["start"];
		$end = $_POST["end"];
					
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
	?>
<?php
}