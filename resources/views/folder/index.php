<?php

session_start();
if(!$_SESSION['registration']){

	header('location:login.php');

}

?>



<h1>Welcome!</h1>
<br>
<a href="logout.php">Logout</a>