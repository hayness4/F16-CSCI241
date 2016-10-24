<?php if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lab 5</title>
	</head>
	<body>
		<font size="5">Employee Paystub Calculator</font><br><br>
		<form method="POST" action="paystub.php">
			Employee ID: <input type="number" name="idNumber"></input><br><br>
			Emplyee Name: <input type="text" name="name"></input><br><br>
			Hourly Wage: <input type="number_format" name="wage"></input><br><br>
			Hours Worked: <input type="number" name="hours"></input><br><br>
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
		
		$idNumber = $_POST["idNumber"];
		$name = $_POST["name"];
		$wage = $_POST["wage"];	
		if($wage <= 0)
		{
			echo "Hourly wage can't be at or below 0, go back and change it!";
			exit(1);
		}
		$hours = $_POST["hours"];
		if($hours <= 0)
		{
			echo "Hours worked can't be at or below 0, go back and change it!";
			exit(1);
		}
		
		if(is_numeric($wage) && is_numeric($idNumber) && is_numeric($hours))
		{
			echo "<h2>Paystub for " . $name . "</h2>";
			echo "Name: " . $name . "<br>";
			echo "ID: ". $idNumber . "<br><br>";	
		
			if($hours <= 40)
			{
				$hours = $hours;
				$overtime = 0;
				$regWage = $wage * $hours;
				$otWage = 0;
				$totalHours = $hours;
				$totalPay = $regWage;
			
				echo "<table>";
				echo "<tr><td ></td><th>Hours</th><th>Gross Pay</th></tr>";
				echo "<tr><th>Regular:</th><td>" . $hours . "</td><td>" . "$" . $regWage . "</td></tr>";
				echo "<tr><th>Overtime:</th><td>" . $overtime . "</td><td>" . "\$" . $otWage . "</td></tr>";
				echo "<tr><td><br></td><td></td><td></td></tr>";
				echo"<tr><th>Total:</th><td>" . $totalHours . "</td><td>" . "\$" . $totalPay . "</td></tr>";
				echo "</table>";
			}
		
			else if($hours > 40)
			{
				$overtime = $hours - 40;
				$hours = 40;
				$regWage = $wage * $hours;
				$otWage = ($wage * 1.5) * $overtime;
				$totalHours = $hours + $overtime;
				$totalPay = $regWage + $otWage;
			
				echo "<table>";
				echo "<tr><td ></td><th>Hours</th><th>Gross Pay</th></tr>";
				echo "<tr><th>Regular:</th><td>" . $hours . "</td><td>" . "$" . $regWage . "</td></tr>";
				echo "<tr><th>Overtime:</th><td>" . $overtime . "</td><td>" . "\$" . $otWage . "</td></tr>";
				echo "<tr><td><br></td><td></td><td></td></tr>";
				echo"<tr><th>Total:</th><td>" . $totalHours . "</td><td>" . "\$" . $totalPay . "</td></tr>";
				echo "</table>";
			}
			function calculateDisbursement($totalPay)
			{
				$dollars = (int)$totalPay;
				$cents = $totalPay - $dollars;
		
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
				echo "<tr><th>Total:</th><td></td><td>" . "$". $totalPay . "</td></tr>";
				echo "</table>";
			}
			echo calculateDisbursement($totalPay);
			echo "</body></html>";
		}
		else
		{
			echo "Please go back and enter correct data!";	
		}
	}
?>