<script>
function onYtEvent(payload) {
	var logElement = document.getElementById('ytsubscribe-events-log');
	if (payload.eventType == 'subscribe') {
		$.ajax({
			url: "index.php",
			type: "POST",
			data: "indeks=subscribe",
		});
		logElement.innerHTML = 'SUB'
	} else if (payload.eventType == 'unsubscribe') {
		$.ajax({
			url: "index.php",
			type: "POST",
			data: "indeks=unsubscribe",
		});
		logElement.innerHTML = 'UN SUB'
	}
	if (window.console) {
	  window.console.log('ytsubscribe event: ', payload);
	}
}
</script>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ob_start();
session_start();
include 'inc/db.php'; // połączenie się z bazą danych
$tabela = 'rejestracja'; // zdefiniowanie tabeli MySQL
include 'przedphp.php'; // połączenie się z bazą danych
if ($_GET["wylogowanie"] == "tak") {
    session_unset();
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html class="no-js" lang="pl"> 
   <head>
        <meta charset="utf-8">
        <title>SubClicker</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-Responsive.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="skin/default.css">
    </head>
<?php
if (!isset($_SESSION['login'])) {
?>
    <body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.php">SubClicker</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Strona główna</a></li>
				<li><a data-toggle="modal" data-target="#rejestracja">Zarejestruj się</a></li>
				<li><a data-toggle="modal" data-target="#logowanie">Logowanie</a></li>
			  </ul>
			</div>
		  </div>
			<?php
			include 'wiadomosciprzed.php'; // połączenie się z bazą danych
			?>
			<div class="modal fade" id="rejestracja" tabindex="-1" role="dialog" aria-labelledby="rejestracjaLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
							<h4 class="modal-title" id="rejestracjaLabel">Rejestracja</h4>
						</div>
						<div class="modal-body">
							<p>
								<div class="cform" id="contact-form">
									<form action="index.php" method="post">
										<input type="hidden" name="rejestracja" value="TRUE" />
										<div class="form-group">
											<label for="text">Login </label>
											<input type="text" class="form-control" name="login" id="login" placeholder="Twój Login" value="<?php echo $login; ?>"/>
										</div>
										<div class="form-group">
											<label for="text">Hasło </label>
											<input type="password" class="form-control" name="haslo" id="haslo" placeholder="Twoje hasło" value="<?php echo $haslo; ?>"/>
										</div>
										<div class="form-group">
											<label for="text">Powtórz hasło </label>
											<input type="password" class="form-control" name="haslo2" id="haslo2" placeholder="Powtórz hasło" value="<?php echo $haslo2; ?>"/>
										</div>
										<div class="form-group">
											<label for="text">Email </label>
											<input type="Email" class="form-control" name="email" id="email" placeholder="Twój Email" data-rule="email" data-msg="Prosimy podać prawidłowy adres E-mail" value="<?php echo $email; ?>"/>
										</div>
										<div class="form-group">
											<label for="text">Nazwa kanału </label>
											<input type="text" class="form-control" name="nazwa" id="nazwa" placeholder="Twoja nazwa kanału" value="<?php echo $nazwa; ?>"/>
										</div>
										<div class="form-group">
											<label for="text">Twój identyfikator <br>
												<font size="1"><span style="color:#ccc">www.youtube.com/channel/</span>
													<font color="red">UCfQnVJIdCw3SjaizXJ_W00Q</font>
													<br>Uwaga! Podajemy tylko identyfikator - zaznaczony na czerwono.
												</font>
											</label>
											<input type="text" class="form-control" name="yt" id="yt" placeholder="Twój identyfikator" value="<?php echo $yt; ?>"/>
										</div>
										<button type="submit" class="btn btn-theme pull-left">Zarejestruj mnie</button>
										<br>
									</form>
								</div>
							</p>
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="logowanie" tabindex="-1" role="dialog" aria-labelledby="logowanieLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
							<h4 class="modal-title" id="logowanieLabel">Logowanie</h4>
						</div>
						<div class="modal-body">
							<p>
								<div class="cform" id="contact-form">
									<form action="index.php" method="post">
										<input type="hidden" name="logowanie" value="TRUE" />
										<div class="form-group">
											<label for="text">Login </label>
											<input type="text" class="form-control" name="login" id="login" placeholder="Twój Login" value="<?php echo $login; ?>"/>
										</div>
										<div class="form-group">
											<label for="text">Hasło </label>
											<input type="password" class="form-control" name="haslo" id="haslo" placeholder="Twoje hasło"/>
										</div>
										<button type="submit" class="btn btn-theme pull-left">Zaloguj</button>
										<br>
									</form>
								</div>
							</p>
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="col-sm-7 align-center">
					<h2>Tresc</h2>
					<p>dsdsaasddfsdsfdfs</p>
				</div>
			</div>
			<div>
				<div class="col-sm-1 align-right">
					<iframe width="420" height="315" src="//www.youtube.com/embed/v_A1VRYI7Bg" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<section id="footer" class="section footer">
				<div class="row align-center copyright">
					<div class="col-sm-12"><p>Copyright &copy; SubClicker.com <a data-toggle="modal" data-target="#polityka">Polityka prywatności</a> <a data-toggle="modal" data-target="#regulamin">Regulamin</a></p></div>
				</div>
			</section>
<?php
} else {
?>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">SubClicker</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Strona główna</a></li>
				<li><a data-toggle="modal" data-target="#sklep">sklep</a></li>
				<li><a data-toggle="modal" data-target="#profil">Profil</a></li>
				<li><a href="../index.php?wylogowanie=tak">Wyloguj się</a></li>
				</ul>
			</div>
		  </div>
			<?php
				$MYSQLzapytanieyt = "SELECT * FROM `rejestracja` WHERE login='$login' LIMIT 10";
				$MYSQLidzzapytanieyt = mysql_query($MYSQLzapytanieyt);
				while ($MYSQLyt1=mysql_fetch_assoc($MYSQLidzzapytanieyt)) {
					$klikniete = $MYSQLyt1['klikniete'];
					$maxklikniec = $MYSQLyt1['maxklikniec'];
				}
			?>
			<div class="col-sm-7 align-right"><h2><?php echo "Punkty: $klikniete/$maxklikniec";?></h2></div>
			<div class="col-sm-7 align-center">
				<h2>Subskrybuj</h2>
				<p>
				<?php
					if ($klikniete !== $maxklikniec) {
					include 'inc/db.php'; // połączenie się z bazą danych
					$MYSQLzapytanieyt = "SELECT * FROM `rejestracja` ORDER BY RAND() LIMIT 4";
					$MYSQLidzzapytanieyt = mysql_query($MYSQLzapytanieyt);
					while ($MYSQLyt=mysql_fetch_assoc($MYSQLidzzapytanieyt)) {
						$yt = $MYSQLyt['yt'];
					?>
						<div class="g-ytsubscribe" data-channelid="<?php echo $yt; ?>" data-layout="default" data-count="hidden" data-onytevent="onYtEvent"></div>
					<?php
					}
					} else {
						?>
						Przekroczyłeś limit kliknięć kup dodatkowe pakiety
						<?php
					}
				?>
				<script>
					odswiezaj();
				</script>
				</p>
				<p>
				<?php
				$MYSQLzapytanieyt = "SELECT * FROM `rejestracja` WHERE SubPlusPlus='1' ORDER BY RAND() LIMIT 1";
				$MYSQLidzzapytanieyt = mysql_query($MYSQLzapytanieyt);
				while ($MYSQLyt=mysql_fetch_assoc($MYSQLidzzapytanieyt)) {
					$yt = $MYSQLyt['yt'];
					if ($klikniete !== $maxklikniec) {
						?>
						<div class="g-ytsubscribe" data-channelid="<?php echo $yt; ?>" data-layout="default" data-count="hidden" data-onytevent="onYtEvent"></div>
						<?php
					} 
				}
				?>
				<div id="ytsubscribe-events-log"></div>
				</p>
			</div>
			<div>
				<div class="col-sm-1 align-right">
					<iframe width="420" height="315" src="//www.youtube.com/embed/v_A1VRYI7Bg" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<section id="footer" class="section footer">
				<div class="row align-center copyright">
					<div class="col-sm-12"><p>Copyright &copy; SubClicker.com <a data-toggle="modal" data-target="#polityka">Polityka prywatności</a> <a data-toggle="modal" data-target="#regulamin">Regulamin</a></p></div>
				</div>
			</section>
			<div class="modal fade" id="profil" tabindex="-1" role="dialog" aria-labelledby="profilLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
							<h4 class="modal-title" id="profilLabel">Profil</h4>
						</div>
						<div class="modal-body">
							<p>
								<div class="cform" id="contact-form">
									<?php
									$login = $_SESSION['login'];
									$zapytanie = "SELECT * FROM `rejestracja` WHERE login='$login' LIMIT 1";
									$idzapytania = mysql_query($zapytanie);
									while ($wiersz=mysql_fetch_assoc($idzapytania))
									 {
										$login = $wiersz['login'];
										$email = $wiersz['email'];
										$nazwa = $wiersz['nazwa'];
									 }
									?>
									<div class="form-group">
										Login: <?php echo $login;?>
										<br>
										Chanel Name: <?php echo $nazwa;?>
										<br>
										E-mail: <?php echo $email;?>
										<br>
										Punkty: <?php echo "$klikniete/$maxklikniec";?>
										<br>
										<script>
											function showHidden1(obj){
											obj = document.getElementById(obj);
											obj.style.display == 'none' ? obj.style.display = '' : obj.style.display = 'none';
											}
										</script>
										<a style="" id="link1" href="javascript: showHidden1('hidden1');showHidden1('link1');showHidden1('link1');">Zmień Dane</a><a id="link4" style="display:none;" href="javascript: showHidden1('hidden1');showHidden1('link1');showHidden1('link1');"></a></p>
										<div id="hidden1" style="display: none;">
											<form action="index.php" method="post">	
											<input type="hidden" name="zmiendane" value="TRUE" />
											  <div class="form-group">
												<label for="haslo">Login</label>
												<input type="text" class="form-control" disabled="disabled" name="login" id="login" value="<?php echo $login; ?>" />
												<div class="validation"></div>
											  </div>
											  <div class="form-group">
												<label for="haslo">Email</label>
												<input type="email" class="form-control" disabled="disabled" name="email" id="email" value="<?php echo $email; ?>" />
												<div class="validation"></div>
											  </div>
											  <div class="form-group">
												<label for="haslo">Hasło</label>
												<input type="text" class="form-control" name="haslo" id="haslo" placeholder="Twoje hasło"/>
												<div class="validation"></div>
											  </div>
											  <div class="form-group">
												<label for="haslo">Powtórz hasło <span class="req">*</span></label>
												<input type="text" class="form-control" name="haslo2" id="haslo2" placeholder="Powtórz hasło"/>
												<div class="validation"></div>
											  </div>
											  <button type="submit" class="btn btn-theme pull-left">Aktualizuj moje dane</button>
											</form>
											<br>
										</div>
									</div>
							</p>
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="modal fade" id="sklep" tabindex="-1" role="dialog" aria-labelledby="sklepLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
							<h4 class="modal-title" id="sklepLabel">Sklep</h4>
						</div>
						<div class="modal-body">
							<script>
								function showHidden(obj){
								obj = document.getElementById(obj);
								obj.style.display == 'none' ? obj.style.display = '' : obj.style.display = 'none';
								}
							</script>
							<p>
								<div class="cform" id="contact-form">
									<div class="form-group">
											<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
												<input type="hidden" name="cmd" value="_s-xclick">
												<input type="hidden" name="hosted_button_id" value="RWQUJFV3Z58XA">
												<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
												<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">
											</form>
											<br>
									</div>
								</div>
							</p>
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
<?php
}
?>
		<script src="https://apis.google.com/js/platform.js"></script>
		<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/fancybox/jquery.fancybox.pack.js"></script>
		<script src="js/skrollr.min.js"></script>		
		<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script src="js/jquery.localscroll-1.2.7-min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/main.js"></script>
		</body>
</html>