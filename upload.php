<?php
//print_r($GLOBALS);

$source=$_FILES['fileToUpload']['tmp_name'];
$target="uploads/".$_FILES['fileToUpload']['name'];
if(move_uploaded_file($source,$target)){
	echo "File uploaded:".$target;
}

?>
</br></br>
<a href="managerhome.php">Go To Your Home</a>