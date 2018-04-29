<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

$host = 'localhost'; // 127.0.0.1
$user = 'teb';
$pass = 'zaq1@WSX';

/*
 * Bazy danych w PHP
 *
 * Etapy pracy:
 * 1) Połączenie z serwerem bazodanowym.
 * 2) Zapytania do bazy, w tym: seletc, insert, create, drop, use, update.
 * 3) Kończenie pracy z serwerem bazodanowym.
 *
 * PHP obsługuje bazy danych: MySQL, MSSQL, PostgreSQL, SQLite
 */

// #1 Połączenie z serwerem bazy danych MySQL - http://php.net/manual/pl/book.mysql.php
/*
 * mysql_connect('host', 'user', 'password');
 *
 * PostgreSQl:
 * pg_connect('host=host_name user=user_name password=user_password dbname=databases_name');
 *
 * MSSQL:
 * mssql_connect('host', 'user', 'password');
 */
$uchwyt_do_bazy = mysql_connect($host, $user, $pass);
if (!$uchwyt_do_bazy) {
    exit('Błąd połączenia z serwerem MySQL');
} else {
    echo 'Połączenie z serwerem baz danych<br/>';
}

// #2 Zapytanie do serwera
$str = 'SHOW DATABASES;'; // $sql;
$zapytanie = mysql_query($str, $uchwyt_do_bazy); // $query
// 1)
echo "<br/>";
var_dump($zapytanie);
echo "<br/><br/>";
print_r($zapytanie);
echo "<br/><br/>";
// 2)
// while ($wiersz = mysql_fetch_row($zapytanie)) {
//     // var_dump($wiersz);
//     // echo "<br/>";
//     echo $wiersz[0];
//     echo "<br/>";
// }
// echo "<br/>";
// 3)
$zapytanie = mysql_query($str, $uchwyt_do_bazy); // !!!!!!!!!!!!
$tab = null;
while ($wiersz = mysql_fetch_array($zapytanie, MYSQL_BOTH)) { // MYSQL_ASSOC, MYSQL_NUM, MYSQL_BOTH
    $tab[] = $wiersz;
}
$ile = mysql_num_rows($zapytanie);
for ($i = 0; $i < $ile; $i++) {
    print_r($tab[$i]);
    echo "<br/>";
}
echo "<br/>";

// #3 Kończenie pracy z serwerem
if (mysql_close($uchwyt_do_bazy)) {
    echo 'Zakończono połączenie z serwerem baz danych<br/>';
} else {
    exit('Błąd przy rozłączeniu połączenia z serwerem MySQL');
}
?>
    </body>
</html>