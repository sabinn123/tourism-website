<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
    <link rel="stylesheet" href="plan.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">
                    <h1>DREAM LAND</h1>
                </a>
            </div>
            <ul>
                <li><a href="plan.php">Plan Your Destination</a></li>
                <li><a href="international.php">International Trip</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>
    <section id="booking">
        <div class="booking-container">
            <h2>Book Your Trip Now</h2>
            <p class="subtitle">Plan your perfect journey with us</p>
            <?php
if(isset($_GET['success'])){
    echo "<p style='color:green;'>Booking Successful!</p>";
}
?>

            <form action="admin/submit.php" method="POST">
                <div class="input-group">
                    <label for="Name">Full Name</label>
                    <input type="text" id="Name" name="Name" placeholder="Enter Full Name" required>
                </div>
                 <div class="input-group">
                    <label for="contact">Contact</label>
                    <input type="tel" id="contact" name="contact" placeholder="Enter Contact Number" required>
                </div>
                <div class="input-group">
                    <label for="destination">Destination</label>
                    <input type="text" id="destination" name="destination" placeholder="Enter Destination" required>
                </div>

                <div class="input-group">
                    <label for="date">Travel Date</label>
                    <input type="date" id="date" name="date" required>
                </div>

                <div class="input-group">
                    <label for="people">Number of People</label>
                    <input type="number" id="people" name="people" min="1" placeholder="Enter Number" required>
                </div>

                <button type="submit">Book Now</button>
            </form>
        </div>
    </section>
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