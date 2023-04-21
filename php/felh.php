<?php
include_once "User.php";
session_start();
$file = fopen("../txt/users.txt", "a+");

$_SESSION["regisztraltak"] = [];

while (($line = fgets($file)) !== false) {
    $sor = unserialize($line);
    $uj = new User($sor["sex"], $sor["name"], $sor["email"], $sor["age"], $sor["username"], $sor["password"]);
    array_push($_SESSION["regisztraltak"], $uj);
}
fclose($file);


