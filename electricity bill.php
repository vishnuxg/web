<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Electricity Bill Generator</title> 
</head> 
<body> 
 
<h2>Electricity Bill Generator</h2> 
 
<form method="POST"> 
    <label for="units">Enter Units Consumed:</label> 
    <input type="number" id="units" name="units" required><br><br> 
    <input type="submit" value="Calculate Bill"> 
</form> 
 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $units = $_POST['units']; 
    $rate_per_unit = 0.12; 
     
    if ($units >= 0) { 
        $bill_amount = $units * $rate_per_unit; 
        echo "<h3>Electricity Bill:</h3>"; 
        echo "Units Consumed: " . $units . " units<br>"; 
        echo "Rate per Unit: $" . $rate_per_unit . "<br>"; 
        echo "Total Bill: $" . number_format($bill_amount, 2) . "<br>"; 
    } else { 
        echo "Please enter a valid number of units.";
    } 
} 
?> 
 
</body> 
</html>