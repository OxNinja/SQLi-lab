<?php
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/init_level5.php');
include 'includes/head.php';
?>

<h1>Level 5</h1>

<p class="synopsis">You managed to get to an authentication page of a website. Find the admin's password!</p>
<!-- Once you have the password - let's say $pass - go to /$pass.php -->
<!-- Have you seen my BLIND dog? It is LIKE Idefix. -->

<form method="post">
    <label for="username">Username: </label>
    <input type="text" name="username" placeholder="admin" required>
    <label for="password">Password: </label>
    <input type="text" name="password" placeholder="***" required>
    
    <input class="button small green" type="submit" name="submit" value="Connect">
</form>

<?php

$username = $_POST['username'];
$password = $_POST['password'];
$db = connect_db();
$q = "select * from level5 where username='$username' and password='$password'";
$r = $db -> query($q);
$db -> close();
if($r -> num_rows > 0) {
    echo '<h2>Welcome Admin!</h2>';
} else {
    echo '<p>Wrong username/password.</p>';
}

?>

<?php include 'includes/footer.php'; ?>
