<?php
session_start();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username === 'Ahmed' && $password === '106196073') {
    $_SESSION['user'] = $username;
    header("Location: welcome.php");
    exit;
} else {
    header("Location: login.php?error=1");
    exit;
}
?>
