<?php
include 'inc/db.php'; // połączenie się z bazą danych
$MYSQLzapytanieyt = "SELECT * FROM `rejestracja` ORDER BY RAND() LIMIT 1";
$MYSQLidzzapytanieyt = mysql_query($MYSQLzapytanieyt);
while ($MYSQLyt=mysql_fetch_assoc($MYSQLidzzapytanieyt)) {
$yt = $MYSQLyt['yt'];
}
echo "<div class='g-ytsubscribe' data-channelid=$yt data-layout='default' data-count='hidden' data-onytevent='onYtEvent'></div>";
?>