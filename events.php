<?php
// Include database connection (for potential dynamic events)
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - EcoGreen Initiative</title>
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
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Upcoming Events</h1>
            <p>Join us at our upcoming events to learn more about environmental conservation and participate in our initiatives.</p>
        </section>

        <section>
            <h2>Annual Tree Planting Day</h2>
            <p>Come and be a part of our Annual Tree Planting Day to help reforest our local areas.</p>
            <p><a href="css\images\tree-planting.jpg">Learn more about Arbor Day celebrations</a>.</p>
        </section>

        <section>
            <h2>Recycling Workshop</h2>
            <p>Attend our Recycling Workshop to learn effective recycling practices and reduce waste.</p>
            <p><a href="css\images\recycling-programs.jpg">Discover the basics of recycling</a>.</p>
            <p>There is a lot to learn in these workshops so be sure to join us and enjoy the day.</p>
        </section>

        <section>
            <h2>Sustainable Living Seminar</h2>
            <p>Join our seminar on sustainable living and learn practical ways to live sustainably.</p>
            <p><a href="css\images\event-2.jpg">Find more resources on sustainable living</a>.</p>
        </section>
    </main>

    <footer>
        <p>© 2025 EcoGreen Initiative. All rights reserved.</p>
    </footer>
</body>
</html>