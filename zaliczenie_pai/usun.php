<?php

include_once 'config.php';

if(isset($_GET['uid'])) {
	
	$delete_user = $_GET['uid'];
	$query = mysqli_query($conn, "DELETE FROM sklep_zaliczenie.users WHERE id = '$delete_user'");
	header("Location: klienci.php?success=2");

}

?>