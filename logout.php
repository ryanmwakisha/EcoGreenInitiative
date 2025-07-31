<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logged Out</title>
    <meta http-equiv="refresh" content="3;url=login.php">
</head>
<body>
    <h2>You have been successfully logged out.</h2>
    <p>Redirecting to login page in a few seconds...</p>
</body>
</html>

