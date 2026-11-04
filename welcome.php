<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <?php include 'header.inc'; ?>

    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>

    <?php include 'footer.inc'; ?>
</body>
</html>

<?php
session_start();

if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
} else {
    header('Location: login.html');
    exit();
}
?>