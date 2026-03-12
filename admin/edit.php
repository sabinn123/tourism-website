<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>

<header>
    <nav>
        <div class="logo">
            <a href="../index.php">
                <h1>DREAM LAND</h1>
            </a>
        </div>
        <ul>
            <li><a href="../plan.php">Plan Your Destination</a></li>
            <li><a href="../international.php">International Trip</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="admin.php">Admin Panel</a></li>
        </ul>
    </nav>
</header>
<?php
include '../config.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM bookings WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form method="POST" action="update.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Name: <input type="text" name="full_name" value="<?php echo $row['customer_name']; ?>"><br>
Contact: <input type="text" name="contact" value="<?php echo $row['contact']; ?>"><br>
Destination: <input type="text" name="destination" value="<?php echo $row['destination']; ?>"><br>
Date: <input type="date" name="travel_date" value="<?php echo $row['travel_date']; ?>"><br>
People: <input type="number" name="people" value="<?php echo $row['number_of_people']; ?>"><br>

<button type="submit">Update</button>
</form>
<footer>
        <h4>&copy; 2026. Visit Nepal. All Rights Reserved.</h4>
        <ul>
            <li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="https://www.youtube.com/"><ion-icon name="logo-youtube"></ion-icon></a></li>
        </ul>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </footer>
</body>
</html>