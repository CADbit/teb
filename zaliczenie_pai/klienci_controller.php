<?php

error_reporting(0);

include_once 'config.php';

$klienci_table = mysqli_query($conn, "SELECT * FROM sklep_zaliczenie.users");

?>