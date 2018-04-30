<?php

		$login_string = $_POST['login'];
		$exist = 0;
		$same_pass = 0;
		$wrong_password = 0;
		$wrong_login = 0;
		$bot_check = 0;
		$ctype = 1;
		$email_check = 0;
		$email_check2 = 0;
		$captcha_check = 1;

		// WERYFIKUJEMY RECAPTCHA
		$captcha_secret_key = "6LfHHFYUAAAAAAMwegm6ms6cKgKXzrt9R1C0uTgn";
		$response_key = $_POST['g-recaptcha-response'];
		$host_ip = $_SERVER['REMOTE ADDR'];
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$captcha_secret_key&response=$response_key&remoteip=$host_ip";
		$response = file_get_contents($url);
		$response_verify = json_decode($response);

		if ($response_verify->success) {

			$captcha_check = 0;

		}

		// SPRAWDZAMY CZY W BAZIE DANYCH ISTNIEJE UŻYTKOWNIK O TAKIM LOGINIE
		$login_check = "SELECT * FROM dbteb.users WHERE id = '$_POST[login]'";
		$login_check_result = mysqli_query($connection, $login_check);
		if (mysqli_num_rows($login_check_result) > 0) {
			$exist = 1;
			echo "<strong><font color='red'>Login jest już zajęty. Wybierz inny!</font></strong><br><br>";

		}

		// SPRAWDZAMY CZY LOGIN ZAWIERA NIEDOZWOLONE ZNAKI SPECJALNE
		if (ctype_alnum($login_string)) {

			$ctype = 0;

		}

		// SPRAWDZAMY CZY HASŁA W OBU POLACH SĄ JEDNAKOWE
		if ($_POST['password'] != $_POST['password2']) {

			echo "<strong><font color='red'>Hasła nie pasują do siebie!</font></strong><br><br>";
			$same_pass = 1;

		} elseif ($_POST['password'] != $_POST['password2'] && strlen($_POST['password']) < 8) {

			echo "<strong><font color='red'>Hasła nie pasują do siebie!</font></strong><br><br>";
			echo "<strong><font color='red'>Hasła jest za krótkie! Minimalna długość hasła to 8 znaków</font></strong><br><br>";
			$same_pass = 1;
			$wrong_pasword = 1;

		} elseif (strlen($_POST['password']) < 8) { // WALIDACJA DŁUGOŚCI HASŁA

			echo "<strong><font color='red'>Hasła jest za krótkie! Minimalna długość hasła to 8 znaków</font></strong><br><br>";
			$wrong_pasword = 1;

		} elseif (strlen($_POST['login']) < 5) { // WALIDACJA DŁUGOŚCI LOGINU

			echo "<strong><font color='red'>Login jest za krótki! Minimalna długość loginu to 5 znaków</font></strong><br><br>";
			$wrong_login = 1;

		} elseif ($_POST['bot'] != $_POST['bot_wynik']) {

			echo "<strong><font color='red'>Wynik obliczeń jest niepoprawny. Jesteś botem?</font></strong><br><br>";
			$bot_check = 1;

		} elseif (!ctype_alnum($login_string)) { // WALIDACJA ZNAKÓW SPECJALNYCH

			echo "<strong><font color='red'>Login nie może zawierać znaków specjalnych!</font></strong><br><br>";
			$ctype = 1;

		} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // WALIDACJA ADRESU EMAIL

			echo "<strong><font color='red'>Podaj poprawny adres email!</font></strong><br><br>";
			$email_check = 1;

		} elseif (!filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) { // OCHRONA PRZED WSTRZYKIWANIEM NIEDOZWOLONYCH ZNAKÓW W ADRESIE EMAIL

			echo "<strong><font color='red'>Podaj poprawny adres email!</font></strong><br><br>";
			$email_check2 = 1;

		} elseif ($captcha_check == 1) {

			echo "<strong><font color='red'>Czy jesteś botem?</font></strong><br><br>";

		} elseif ($exist == 0 && $same_pass == 0 && $wrong_password == 0 && $wrong_login == 0 && $ctype == 0 && $email_check == 0 && $email_check2 == 0 && $captcha_check == 0) {

			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$login = $_POST['login'];
			$email = $_POST['email'];
			$sql = "INSERT INTO dbteb.users (id, firstname, lastname, password, email) VALUES ('$login', '$imie', '$nazwisko', '$pass', '$email')";
			$result = mysqli_query($connection, $sql);
			echo "<strong><font color='green'>Użytkownik został zarejestrowany!</font></strong><br><br>";
			$imie = "";
			$nazwisko = "";
			$pass = "";
			$login = "";
			$_POST['imie'] = array(); 
			$_POST['nazwisko'] = array();
			$_POST['password'] = array();
			$_POST['password2'] = array();
			$_POST['login'] = array();
			mysqli_close($connection);

		}


?>