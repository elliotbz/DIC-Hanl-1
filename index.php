<?php
	include "functions.php";

	if ( !isset($_SESSION["user"])) {
		header("Location: login.php");
		exit;
	} 

    if(!$_SESSION["index"]){
        $_SESSION["index"] = 1;
    }
    else{
        $_SESSION["index"]++;
    }
?>

<h2>Eigentliche Applikation</h2>
<p>Das hier soll erst angezeigt werden, wenn der Benutzer eingeloggt ist...</p>

<div id="navigation">
	<h3>Navigation</h3>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="?pageid=1">What is Lorem Ipsum? </a></li>
		<li><a href="?pageid=2">Why do we use it? </a></li>
		<li><a href="?pageid=3">Where can I get some? </a></li>
	</ul>
</div>
<div id="content">
			<h3>All about Lorem Ipsum</h3>
			<p>Find out more ...</p>
</div>

<?php
	if(isset($_GET["pageid"])){
		$pageid = $_GET["pageid"];

		if($pageid == 1)
			include "content/what.php";
		else if($pageid == 2)
			include "content/why.php";
		else if($pageid == 3)
			include "content/where.php";
	}
?>

<a href="logout.php">Logout</a>
<br>
<a href="statistics.php">Statistik</a>
