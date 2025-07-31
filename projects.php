<?php
// Include database connection (for potential dynamic projects)
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - EcoGreen Initiative</title>
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
            <h1>Our Projects</h1>
            <p>We engage in various projects aimed at environmental conservation, including tree planting, recycling programs, and community education.</p>
        </section>

        <section>
            <h2>Tree Planting</h2>
            <p>Join our tree planting initiatives to help reforest local areas and combat climate change. <a href="#">Learn more about the benefits of tree planting</a>.</p>
        </section>

        <section>
            <h2>Recycling Programs</h2>
            <p>Our recycling programs aim to reduce waste and promote the recycling of materials. <a href="#">Read more about the importance of recycling</a>.</p>
        </section>

        <section>
            <h2>Community Education</h2>
            <p>We offer workshops and seminars to educate the community on sustainable living practices. <a href="#">Explore resources for sustainable living education</a>.</p>
        </section>
    </main>

    <footer>
        <p>© 2025 EcoGreen Initiative. All rights reserved.</p>
    </footer>
</body>
</html>