<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "nicolassouply_phpj4";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "nicolassouply";
$password = "160705284c0d80d14b3487695ba067cb";

$db = new PDO(
    $connexionString,
    $user,
    $password
);



var_dump($db);