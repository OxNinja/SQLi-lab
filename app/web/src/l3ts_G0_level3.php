<?php
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/init_level3.php');
include 'includes/head.php';
?>

<h1>Level 3</h1>

<p class="synopsis">This is a nice online shop there, maybe something is hidding ?</p>
<!-- Have you heard about UNION between two person ? -->

<form method="post">
    <input type="text" name="product" placeholder="Gamer...">
    <input class="button small green" type="submit" value="Get prices">
</form>

<!-- SELECT product, price FROM level3_products WHERE product LIKE '%$input%' -->
<?php

if(isset($_POST["product"])) {
    $db = connect_db();
    $a = $_POST["product"];
    $q = "select * from level3_products where product like '%$a%'";
    $r = $db -> query($q);
    $db -> close();
    echo "<table><tr><th>Product</th><th>Price</th></tr>";
    if($r -> num_rows > 0) {
        while($res = $r -> fetch_row()) {
            echo "<tr><td>$res[0]</td><td>$res[1]</td></tr>";
        }   
    }
    echo "</table>";
}

?>

<p>Login is disabled for the moment. But you can still buy our awesome products !</p>
<!-- SELECT username, password FROM level3_users WHERE username='$input' AND password='$input2' -->

<?php include 'includes/footer.php'; ?>
