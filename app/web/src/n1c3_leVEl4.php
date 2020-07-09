<?php
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/init_level4.php');
include 'includes/head.php';
?>

<h1>Level 4</h1>

<p class="synopsis">This is a nice little blog, you can read some articles. But maybe you can do more ?</p>
<!-- The European UNION is not the same as the Soviet UNION. -->

<h2>Select an article :</h2>
<div class="list">
    <a class="button small green" href="?id=1">1</a>
    <a class="button small green" href="?id=2">2</a>
    <a class="button small green" href="?id=3">3</a>
</div>

<?php

if(isset($_GET["id"])) {
    $db = connect_db();
    $a = $_GET["id"];
    $q = "select * from level4_articles where id='$a'";
    $r = $db -> query($q);
    $db -> close();
    echo "<article>";
    if($r -> num_rows > 0) {
        while($res = $r -> fetch_row()) {
            echo "<!-- $res[0] --><h3>$res[1]</h3><p>$res[2]</p>";
        }   
    }
    echo "</article>";
}

?>

<?php include 'includes/footer.php'; ?>
