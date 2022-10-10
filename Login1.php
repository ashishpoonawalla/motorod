<?php
session_start();
if (isset($_SESSION["uname"]) && $_SESSION["uname"] != null && $_SESSION["uname"] != ""){

	header('Location: User.Profile.php');	
	
}else{
	header('Location: Login.php');	
}
?>