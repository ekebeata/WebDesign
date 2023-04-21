<?php
include_once "foglalok.php";
session_start();
$file = fopen("../txt/foglal.txt", "a");
$_SESSION["foglaltak"] = [];


fclose($file);
