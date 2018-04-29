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
   $osoba = new osoba;
    echo $osoba->getDochody(); echo '<br/><br/>';
    $pracownik = new pracownik;
    echo $pracownik->getDochody(); echo '<br/>';
    echo $pracownik->getPensja(1000); echo '<br/><br/>';
    $student = new student;
    echo $student->getDochody(); echo '<br/>';
    echo $student->getStypendium(500); echo '<br/><br/>';
    $emeryt = new emeryt;
    echo $emeryt->getDochody(); echo '<br/>';
    echo $emeryt->getEmerytura(1500);
?>
</body>
</html>