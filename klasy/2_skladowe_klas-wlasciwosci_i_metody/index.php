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
    $osoba2 = new osoba;

//    echo "Osoba 1<br/>";
//    var_dump($osoba1);
//
//    echo '<br/><br/>Osoba 2<br/>';
//    var_dump($osoba2);

    // #1
//    echo '<br/><br/>';
//
//    $osoba1->imie = 'Michał' ;
//    $osoba1->nazwisko = "Kazula";
//    $osoba1->wiek = "30";
//    $osoba1->wzrost = "178";
//    var_dump($osoba1);
//    echo '<br/>';
//    $osoba1->przedstaw_sie();
//
//    echo '<br/>';
//
//    $osoba2->imie = 'Jan';
//    $osoba2->nazwisko = "Kowalski";
//    $osoba2->wiek = "44";
//    $osoba2->wzrost = "154";
//    var_dump($osoba2);
//    echo '<br/>';
//    $osoba2->przedstaw_sie();
    // #2
//    echo '<br/><br/>';
//    $osoba1->ustawImie('Michał'); // Dopisz brakujące metody do wprowadzania danych
//    var_dump($osoba1);
//    echo '<br/>';
//    $osoba1->przedstaw_sie(); // $osoba1->piszImie();
    // #3
//    $dane = array(
//        'imie' => 'Jan',
//        'nazwisko' => 'Kowalski',
//        'wiek' => 44,
//        'wzrost' => 154
//    );
//    $osoba1->ustawDane($dane);
//    echo '<br/><br/>';
//    var_dump($osoba1);
//    echo '<br/>';
//    $osoba1->przedstaw_sie(); // $osoba1->piszImie();
    // #4
    $osoba1->data_urodzenia = '1966-05-14';
    echo $osoba1->piszWiek();
?>
</body>
</html>