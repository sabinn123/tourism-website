<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "tourism_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $customer_name = $_POST['Name'];
    $contact = $_POST['contact'];
    $destination = $_POST['destination'];
    $travel_date = $_POST['date'];
    $number_of_people = $_POST['people'];

    $stmt = mysqli_prepare($conn, 
        "INSERT INTO bookings (customer_name, contact, destination, travel_date, number_of_people) 
         VALUES (?, ?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param($stmt, "ssssi", 
        $customer_name, 
        $contact, 
        $destination, 
        $travel_date, 
        $number_of_people
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Booking Successful!'); window.location.href='../plan.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>