<?php
// Include database connection (for potential dynamic gallery images)
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - EcoGreen Initiative</title>
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
            <h1>Gallery</h1>
            <p>Check out photos from our recent projects and events.</p>
            <figure>
                <img src="css\images\tree-planting-2.jpg" alt="Tree Planting Event - Volunteers planting trees in a local park.">
                <figcaption>Tree Planting Event - Volunteers planting trees in a local park.</figcaption>
            </figure>
            <figure>
                <img src="css\images\tree-planting-1.jpg" alt="Community members join hands to reforest the area.">
                <figcaption>Community members join hands to reforest the area.</figcaption>
            </figure>
            <figure>
                <img src="#" alt="Participants sorting recyclables during our recycling workshop.">
                <figcaption>Participants sorting recyclables during our recycling workshop.</figcaption>
            </figure>
            <figure>
                <img src="#" alt="Learning the importance of recycling in reducing waste.">
                <figcaption>Learning the importance of recycling in reducing waste.</figcaption>
            </figure>
            <figure>
                <img src="#" alt="Educational seminar on sustainable living practices.">
                <figcaption>Educational seminar on sustainable living practices.</figcaption>
            </figure>
            <figure>
                <img src="#" alt="Interactive session on eco-friendly solutions.">
                <figcaption>Interactive session on eco-friendly solutions.</figcaption>
            </figure>
            <figure>
                <img src="#" alt="Annual EcoGreen fair showcasing sustainable products.">
                <figcaption>Annual EcoGreen fair showcasing sustainable products.</figcaption>
            </figure>
            <figure>
                <img src="#" alt="Guest speakers sharing insights on environmental conservation.">
                <figcaption>Guest speakers sharing insights on environmental conservation.</figcaption>
            </figure>
            <figure>
                <img src="#" alt="Hands-on workshop teaching composting techniques.">
                <figcaption>Hands-on workshop teaching composting techniques.</figcaption>
            </figure>
            <figure>
                <img src="#" alt="Community members learning about renewable energy sources.">
                <figcaption>Community members learning about renewable energy sources.</figcaption>
            </figure>
        </section>
    </main>

    <footer>
        <p>© 2025 EcoGreen Initiative. All rights reserved.</p>
    </footer>
</body>
</html>