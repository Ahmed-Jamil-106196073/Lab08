<?php
include "header.inc";
?>
    <h1>Login</h1>
<?php
if (isset($_GET['error']) && $_GET['error'] == '1') {
    echo "<p>Invalid username or password. Please try again.</p>";
}
?>
    <form action="process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="hidden" name="token" value="A106196073">
        <button type="submit">Login</button>
    </form>
<?php
include "footer.inc";
?>
