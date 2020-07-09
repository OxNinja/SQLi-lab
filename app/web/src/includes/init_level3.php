<?php

$db = connect_db();
$qs = array();
array_push($qs, 'drop table if exists `database`.`level2`');
array_push($qs, 'drop table if exists `database`.`level3_products`');
array_push($qs, 'create table `database`.`level3_products` (product text, price float)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Gamer\'s bath water", 50)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Gamer\'s used towel", 20)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Gamer\'s chewed food", 10)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Moche Delphine\'s lipstick", 15)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Anti-5G USB key", 300)');
array_push($qs, 'drop table if exists `database`.`level3_users`');
array_push($qs, 'create table `database`.`level3_users` (username text, password text)');
array_push($qs, 'insert into `database`.`level3_users` (username, password) values ("admin", "Visit -> n1c3_leVEl4.php !")');

foreach($qs as $q) {
    $db -> query($q);
}

$db -> close();

?>
