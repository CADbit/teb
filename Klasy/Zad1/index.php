<?php
    include_once 'klasy/zwierze.php';
    include_once 'klasy/ryba.php';
    include_once 'klasy/ptak.php';
    include_once 'klasy/ssak.php';
    include_once 'klasy/pies_domowy.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Klasa osoba</title>
</head>
<body>
<?php

    $zwierze = new zwierze;
    echo $zwierze->oddychaj(); echo '<br/><br/>';
    $zwierze1 = new zwierze;
    echo $zwierze1->patrz(); echo '<br/><br/>';
    $ryba = new ryba;
    echo $ryba->plyn(); echo '<br/><br/>';
    $ptak = new ptak;
    echo $ptak->lec(); echo '<br/><br/>';


    $ptak1 = new pies_domowy;
    echo $ptak1->oddychaj(); echo '<br/><br/>';
?>
</body>
</html>