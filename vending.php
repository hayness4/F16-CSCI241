<?php if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lab 5</title>
	</head>
	<body>
		<font size="5">POS Helper</font><br><br>
		<form method="POST" action="vending.php">
			Total Bill: <input type="number_format" name="total"></input><br><br>
			Tendered: <input type="number_format" name="tendered"></input><br><br>
			<input type="submit" value="submit" name="submit">
		</form>
	</body>	
</html>

<?php
}if($_SERVER["REQUEST_METHOD"] == "POST")
{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lab 5</title>
	</head>
	<body>
	<?php	
		
		$total = $_POST["total"];
		if($total <= 0)
		{
			echo "Total can't be at or below 0, go back and change it!";
			exit(1);
		}
		$tendered = $_POST["tendered"];
		if($tendered <= 0)
		{
			echo "Tendered can't be at or below 0, go back and change it!";
			exit(1);
		}
	
		$change = $tendered - $total;
		
		if(is_numeric($total) && is_numeric($tendered))
		{
			echo"<h2>Receipt</h2>";
			echo "<table>";
			echo "<tr><td>" . "Total Bill:	" . $total . "</td></tr>";
			echo "<tr><td>" . "Tendered:	" . $tendered . "</td></tr>";
			echo "<tr><td>" . "Change:	" . $change . "</td></tr>";
			echo "</table>";
			function calculateDisbursement($change)
			{
				$dollars = (int)$change;
				$cents = $change - $dollars;
		
				$hundreds = (int)($dollars/100);
				$dollars = $dollars - ($hundreds*100);
		
				$fifties = (int)($dollars/50);
				$dollars = $dollars - ($fifties*50);
		
				$twenties = (int)($dollars/20);
				$dollars = $dollars - ($twenties*20);
		
				$tens = (int)($dollars/10);
				$dollars = $dollars - ($tens*10);
		
				$fives = (int)($dollars/5);
				$dollars = $dollars - ($fives*5);
		
				$ones = (int)($dollars/1);
				$dollars = $dollars - ($ones*1);
		
				$quarters = (int)($cents/.25);
				$cents = $cents - ($quarters*.25);
		
				$dimes = (int)($cents/.10);
				$cents = $cents - ($dimes*.10);
		
				$nickels = (int)($cents/.05);
				$cents = $cents - ($nickels*.05);
			
				$pennies = (int)($cents/.01);
				$cents = $cents - ($pennies*.01);
				echo "<h2>Disbursement</h2>";
				echo "<table><tr><th>Denomination</th><th>Qty</th><th>Disbursed</th></tr>";
				echo "<tr><th>$100</th><td>" . $hundreds . "</td><td>" . "$". ($hundreds*100) . "</td></tr>";
				echo "<tr><th>$50</th><td>" . $fifties . "</td><td>" . "$" . ($fifties*50) . "</td></tr>";
				echo "<tr><th>$20</th><td>" . $twenties . "</td><td>" . "$" . ($twenties*20) . "</td></tr>";
				echo "<tr><th>$10</th><td>" . $tens . "</td><td>" . "$". ($tens*10) . "</td></tr>";
				echo "<tr><th>$5</th><td>" . $fives . "</td><td>" . "$" . ($fives*5) . "</td></tr>";
				echo "<tr><th>$1</th><td>" . $ones . "</td><td>" . "$" . ($ones*1) . "</td></tr>";
				echo "<tr><th>25&cent</th><td>" . $quarters . "</td><td>" . "$" . ($quarters*.25) . "</td></tr>";
				echo "<tr><th>10&cent</th><td>" . $dimes . "</td><td>" . "$". ($dimes*.10) . "</td></tr>";
				echo "<tr><th>5&cent</th><td>" . $nickels . "</td><td>" . "$" . ($nickels*.05) . "</td></tr>";
				echo "<tr><th>1&cent</th><td>" . $pennies . "</td><td>" . "$" . ($pennies*.01) . "</td></tr>";
				echo "<tr><th>Total:</th><td></td><td>" . "$". $change . "</td></tr>";
				echo "</table>";
				}
			echo calculateDisbursement($change);
			echo "</body></html>";
		}
		else
		{
			echo "Please go back and enter correct data!";
		}
	}
?>
