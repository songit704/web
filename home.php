<center><b><h2>Welcome to X Software Solution</br></h2></b></center>

<hr>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="portfolio.html">Portfolio</a></li>
  <li><a href="contact.html">Contact</a></li>
</ul>


<form action="server.php" method="post">

<h4>Login here!</h4>
Username:
<input type="text" name="lastname" /></br>
Password:&nbsp;
<input type="password" name="pass" /></br>
<input type="submit" name="sub" value="Login" /></br>
New user? <a href="signup.php">Register here!</a>
</form></br>
<?php
session_start();
if(isset($_SESSION["msg"])){
	echo $_SESSION["msg"];
	unset($_SESSION["msg"]);
}
?>

<img src="images\imghome.jpg" width="800px" height="400px">