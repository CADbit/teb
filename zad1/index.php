<?php
    include_once 'klasy/zwierze.php';
    include_once 'klasy/ryba.php';
    include_once 'klasy/ssak.php';
    include_once 'klasy/ptak.php';
    include_once 'klasy/pies_domowy.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Klasa zwierzę</title>
</head>
<body>
<?php
    $zwierze = new zwierze;
    echo $zwierze->oddychaj(); echo '<br/><br/>';
    $ryba = new ryba;
    echo $ryba->plyn(); echo '<br/><br/>';
    $ssak = new ssak;
    echo $ssak->biegnij(); echo '<br/><br/>';
    $ptak = new ptak;
    echo $ptak->lec() ; echo '<br/><br/>';
    $pies_domowy = new pies_domowy;
    echo $pies_domowy->szczekaj() ; echo '<br/><br/>';
    echo $pies_domowy->aportuj() ; echo '<br/><br/>';
?>
</body>
</html>