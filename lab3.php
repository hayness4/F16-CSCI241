<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lab 3</title>
	</head>
	<body>
		<form method="POST" action="lab3.php">
			Invoice Item 1: <input type="text" name="invoiceItem1"></input>
			Price: <input type="text" name="invoiceItem1Price"></input><br>
			Invoice Item 2: <input type="text" name="invoiceItem2"></input>
			Price: <input type="text" name="invoiceItem2Price"></input><br>
			Invoice Item 3: <input type="text" name="invoiceItem3"></input>
			Price: <input type="text" name="invoiceItem3Price"></input><br>
			Invoice Item 4: <input type="text" name="invoiceItem4"></input>
			Price: <input type="text" name="invoiceItem4Price"></input><br>
			Include Tax? <input type="checkbox" value="tax" name="tax"><br>
			<input type="submit" value="submit" name="submit">
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
        <title>Lab 3</title>
    </head>
    <body> 
		<?php
			echo "<table>";
			echo "<tr><td>Invoice Item 1:	" . $_POST["invoiceItem1"]. "</td>"; 
			echo "<td>Price:	$" . $_POST["invoiceItem1Price"]. "</td></tr>";
			echo "<tr><td>Invoice Item 2:	" . $_POST["invoiceItem2"]. "</td>"; 
			echo "<td>Price:	$" . $_POST["invoiceItem2Price"]. "</td></tr>";
			echo "<tr><td>Invoice Item 3:	" . $_POST["invoiceItem3"]. "</td>"; 
			echo "<td>Price:	$" . $_POST["invoiceItem3Price"]. "</td></tr>";
			echo "<tr><td>Invoice Item 4:	" . $_POST["invoiceItem4"]. "</td>";
			echo "<td>Price:	$"	 . $_POST["invoiceItem4Price"]. "</td></tr>";
		
			$subtotal = $_POST["invoiceItem1Price"] + $_POST["invoiceItem2Price"] + $_POST["invoiceItem3Price"] + $_POST["invoiceItem4Price"];
	
			echo "<tr><td><br>Subtotal:	$" . $subtotal;
			echo "<br>";
		
			if(isset($_POST["tax"]))
			{
				$taxTotal = $subtotal * 0.7;
				echo "Tax:	$" . $taxTotal;
				echo "<br>";
				$total = $subtotal + $taxTotal;
				echo "Total:	$" . $total;
				echo "</td></tr>";
			}	
	
			else
			{
				$taxTotal = $subtotal * 0.7;
				echo "Tax:	$0.00";
				echo "<br>";
				$total = $subtotal;
				echo "Total:	$" . $total;
				echo "</td></tr>";
			}	
			echo "</table>";
			echo "</body></html>";
		?>
<?php
}