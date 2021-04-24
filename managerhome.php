<?php
session_start();
//print_r($GLOBALS);
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	?>
	<center><h2>Welcome Dear Manager</h2></center>

<hr></br>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="portfolio.html">Portfolio</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a class="active" href="managerhome.php">Your home</a></li>
  <li><a href="empprofile.html">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>

<form>
<h3>Please enter a project id to check the status: </h3>
<input type="search" name="txtprojectsearch" value=""></br></br>
<button type="button" name="btnprojsub" value="">Search</button></br>

<h3>Please enter an user id to check the information</h3>
<input type="search" name="txtusersearch" value=""></br></br>
<button type="button" name="btnusersub" value="">Search</button></br>

</form>

<h3>Upload the latest project file into portfolio section</h3>
<form action="upload.php" method="post" enctype="multipart/form-data" name="mfm"><pre>
Your Last Name: <input type="text" name="lastname">

Select file to upload : <input type="file" name="fileToUpload">
<input type="submit" value="Upload File" name="sbt"></pre>
</form>
<?php
}

else{
	//$_SESSION["msg"]="Suspicious login attempt";
	header("Location:logout.php");
}
?>