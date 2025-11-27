
<?php
$conn = mysqli_connect("localhost", "root", "", "meganath");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM login";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>
<td>" . $row['id'] . "</td>
<td>" . $row['name'] . "</td>
<td>" . $row['email'] . "</td>
</tr>";
}
echo "</table>";
}
else
{
echo "No data found";
}
mysqli_close($conn);
?>