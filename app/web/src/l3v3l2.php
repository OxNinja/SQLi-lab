<?php
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/init_level2.php');
include 'includes/head.php';
?>

<h1>Level 2</h1>

<p class="synopsis">You went into a login page, where a user can get its email address by giving its username and password. You heard that the password of the administrator is interesting.</p>
<!-- If only I could COMMENT out this bad sentence... -->

<form method="post">
    <input type="text" name="username" placeholder="username" required>
    <input type="password" name="password" placeholder="password" required>
    <input class="button small green" type="submit" value="Retrieve infos">
</form>

<?php

if(isset($_POST["username"])) {
    $db = connect_db();
    $a = $_POST["username"];
    $b = $_POST['password'];
    $q = "select * from level2 where username='$a' and password='$b'";
    $r = $db -> query($q);
    $db -> close();
    echo "<table><tr><th>Username</th><th>Email</th><th>Password</th></tr>";
    if($r -> num_rows > 0) {
        while($res = $r -> fetch_row()) {
            echo "<tr><td>$res[0]</td><td>$res[1]</td><td>$res[2]</td></tr>";
        }   
    }
    echo "</table>";
}

?>

<?php include 'includes/footer.php'; ?>
