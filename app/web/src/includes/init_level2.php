<?php

$db = connect_db();
$qs = array();
array_push($qs, 'drop table if exists `database`.`level1`');
array_push($qs, 'drop table if exists `database`.`level2`');
array_push($qs, 'create table `database`.`level2` (username text, email text, password text)');
array_push($qs, 'insert into `database`.`level2` (username, email, password) values ("alice", "alice@mail.com", "b0b_1s_mY_B3s7_fr1eND")');
array_push($qs, 'insert into `database`.`level2` (username, email, password) values ("bob", "bob@mail.com", "1_l0v3_4liC3")');
array_push($qs, 'insert into `database`.`level2` (username, email, password) values ("admin", "admin@mail.com", "Visit -> l3ts_G0_level3.php !")');
array_push($qs, 'insert into `database`.`level2` (username, email, password) values ("test", "test@mail.com", "test")');

foreach($qs as $q) {
    $db -> query($q);
}

$db -> close();

?>
