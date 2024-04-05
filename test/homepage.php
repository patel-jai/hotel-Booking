<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Management System</title>
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
        #slideshow {
            max-width: 100%;
            overflow: hidden;
            position: relative;
            height: 400px; /* Adjust height as needed */
        }

        #slideshow img {
            width: 100%;
            height: auto;
            display: none;
        }

        #slideshow img.active {
            display: block;
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
        <!-- Login/Register button -->
        <div id="login-register">
            <?php
            session_start();
            if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                echo '<a href="profile.php" class="login-register-btn">My Profile</a>';
            } else {
                echo '<a href="login.php" class="login-register-btn">Login / Register</a>';
            }
            ?>
        </div>
    </header>
    <main>
        <div class="container">
            <!-- Slideshow -->
            <section id="slideshow">
                <img src="image/c1-family-room.jpg" class="active" alt="Hotel Room">
                <img src="image2.jpg" alt="Hotel Lobby">
                <img src="image3.jpg" alt="Hotel Pool">
                <!-- Add more images as needed -->
            </section>
            <section id="about">
                <h2>About Us</h2>
                <p>Welcome to our hotel booking management system. We offer a wide range of rooms and amenities to make your stay comfortable and enjoyable.</p>
            </section>
            <section id="book-a-room">
                <h2>Book a Room</h2>
                <p>Explore our rooms and book your stay with us now! Experience luxury and comfort at affordable prices.</p>
                <a href="booking.php" class="btn">Book Now</a>
            </section>
            <section id="gallery">
                <h2>Gallery</h2>
                <p>Take a virtual tour of our hotel and discover our elegant rooms, modern facilities, and stunning views.</p>
                <!-- Add a slideshow or grid of images -->
            </section>
            <section id="contact">
                <h2>Contact Us</h2>
                <p>Have any questions or special requests? Our friendly staff is here to assist you. Reach out to us today.</p>
                <a href="contact.php" class="btn">Contact Us</a>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Hotel Booking Management System. All rights reserved.</p>
        </div>
    </footer>
</body></html>
