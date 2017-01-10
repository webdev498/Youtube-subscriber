
							<?php
								if ($weryfikacjablad == 1) {
									echo '<span class="blad">Aktywowałeś już swoje konto.</span>';
								}
								if ($weryfikacjapowodzenie == 1) {
									echo '<span class="powodzenie">Dziękujemy. Rejestracja została zakończona poprawnie. Możesz się teraz zalogować.</span>';
								}
								if ($weryfikacjabladadmin == 1) {
									 echo '<span class="blad">Aktywowanie konta nie powiodło się, Powiadom administracje</span>';
								}	

								if ($rejestracjalogin == 1) {
									echo '<span class="blad">Proszę poprawny wprowadzić login (od 3 do 30 znaków).</span>';
								}
								if ($rejestracjanazwa == 1) {
									echo '<span class="blad">Podana nazwa użytkownika została już zajęta.</span>';
								}
								if ($rejestracjahaslo == 1) {
									echo '<span class="blad">Proszę poprawnie wpisać hasło (od 6 znaków do 30 znaków).</span>';
								}
								if ($rejestracjahasla == 1) {
									echo '<span class="blad">Podane hasła nie są ze sobą zgodne.</span>';
								}
								if ($rejestracjaemail == 1) {
									 echo '<span class="blad">Proszę wprowadzić poprawnie adres email.</span>';
								}
								if ($rejestracjaemaile == 1) {
									echo '<span class="blad">Podany adres e-mail jest już zajęty.</span>';
								}	
								if ($rejestracjanazwa == 1) {
									echo '<span class="blad">Podaj nazwe kanału YouTube.</span>';
								}
								if ($rejestracjayt == 1) {
									echo '<span class="blad">Podaj identyfikator konta.</span>';
								}
								if ($rejestracjapowodznie == 1) {
									 echo '<span class="powodzenie">Dziękujemy za rejestrację! W ciągu najbliższych 5 minut dostaniesz wiadomość e-mail z dalszymi wskazówkami rejestracji, wiadomość także może być w folderze SPAM.</span>';
								}
								
								if ($logowanieaktywania == 1) {
									echo '<span class="blad">Nie aktywowałeś jeszcze swojego konta. Aby to zrobić, wejdź w swoją skrzynkę odbiorczą, a następnie znajdź wiadmość z linkiem aktywacyjnym i aktywuj swoje konto</span>';
								}
								if ($logowanienierawidlowe == 1) {
									echo '<span class="blad">Zostały wprowadzone nieprawidłowe dane!</span>';
								}
								?>