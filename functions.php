<?php
	session_start();

	// Konfiguration
	$config_user = "Hansi";
	$config_password = "123";

	// Funktionalität
	function checkLogin ($user, $password){
		global $config_user, $config_password;
		
		if ( ($user == $config_user) && ( $password == $config_password ))
			return true;
		return false;
	}

?>