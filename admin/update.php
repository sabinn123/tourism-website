<?php
include '../config.php';

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$contact = $_POST['contact'];
$destination = $_POST['destination'];
$travel_date = $_POST['travel_date'];
$people = $_POST['people'];

mysqli_query($conn,
"UPDATE bookings SET 
customer_name='$full_name',
contact='$contact',
destination='$destination',
travel_date='$travel_date',
number_of_people='$people'
WHERE id=$id");

header("Location: adminpanel.php");
?>