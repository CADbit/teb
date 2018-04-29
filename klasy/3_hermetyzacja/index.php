<?php
    include_once 'osoba.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Klasa osoba</title>
</head>
<body>
<?php
    $osoba1 = new osoba;

    $dane = array(
        'imie' => 'Jan',
        'nazwisko' => 'Kowalski',
        'wiek' => 44,
        'wzrost' => 154
    );

    $osoba1->ustawDane($dane); echo '<br/><br/>';
    var_dump($osoba1); echo '<br/><br/>';
    $osoba1->przedstaw_sie();

    $osoba1->imie = 'Adolf'; echo '<br/><br/>';
    $osoba1->przedstaw_sie(); echo '<br/><br/>';
    $osoba1->ustawId(145);
    echo $osoba1->piszId();
?>
</body>
</html>