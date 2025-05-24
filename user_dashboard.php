<?php
session_start();

// Check if user is logged in and is NOT admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'user') {
    header("Location: login_form.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
    <p>This is the User Dashboard.</p>

    <a href="logout.php">Logout</a>
</body>
</html>
