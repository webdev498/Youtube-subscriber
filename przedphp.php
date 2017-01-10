<?php
	$login = $_SESSION['login'];
	$login = strtolower($login);
	if(!isset($_POST['indeks'])) {
	} elseif($_POST['indeks'] == "subscribe") {
		mysql_query("UPDATE rejestracja SET klikniete=klikniete+1 WHERE login='$login' LIMIT 1");
	} else {
		mysql_query("UPDATE rejestracja SET klikniete=klikniete-1 WHERE login='$login' LIMIT 1");
	}

	$MYSQLzapytanieyt = "SELECT * FROM `rejestracja` WHERE login='$login' LIMIT 1";
	$MYSQLidzzapytanieyt = mysql_query($MYSQLzapytanieyt);
	while ($MYSQLyt=mysql_fetch_assoc($MYSQLidzzapytanieyt)) {
		$yt = $MYSQLyt['yt'];
	}
	if ($_GET["weryfikacja"] == "potwierdz") {
		$kod = htmlspecialchars(stripslashes(strip_tags(trim($_GET['kod']))), ENT_QUOTES); // filtrowanie $_GET['kod']
		$wynik = mysql_query("SELECT * FROM $tabela WHERE kod='$kod' and status=1");
		if (mysql_num_rows($wynik) == 1) {
			$weryfikacjablad++;
		} else {
			$wynik = mysql_query("DELETE FROM $tabela WHERE data<=DATE_SUB(NOW(),INTERVAL 2 DAY) and status=0");
			$wynik = mysql_query("UPDATE $tabela SET status='1', data=NOW() WHERE kod='$kod' and status=0");
			$wynik = mysql_query("SELECT * FROM $tabela WHERE kod='$kod' and status=1");
			if (mysql_num_rows($wynik) == 1) {
				$weryfikacjapowodzenie++;
			}
		}
		if (!$kod or mysql_num_rows($wynik)<>1) {
			$weryfikacjabladadmin++;
		}
		mysql_close($polaczenie);
	}

