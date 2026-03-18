<?php
$conn = mysqli_connect("localhost","root","","blood_donation");

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}
?>