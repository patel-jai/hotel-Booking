<?php

function getTitle() {
    return "Booking Management System";
}
?>
<?php
session_start(); // Start session (if not already started)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Room - Hotel Booking Management System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .booking-page {
            padding: 20px;
        }

        #room-types {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .room {
            width: calc(25% - -30px);
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .room:hover {
            transform: scale(1.05);
        }

        .room img {
            width: 100%;
            height: 245px;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: transform 0.3s;
        }

        .room:hover img {
            transform: scale(1.1);
        }

        .room h3 {
            margin: 0;
            font-size: 20px;
        }

        .room p {
            margin: 5px 0;
            color: #666;
        }

        .room ul {
            margin-top: 10px;
            padding-left: 0;
            list-style-type: none;
        }

        .room ul li {
            margin-bottom: 5px;
        }

        .btn {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #555;
        }

        #booking-form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        /* Modern login/register button */
        .login-register-btn {
            background-color: #ffc107;
            color: #333;
            border: none;
            border-radius: 30px;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-register-btn:hover {
            background-color: #ffca28;
        }

        /* Login/Register section */
        #login-register {
            text-align: center;
            margin-top: 20px;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        #login-register p {
            margin-top: 10px;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to our Hotel Booking System</h1>
            <nav>
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="booking.php">Book a Room</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="about.php">About Us</a></li>                  
                </ul>
            </nav>
        </div>
        <div id="login-register">
        <?php
        // Check if user is logged in
       
        if (isset($_SESSION['username'])) {
            // User is logged in
            echo '<a href="profile.php" class="login-register-btn">My Profile</a>';
        } else {
            // User is not logged in
            echo '<a href="login.php" class="login-register-btn">Login / Register</a>';
        }
        ?>
        </div>

    </header>
    <main class="booking-page">
        <section id="room-types">
            <div class="container">
                <h2>Room Types</h2>
                <div class="room">
                    <img src="image/Amorgos-Standard-Room1-e1464286427430.jpg" alt="Standard Room">
                    <h3>Standard Room</h3>
                    <p>Price: $100 per night</p>
                    <p>Amenities:</p>
                    <ul>
                        <li>Queen-size bed</li>
                        <li>Private bathroom</li>
                        <li>TV with cable channels</li>
                    </ul>
                    <button onclick="showBookingForm('standard')" class="btn">Book Now</button>
                </div>
                <div class="room">
                    <img src="image/deluxeroom_8338.jpg" alt="Deluxe Room">
                    <h3>Deluxe Room</h3>
                    <p>Price: $150 per night</p>
                    <p>Amenities:</p>
                    <ul>
                        <li>King-size bed</li>
                        <li>Spa bath</li>
                        <li>Mini-bar</li>
                    </ul>
                    <button onclick="showBookingForm('deluxe')" class="btn">Book Now</button>
                </div>
                <div class="room">
                    <img src="image/Junior_Suite_Corinthia_Lisbon-768x432.jpg" alt="Suite Room">
                    <h3>Suite Room</h3>
                    <p>Price: $200 per night</p>
                    <p>Amenities:</p>
                    <ul>
                        <li>King-size bed</li>
                        <li>Separate living area</li>
                        <li>Work desk</li>
                    </ul>
                    <button onclick="showBookingForm('suite')" class="btn">Book Now</button>
                </div>
                <div class="room">
                    <img src="image/c1-family-room.jpg" alt="Family Room">
                    <h3>Family Room</h3>
                    <p>Price: $180 per night</p>
                    <p>Amenities:</p>
                    <ul>
                        <li>Two queen-size beds</li>
                        <li>Private bathroom</li>
                        <li>Child-friendly amenities</li>
                    </ul>
                    <button onclick="showBookingForm('family')" class="btn">Book Now</button>
                </div>
                <div class="room">
                    <img src="image/pasted image 0.png" alt="Penthouse Room">
                    <h3>Penthouse Room</h3>
                    <p>Price: $300 per night</p>
                    <p>Amenities:</p>
                    <ul>
                        <li>Multiple bedrooms</li>
                        <li>Private rooftop terrace</li>
                        <li>Personalized butler service</li>
                    </ul>
                    <button onclick="showBookingForm('penthouse')" class="btn">Book Now</button>
                </div>
            </div>
        </section>
        <section id="booking-form" style="display: none;">
            <div class="container">
                <h2>Book a Room</h2>
                <form action="confirm_booking.php" method="POST">
                    <input type="hidden" id="selected-room" name="room_type" value="">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="checkin">Check-in Date:</label>
                        <input type="date" id="checkin" name="checkin" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-out Date:</label>
                        <input type="date" id="checkout" name="checkout" required>
                    </div>
                    <button type="submit" class="btn">Book Now</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Hotel Booking Management System. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function showBookingForm(roomType) {
            document.getElementById('selected-room').value = roomType;
            document.getElementById('room-types').style.display = 'none';
            document.getElementById('booking-form').style.display = 'block';
            window.scrollTo(0, document.body.scrollHeight);
        }
    </script>
</body>
</html>