if ($_POST['logowanie']) {
	$login = htmlspecialchars(stripslashes(strip_tags(trim($_POST["login"]))), ENT_QUOTES);
	$haslo = $_POST["haslo"];
	$login = strtolower($login);
	$ip = $_SERVER['REMOTE_ADDR'];
	$zapytanie = "SELECT * FROM `rejestracja` WHERE login = '" . $login . "' LIMIT 1";
	$idzapytania = mysql_query($zapytanie);
	while ($salty =mysql_fetch_assoc($idzapytania))
	{
		$salt1 = $salty['salt1'];
		$salt2 = $salty['salt2'];
		$salt3 = $salty['salt3'];
		$salt4 = $salty['salt4'];
		$salt5 = $salty['salt5'];
		$salt6 = $salty['salt6'];
	}
		$haslo = md5($haslo);
		$sol1 = md5("$salt1"); //sól użytkownika pobierana z bazy
		$sol2 = sha1("$salt2"); //sól dodatkowa
		$sol3 = md5("$salt3"); //sól użytkownika pobierana z bazy
		$sol4 = sha1("$salt4"); //sól dodatkowa
		$sol5 = md5("$salt5"); //sól użytkownika pobierana z bazy
		$sol6 = sha1("$salt6"); //sól dodatkowa
		$hash = hash('sha512', $haslo . $sol1  . $sol2);
		$hash1 = hash('sha512', $hash . $sol3  . $sol4);
		$hash2 = hash('sha512', $hash1 . $sol5  . $sol6);
	$wynik=mysql_query("SELECT * FROM $tabela WHERE
	login='$login' and haslo='$hash2' and status=0");
	// jeżeli użytkownik zarejestrował się, a nie aktywował swojego konta, to wyświetla się komunikat
	if (mysql_num_rows($wynik) == 1) {
		$informacja = mysql_fetch_array($wynik);
		
		$logowanieaktywania++;
   }

	// jeżeli wszystko jest dobrze, użytkownik się loguje
	$wynik=mysql_query("SELECT * FROM $tabela WHERE
	login='$login' and haslo='$hash2' and status=1");

	if (mysql_num_rows($wynik) == 1) {
		$informacja = mysql_fetch_array($wynik);
		$_SESSION["login"] = $informacja["login"];
		header('Location: index.php');
		mysql_query("UPDATE $tabela SET ipzalogowanego='$ip' WHERE login='$login'");
	} else {
		$logowanienierawidlowe++;
	}
	mysql_close($polaczenie);
}

if ($_POST["rejestracja"]) {
        $login = htmlspecialchars(stripslashes(strip_tags(trim($_POST["login"]))), ENT_QUOTES);
		$nazwa = htmlspecialchars(stripslashes(strip_tags(trim($_POST["nazwa"]))), ENT_QUOTES);
		$yt = htmlspecialchars(stripslashes(strip_tags(trim($_POST["yt"]))), ENT_QUOTES);
        $haslo = $_POST["haslo"];
        $haslo2 = $_POST["haslo2"];
		$ip = $_SERVER['REMOTE_ADDR'];
        $email = htmlspecialchars(stripslashes(strip_tags(trim($_POST["email"]))), ENT_QUOTES);
        $email2 = htmlspecialchars(stripslashes(strip_tags(trim($_POST["email2"]))), ENT_QUOTES);
		$login = strtolower($login);
		$email = strtolower($email);
		$email2 = strtolower($email2);
		$nazwa = strtolower($nazwa);
		
        if (strlen($login) < 3 or strlen($login) > 30 or !preg_match("/^[a-zA-Z0-9_.]+$/i", $login)) {
            $blad++;
			$rejestracjalogin++;
        } else {
            $wynik = mysql_query("SELECT * FROM $tabela WHERE login='$login'");
            if (mysql_num_rows($wynik) <> 0) {
                $blad++;
				$rejestracjanazwa++;
            }
        }

        if (strlen($haslo) < 6 or strlen($haslo) > 30 ) {
            $blad++;
			$rejestracjahaslo++;
        }
        if ($haslo !== $haslo2) {
            $blad++;
			$rejestracjahasla++;
        }
        if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
            $blad++;
			$rejestracjaemail++;
        } else {
            $wynik = mysql_query("SELECT * FROM $tabela WHERE email='$email'");
            if (mysql_num_rows($wynik) <> 0) {
                $blad++;
                
				$rejestracjaemaile++;
            }
        }
		if ($nazwa == '') {
            $blad++;
			$rejestracjanazwa++;
		}
		if ($yt == '') {
            $blad++;
			$rejestracjayt++;
		}
        if ($blad == 0) {
			$salt1 = uniqid(rand());
			$salt2 = uniqid(rand());
			$salt3 = uniqid(rand());
			$salt4 = uniqid(rand());
			$salt5 = uniqid(rand());
			$salt6 = uniqid(rand());
			$haslo = md5($haslo);
			$sol1 = md5("$salt1"); //sól użytkownika pobierana z bazy
			$sol2 = sha1("$salt2"); //sól dodatkowa
			$sol3 = md5("$salt3"); //sól użytkownika pobierana z bazy
			$sol4 = sha1("$salt4"); //sól dodatkowa
			$sol5 = md5("$salt5"); //sól użytkownika pobierana z bazy
			$sol6 = sha1("$salt6"); //sól dodatkowa
			$hash = hash('sha512', $haslo . $sol1  . $sol2);
			$hash1 = hash('sha512', $hash . $sol3  . $sol4);
			$hash2 = hash('sha512', $hash1 . $sol5  . $sol6);
            $kod = uniqid(rand()); // tworzenie unikalnego kodu dla użytkownika
			$wynik = mysql_query("INSERT INTO $tabela SET salt1='$salt1', salt2='$salt2', salt3='$salt3', salt4='$salt4', salt5='$salt5', salt6='$salt6', yt='$yt', nazwa='$nazwa', login='$login', haslo='$hash2', email='$email', kod='$kod', data=NOW(), ip='$ip'");
			if ($wynik) {
$naglowek = "From: <support@marketofscripts.ovh>\n";
$naglowek .= "MIME-Version: 1.0\n";
$naglowek .= "Content-type: text/html; charset=utf-8\n";
$list = "Gratulacje! $login !
<br>
Twoje konto zostało poprawnie założone. Pełny dostęp wymaga jednak aktywacji.
<br>
Kliknij lub skopiuj do przeglądarki poniższy link celem potwierdzenia rejestracji.
<br>
http://nolife.marketofscripts.ovh/index.php?weryfikacja=potwierdz&kod=$kod
<br>
Prosimy nie odpowiadać na ten E-mail.
<br>
Pozdrawiamy,
";
mail($email, "Rejestracja użytkownika", $list, $naglowek);
		  $rejestracjapowodznie++;
		   mysql_close($polaczenie);
           }
        }
    }
?>