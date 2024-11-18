<h2>Statistik</h2>

<?php
    include "functions.php";

    if(!isset($_SESSION["user"])){
        header("Location: login.php");
        exit;
    }

    if(!$_SESSION["statistics"]){
        $_SESSION["statistics"] = 1;
    }
    else{
        $_SESSION["statistics"]++;
    }

?>

<button onclick="window.location.href='index.php'">Zurück zur Seite</button>

<h3>ALLGEMEINE INFORMATIONEN</h3>

<table style="border: 1px solid black;">
    <tr>
        <td>Datum:</td>
        <td><?php echo date("d.m.Y");?></td>
    </tr>
    <tr>
        <td>Uhrzeit:</td>
        <td><?php echo date("H:i");?></td>
    </tr>
    <tr>
        <td>Session-ID:</td>
        <td><?php echo $_COOKIE['PHPSESSID'];?></td>
    </tr>
</table>

<h3>SEITENBESUCHE</h3>

<table style="border: 1px solid black;">
    <tr>
        <th>URL</td>
        <th>Visits</td>
    </tr>
    <tr>
        <td>login.php</td>
        <td><?php echo $_SESSION['login'];?></td>
    </tr>
    <tr>
        <td>index.php</td>
        <td><?php echo $_SESSION['index'];?></td>
    </tr>
    <tr>
        <td>index.php?pageid=1</td>
        <td><?php echo $_SESSION['index1'];?></td>
    </tr>
    <tr>
        <td>index.php?pageid=2</td>
        <td><?php echo $_SESSION['index2'];?></td>
    </tr>
    <tr>
        <td>index.php?pageid=3</td>
        <td><?php echo $_SESSION['index3'];?></td>
    </tr>
    <tr>
        <td>statistics.php</td>
        <td><?php echo $_SESSION['statistics'];?></td>
    </tr>
</table>