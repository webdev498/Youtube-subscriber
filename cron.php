<?php
include 'inc/db.php'; // połączenie się z bazą danych
$tabela = 'rejestracja'; // zdefiniowanie tabeli MySQL
	mysql_query("UPDATE rejestracja SET klikniete=klikniete+1");
?>