<?php
// Include database connection (for potential dynamic blog posts)
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - EcoGreen Initiative</title>
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
            <h1>Blog</h1>
            <p>Read our latest blog posts to stay informed about environmental issues and tips for sustainable living.</p>
        </section>

        <section>
            <h2>Featured Blog Posts</h2>
            <article>
                <h3>The Importance of Tree Planting in Urban Areas</h3>
                <p>Tree planting in urban areas is essential for improving air quality, reducing heat, and enhancing the overall well-being of residents. Discover how our initiatives are making a difference in local communities.</p>
            </article>
            <article>
                <h3>Recycling Programs: How You Can Get Involved</h3>
                <p>Recycling is a crucial part of reducing waste and conserving resources. Learn about our recycling programs and how you can participate in making our planet more sustainable.</p>
            </article>
            <article>
                <h3>Sustainable Living: Tips and Tricks</h3>
                <p>Living sustainably doesn't have to be difficult. In this post, we share practical tips and tricks for incorporating sustainable practices into your daily life. From reducing energy consumption to choosing eco-friendly products, find out how you can make a difference.</p>
            </article>
        </section>

        <section>
            <h2>About the EcoGreen Initiative</h2>
            <p>The EcoGreen Initiative is dedicated to promoting environmental sustainability through community involvement and education. Our mission is to engage individuals and organizations in activities that contribute to a healthier planet. By participating in our projects, such as tree planting, recycling programs, and educational workshops, you can help create a more sustainable future. Learn more about our mission and goals.</p>
        </section>
    </main>

    <footer>
        <p>© 2025 EcoGreen Initiative. All rights reserved.</p>
    </footer>
</body>
</html>