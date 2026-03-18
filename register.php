<?php
include 'db.php';
$name = $_POST['name'];
$age = $_POST['age'];
$blood = $_POST['blood_group'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO donors(name,age,blood_group,phone,address)
VALUES('$name','$age','$blood','$phone','$address')";
?>

<html>
<head>
<style>

body{
text-align:center;
font-family: Arial;
margin-top:100px;
}

.btn{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:#e74c3c;
color:white;
text-decoration:none;
border-radius:5px;
}

.btn:hover{
background:#c0392b;
}

</style>
</head>

<body>

<?php
if(mysqli_query($conn,$sql))
{
echo "<h2>Donor Registered Successfully</h2>";
}
else
{
echo "<h2>Error</h2>";
}
?>

<br>

<a href="index.html" class="btn">Go Back to Home</a>

</body>
</html>