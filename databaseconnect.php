<?php
$connection = new mysqli("localhost", "root", " ", "pizza");
if($connection->connect_error){
    die("Connection failed: " . $connection->connection_error);
}
$connection->set_charset("utf8");