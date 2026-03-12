<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: adminloginform.html");
    exit();
}
include '../config.php';

// Fetch all bookings
$result = mysqli_query($conn, "SELECT * FROM bookings");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - DREAM LAND</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<!-- Header / Navbar -->
<header>
    <nav>
        <div class="logo">
            <a href="../index.php"><h1>DREAM LAND</h1></a>
        </div>
        <ul>
            <li><a href="logout.php" class="btn">Logout</a></li>
        </ul>
    </nav>
</header>

<!-- Main content -->
<main>
    <section class="destinations">
        <h2>All Bookings</h2>

        <?php
        // Optional: show total bookings
        $count = mysqli_query($conn, "SELECT COUNT(*) as total FROM bookings");
        $total = mysqli_fetch_assoc($count);
        echo "<h3>Total Bookings: " . $total['total'] . "</h3>";
        ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Destination</th>
                <th>Date</th>
                <th>People</th>
                <th>Action</th>
            </tr>

            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['customer_name']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['destination']; ?></td>
                <td><?php echo $row['travel_date']; ?></td>
                <td><?php echo $row['number_of_people']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $row['id']; ?>" 
                       onclick="return confirm('Are you sure you want to delete this booking?');">
                       Delete
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </section>
</main>
<!-- Footer -->
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