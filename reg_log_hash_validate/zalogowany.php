<?php

session_start();

if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {

	echo "Zalogowany!<br>";
	echo "Cześć ".$_SESSION['firstname']." ".$_SESSION['lastname'];
	echo "<br>";
	echo session_id();
	echo "<br>";


		if (isset($_POST['wyloguj'])) {

			header("Location: logowanie.php");
			echo "Wylogowano!";
			session_destroy();
			session_unset();
		} else {

			
		}

} else {

	header('Location: logowanie.php');
}

	/*echo "Zalogowany!<br>";
	echo "Cześć ".$_SESSION['firstname']." ".$_SESSION['lastname'];
	echo "<br>";
	echo session_id();
	echo "<br>";


		if (isset($_POST['wyloguj'])) {

			header("Location: logowanie.php");
			echo "Wylogowano!";
			session_destroy();
			session_unset();
		} else {

			
		}*/


/*echo "Zalogowany!<br>";
echo "Cześć ".$_SESSION['firstname']." ".$_SESSION['lastname'];
echo "<br>";
echo session_id();
echo "<br>";
echo $_SESSION['conn'];


if (isset($_POST['wyloguj'])) {

	header("Location: logowanie.php");
	echo "Wylogowano!";
	unset($_SESSION['login']);
	unset($_SESSION['pass']);
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
}*/


?>

<br>
<form action="zalogowany.php" method="post">	
	<input type="submit" name="wyloguj_przycisk" value="Wyloguj">
	<input type="hidden" name="wyloguj" value="0">
</form>