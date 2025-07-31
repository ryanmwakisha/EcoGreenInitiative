<?php
// Include database connection
require_once 'db_connect.php';

$success = "";
$error = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name             = $_POST["full_name"];
    $email            = $_POST["email"];
    $password         = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if passwords match
    if ($password !== $confirm_password) {
        $error = "❌ Passwords do not match!";
    } else {
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert into users table
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashedPassword);

        if ($stmt->execute()) {
            $success = "✅ Account created successfully!";
        } else {
            $error = "❌ Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - EcoGreen Initiative</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Create Your Account</h1>
            <p>Join the EcoGreen Initiative today!</p>

            <?php if ($success): ?>
                <p style="color: green;"><?php echo $success; ?></p>
            <?php elseif ($error): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>

            <form method="post" action="">
                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="full_name" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required><br>

                <button type="submit">Sign Up</button>
            </form>

            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </section>
    </main>

    <footer>
        <p>© 2025 EcoGreen Initiative. All rights reserved.</p>
    </footer>
</body>
</html>
