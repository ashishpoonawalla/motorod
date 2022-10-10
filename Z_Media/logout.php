<?php
session_start();
	$_SESSION["uname"] = "";
	$_SESSION["fullname"]="";
	$_SESSION["role"] ="";
	$_SESSION["uimage"] = "";
	header('Location: index.php');
?>