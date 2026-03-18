<?php
include 'db.php';

$blood = $_POST['blood_group'];

$query = "SELECT * FROM donors WHERE blood_group='$blood'";
$result = mysqli_query($conn,$query);

echo "<link rel='stylesheet' href='style.css'>";

echo "<div class='container'>";
echo "<h2>Available Donors</h2>";

echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Age</th>
        <th>Blood Group</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>";

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['blood_group']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['address']."</td>";
echo "</tr>";
}

echo "</table>";
echo "</div>";
?>