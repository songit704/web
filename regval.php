<?php
$file=fopen('logs.txt','a') or die("file open error");
$c=0;
$dotPos=strpos($_REQUEST["email"],".");
$atPos=strpos($_REQUEST["email"],"@");
if(strlen($_REQUEST["firstname"])==0 || strlen($_REQUEST["lastname"])==0 || strlen($_REQUEST["dob"])==0 || strlen($_REQUEST["phone"])==0 || strlen($_REQUEST["email"])==0 || strlen($_REQUEST["pass"])==0 || strlen($_REQUEST["confirmpass"])==0){
	echo "All fields are mandatory!";
}
else if($_REQUEST["pass"]!=$_REQUEST["confirmpass"]){
	echo "Passwords must match!";
}
else if(strlen($_REQUEST["phone"])!=11){
	echo "Phone digit length must be 11!";
}
else if($atPos>$dotPos || strlen($dotPos)=='' || strlen($atPos)=='' ){
	echo "Invalid Email!";
}
else{
	echo "Registration successful!";
	$c=$c+fwrite($file,"\r\n");
	$c=$c+fwrite($file,$_REQUEST["utype"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["lastname"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,md5($_REQUEST["pass"]));
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["email"]);
}
echo "<br/>";
?>
<br/><a href="home.php">Go to home</a><br/>