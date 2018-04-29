<?php

error_reporting(0);

// ŁĄCZENIE Z BAZĄ DANYCH

$host = "localhost";
$user = "root";
$password = ""; // PUSTE HASŁO TYLKO NA CZAS TESTÓW
$dbname = "dbteb";

$match = "";

// NAWIĄZUJEMY POŁĄCZENIE

$connection = mysqli_connect($host, $user, $password, $dbname) or die ("Nie można połączyć się z bazą danych");

// REJESTRUJEMY UŻYTKOWNIKA W BAZIE DANYCH

	if ($_POST['imie'] && $_POST['nazwisko'] && $_POST['password'] && $_POST['password2'] && $_POST['login']) {

		include_once 'controller.php';
	}

?>
<html>
	<head>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
<strong>Formularz rejestracji:</strong><br><br>
		<form action="rejestracja.php" method="post">
			Podaj login:<br><input type="text" name="login" required><br><br>
			Podaj imie:<br><input type="text" name="imie" required><br><br>
			Podaj nazwisko:<br><input type="text" name="nazwisko" required><br><br>
			Podaj adres email <br><input type="text" name="email" required><br><br>
			Podaj hasło:<br><input type="password" name="password" required><br><br>
			Powtórz hasło:<br><input type="password" name="password2" required><br><br>
			Udowodnij, że nie jesteś botem ! <br>
			<div class="g-recaptcha" data-sitekey="6LfHHFYUAAAAAIK-g4RBQkbhg_4A4b6WHWBSj567"></div><br>
			<input type="submit" value="Zarejestruj !">
		</form>
		<a href="logowanie.php">Wracam do strony logowania</a>
	</body>
</html>

