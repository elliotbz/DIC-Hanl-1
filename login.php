<?php
	include "functions.php";

	if(isset($_POST["username"]) && isset($_POST["password"])){
		if(checkLogin($_POST["username"], $_POST["password"])){
			$_SESSION["user"] = $_POST["username"];

			header("Location: index.php");
			exit;
		}
	}

    if(!$_SESSION["login"]){
        $_SESSION["login"] = 1;
    }
    else{
        $_SESSION["login"]++;
    }
?>
<h2>Login</h2>

<p>Um die Applikation nutzen zu können, ist ein Login notwendig.</p>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<input type="text" name="username" placeholder="Benutzername" />
	<input type="password" name="password" placeholder="Passwort" />
	<input type="submit" value="Einloggen" />
</form>

