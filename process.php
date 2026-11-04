<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'YourName' && $password == 'YourStudentID') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    header('Location: login.html?error=1');
    exit();
}
?>
