<?php

$db = connect_db();
$qs = array();
array_push($qs, 'drop table if exists `database`.`level3_products`');
array_push($qs, 'drop table if exists `database`.`level3_users`');
array_push($qs, 'drop table if exists `database`.`level4_articles`');
array_push($qs, 'create table `database`.`level4_articles` (id int primary key not null auto_increment, title text, content text)');
array_push($qs, 'insert into `database`.`level4_articles` (title, content) values ("How to get rich in 5 steps", "1. Get one apple for 1€,<br> 2. Sell it for 2€,<br> 3. Buy 2 apples for 2€,<br> 4. Win lottery,<br> 5. You are rich now.")');
array_push($qs, 'insert into `database`.`level4_articles` (title, content) values ("I like trains", "Yeah I like trains, I mean, a lot. Rails, wheels, chimneys, levers, I love this. Especialy Thomas, the most famous train worldwide.")');
array_push($qs, 'insert into `database`.`level4_articles` (title, content) values ("I also love my blog", "I am a little dev and I am learning to create my own blog right now :D")');
array_push($qs, 'drop table if exists `database`.`level4_users`');
array_push($qs, 'create table `database`.`level4_users` (username text, password text)');
array_push($qs, 'insert into `database`.`level4_users` (username, password) values ("admin", "Visit -> yAy_l3veL5.php !")');

foreach($qs as $q) {
    $db -> query($q);
}

$db -> close();

?>
