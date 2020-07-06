<?php

function connect_db() {
    $db = new mysqli(Config::$host, Config::$user, Config::$pass, Config::$db);
    
    if($db -> connect_error) {
        die($db -> connect_error);
    }

    return $db;
}

?>
