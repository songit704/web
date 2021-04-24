<?php
$logs=array();

$file=fopen("logs.txt","r") or die("file error");
while($c=fgets($file)){
	//echo $c."<br/>";
	$ar=explode("-",$c);
	$logs[$ar[1]]=$ar[2];
	$utype=[$ar[0]]=$ar[1];
}
//print_r($logs);
$flag=0;
session_start();
foreach($logs as $k=>$v){
	if($_REQUEST["lastname"]==$k && md5($_REQUEST["pass"])==$v){
		//echo "Login success!";
		$_SESSION["valid"]="yes";
		$_SESSION["lastname"]=$_REQUEST["lastname"];
		//$_SESSION["utype"]=$utype;
		$flag=1;
		break;
	}
}
if($flag==0){
	echo "<p style='color:red'>Wrong credentials!</p>";
}
if($flag==1){
	
	$file = fopen("logs.txt", "r") or die("Unable to open file!");
		$data=array();
		//loads the array with file data
		while($c=fgets($file)) {
			$c=trim($c);
			$ar=explode("-",$c);
			if($_REQUEST["lastname"]==$ar[1]){
				$temp["utype"]=$ar[0];
				$data[0]=$temp;
			}
		}
	fclose($file);
	
	//header("Location:adminhome.php");
	//$_SESSION["utype"]=$utype;
	
	if($data[0]["utype"]=="admin"){
	header("Location:adminhome.php");
	}
	else if($data[0]["utype"]=="manager"){
	header("Location:managerhome.php");
	}
	else if($data[0]["utype"]=="developer"){
	header("Location:developerhome.php");
	}
	else if($data[0]["utype"]=="client"){
	header("Location:clienthome.php");
	}
	
	
}

?>