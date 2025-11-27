<?php 
$players = array("Virat Kohli", "Rohit Sharma", "MS Dhoni", "Sachin Tendulkar", "Shikhar 
Dhawan", "Hardik Pandya", "KL Rahul", "Jasprit Bumrah", "Ravindra Jadeja", "Yuvraj Singh"); 
?> 
 
<html> 
<head> 
    <title>Indian Cricket Players</title> 
    <style> 
        table { 
            width: 50%; 
            border-collapse: collapse; 
            margin: 20px 0; 
        } 
        th, td { 
            padding: 8px 12px; 
            text-align: center; 
            border: 1px solid #ddd; 
        } 
        th { 
            background-color: #4CAF50; 
            color: white; 
        } 
    </style> 
</head> 
<body> 
 
<h2>List of Indian Cricket Players</h2> 
 
<table>
   <tr> 
        <th>#</th> 
        <th>Player Name</th> 
    </tr> 
 
    <?php 
    foreach ($players as $index => $player) { 
        echo "<tr><td>" . ($index + 1) . "</td><td>" . $player . "</td></tr>"; 
    } 
    ?> 
 
</table> 
 
</body> 
</html>