<?php

// OTWIERAMY SESJĘ
session_start();

if (isset($_POST['login']) && isset($_POST['password'])) {


// FILTRUJEMY DANE WEJŚCIOWE
$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

// OTWIERAMY POŁĄCZENIE DO BAZY DANYCH
// DEKLARUJEMY DANE UWIERZYTELNIAJĄCE

$host = "localhost";
$user = "root";
$password = "";
$dbname = "dbteb";

// NAWIĄZUJEMY POŁĄCZENIE

$connection = mysqli_connect($host, $user, $password, $dbname) or die ("Nie można połączyć się z bazą danych");

// POBIERAMY HASH UŻYTKOWNIKA I SPRAWDZAMY CZY JEST PRAWIDŁOWY - ALGORYTM BCRYPT

$hash = "SELECT password FROM dbteb.users WHERE id = '$login'";
$hash_result = mysqli_query($connection, $hash);
$hash_result1 = mysqli_fetch_array($hash_result);
$hash_result2 = $hash_result1['password'];

        if (password_verify($pass, $hash_result2)) {
            $sql = "SELECT * FROM dbteb.users WHERE id = '$login' AND password = '$hash_result2'";
            $result = mysqli_query($connection, $sql);
            $result1 = mysqli_fetch_array($result);

                    if (mysqli_num_rows($result) > 0) {
                        // DEKLARUJEMY DANE
                            $_SESSION['login'] = $login;
                            $_SESSION['pass'] = $pass;
                            $_SESSION['firstname'] = $result1['firstname'];
                            $_SESSION['lastname'] = $result1['lastname'];
                            header("Location: zalogowany.php");
                    } else {

                        echo "<strong><font color='red'>Błędy login lub hasło</font></strong><br><br>";
                    }

                    mysqli_close($connection);

                } else {
                    
                    echo "<strong><font color='red'>Błędy login lub hasło</font></strong><br><br>";
                }
}

?>
<strong>Wpisz login oraz hasło aby się zalogować:</strong><br><br>
<form action="logowanie.php" method="post">
	<input type="text" name="login"><br><br>
	<input type="password" name="password"><br><br>
	<input type="submit" value="Zaloguj"><br>
</form>
<strong>Nie masz jeszcze konta w naszym serwisie?</strong><br>
<a href="rejestracja.php">Rejestracja</a>