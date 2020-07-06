<?php
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/init_level1.php');
include 'includes/head.php';
?>

<h1>Level 1</h1>

<p class="synopsis">I don't remember my passwords for some sites, so I store them in a database. But I am not dumb, in order to retrieve a password I must enter the name of the website.</p>
<!-- You don't really need any COMMENT about the page. -->

<form method="post">
    <input type="text" name="website" placeholder="mail.google.com">
    <input class="button small green" type="submit" value="Get password">
</form>

<?php

if(isset($_POST["website"])) {
    $db = connect_db();
    $a = $_POST["website"];
    echo "Result for '$a':\n";
    $q = "select * from level1 where site ='$a'";
    $r = $db -> query($q);
    $db -> close();
    echo "<table><tr><th>Password</th><th>Website</th></tr>";
    if($r -> num_rows > 0) {
        while($res = $r -> fetch_row()) {
            echo "<tr><td>$res[0]</td><td>$res[1]</td></tr>";
        }   
    }
    echo "</table>";
}

?>

<?php include 'includes/footer.php'; ?>
