<?php
	include "functions.php";

	session_unset();
	session_destroy();

	$_SESSION = array();

	setcookie("PHPSESSID", "", time() - 3600, "/");

	header("Location: login.php");
?>