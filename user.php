<h2>User Info</h2>
<a href="home.php">Home</a><br/><br/><br/>
<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_REQUEST["lastname"])){
		$file = fopen("logs.txt", "r") or die("Unable to open file!");
		$data=array();
		//loads the array with file data
		while($c=fgets($file)) {
			$c=trim($c);
			$ar=explode("-",$c);
			if($_REQUEST["lastname"]==$ar[0]){
				$temp["lastname"]=$ar[0];
				$temp["pass"]=$ar[1];
				$temp["email"]=$ar[2];
				$data[0]=$temp;
			}
		}
		fclose($file);
		//print_r\($data);
		echo "<h1>".$data[0]["lastname"]."</h1><hr/>";
		echo "<h4>Email:".$data[0]["email"]."</h4>";
		echo "<h4>Pass:".$data[0]["pass"]."</h4>";
	}
}
else{
	header("Location:logout.php");
}
?>