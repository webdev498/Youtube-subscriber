<?php
$mysql_host = 'host';
$mysql_login = 'login';
$mysql_haslo = 'password';
$mysql_baza = 'saddsafa_nolife.sql';
$polaczenie = mysql_connect($mysql_host, $mysql_login, $mysql_haslo) or die('Przepraszamy! strona chwilowo niedostępną.');
mysql_select_db($mysql_baza) or die('Przepraszamy! strona chwilowo niedostępną.');
?>