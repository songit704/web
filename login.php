<?php session_start();
if(isset($_SESSION["msg"])){
	echo $_SESSION["msg"];
	unset($_SESSION["msg"]);
}
?>