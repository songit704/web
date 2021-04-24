<?php
session_start();
//print_r($GLOBALS);
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	?>
	<center><h2>Welcome Dear Client</h2></center>
<hr></br>


<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="portfolio.html">Portfolio</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a class="active" href="clienthome.php">Your home</a></li>
  <li><a href="customerprofile.html">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>

<form>
<h3>Please enter your project id: </h3>
<input type="search" name="txtprojectsearch" value=""></br></br>
<button type="button" name="btnprojsub" value="">Search</button></br>

</form>
<?php
}
else{
	//$_SESSION["msg"]="Suspicious login attempt";
	header("Location:logout.php");
}
?>