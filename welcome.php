<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include "header.inc";
?>
    <h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
    <p>You are successfully logged in.</p>
<?php
include "footer.inc";
?>
