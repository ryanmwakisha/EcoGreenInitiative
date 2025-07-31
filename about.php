<?php
// Include database connection (optional, if dynamic content is added later)
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EcoGreen Initiative</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>About Us</h1>
            <p>The EcoGreen Initiative is dedicated to protecting the environment and promoting sustainable living practices.</p>
        </section>
<main>  
            <section>
            <h2>Our Services</h2>
            <table>
                <tr>
                    <th>Service</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>Tree Planting</td>
                    <td>Join our tree planting events to contribute to reforestation efforts.</td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td>Recycling Programs</td>
                    <td>Participate in our recycling programs to reduce waste and promote recycling.</td>
                    <td>$67</td>
                </tr>
                <tr>
                    <td>Community Education</td>
                    <td>Attend our workshops and seminars on sustainable living practices.</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td>Eco-Friendly Products</td>
                    <td>Explore our range of eco-friendly products designed to reduce environmental impact.</td>
                    <td>$30</td>
                </tr>
            </table>
        </section>
</main>
    </main>

    <footer>
        <p>© 2025 EcoGreen Initiative. All rights reserved.</p>
    </footer>
</body>
</html>