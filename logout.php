<?php
session_start();
$_SESSION["valid"]="";
unset($_SESSION["valid"]);
unset($_SESSION["lastname"]);
header("Location:home.php");
?>