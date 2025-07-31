<?php
session_start(); // Start the session
require_once 'db_connect.php'; // Include DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Prepare and execute query
    $stmt = $conn->prepare("SELECT id, name, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if email exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $name, $user_email, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Store user info in session
            $_SESSION['user_id'] = $user_id;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $user_email;

            // Redirect to dashboard or homepage
            header("Location: about.php");
            exit();
        } else {
            // Invalid password
            echo "<p style='color: red;'>❌ Incorrect password.</p>";
        }
    } else {
        // Email not found
        echo "<p style='color: red;'>❌ No account found with that email.</p>";
    }

    $stmt->close();
} else {
    echo "<p style='color: red;'>Invalid request method.</p>";
}
?>
