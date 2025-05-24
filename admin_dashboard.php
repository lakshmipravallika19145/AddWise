<?php
session_start();

// Check if logged in user is admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login_form.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome Admin, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
    <p>This is the Admin Dashboard.</p>

    <a href="logout.php">Logout</a>
</body>
</html>
