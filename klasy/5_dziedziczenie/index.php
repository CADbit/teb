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

    $osoba1->przedstaw_sie(); echo '<br/><br/>';

    $dane = array(
        'imie' => 'Jan',
        'nazwisko' => 'Kowalski',
        'wiek' => 44,
        'wzrost' => 154
    );

    $osoba1->ustawDane($dane); echo '<br/><br/>';
    $osoba1->przedstaw_sie(); echo '<br/><br/>';
    unset($osoba1);

    $student1 = new student();
    $student1->wiek = 21;
    $student1->wzrost = 182;
    $student1->przedstaw_sie(); echo '<br/><br/>';
    echo $student1->piszNrIndeksu(); echo '<br/><br/>';
    echo $student1->piszId();
    unset($student1);
?>
</body>
</html>