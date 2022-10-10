<?php
session_start();
$_SESSION["uname"] == "";
session_unset();
  header('Location: index.php');

?>