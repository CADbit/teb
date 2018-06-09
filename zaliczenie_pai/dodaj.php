<?php

include_once 'config.php';

if(isset($_POST['dodaj_imie']) && isset($_POST['dodaj_nazwisko']) && isset($_POST['dodaj_email'])) {

			function generateRandomString($length = 10) {
			    $characters = '0123456789';
			    $charactersLength = strlen($characters);
			    $randomString = '';
			    
			    for ($i = 0; $i < $length; $i++) {
			        $randomString .= $characters[rand(0, $charactersLength - 1)];
			    }
			    return $randomString;
			}

			$id = generateRandomString();
			$user_firstname = $_POST['dodaj_imie'];
			$user_lastname = $_POST['dodaj_nazwisko'];
			$user_email = $_POST['dodaj_email'];

			$sql = "INSERT INTO sklep_zaliczenie.users (id, firstname, lastname, email) VALUES ('$id', '$user_firstname', '$user_lastname', '$user_email')";

			if ($query = mysqli_query($conn, $sql)) {

				header("Location: klienci.php?success=1");

			} else {

				header("Location: klienci.php?error=1");

			}

	}

?>