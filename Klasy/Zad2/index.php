<?php
    include_once 'klasy/osoba.php';
    include_once 'klasy/pracownik.php';
    include_once 'klasy/student.php';
	include_once 'klasy/emeryt.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Klasa osoba</title>
</head>
<body>
<?php

    $pracownik = new pracownik;
    echo $pracownik->getpensja(); echo '<br/><br/>';
    $emeryt = new emeryt;
    echo $emeryt->getemerytura(); echo '<br/><br/>';

    $emeryt1 = new emeryt;
    echo $emeryt1->getDochody(); echo '<br/><br/>';
        $emeryt2 = new student;
    echo $emeryt2->getDochody(); echo '<br/><br/>';
?>
</body>
</html>