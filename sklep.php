<?php
ob_start();
session_start();
include 'inc/db.php';
$login = $_SESSION['login'];
if ($_GET['potwierdz'] == "tak") {
	$ilosc = $_GET["ilosc"];
	mysql_query("UPDATE rejestracja SET klikniete=klikniete+$ilosc where login='$login'");
}
echo $login;
?>