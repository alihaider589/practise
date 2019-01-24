<?php

session_start();

$_SESSION["name"] = "Ali haider";
$_SESSION["password"] = "ali12345";

header("session2.php");
?>