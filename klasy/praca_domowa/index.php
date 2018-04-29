<?php
     include_once 'klasy/plik.php';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praca domowa</title>
</head>
<body>
<?php
    $points = new Points;
    $points->save();
    $punkt1 = new punkt;
    $dane = array (
        'x1' => 23,
        'y1' => 32,
        'r'  => 28
    );
    $punkt1->ustawdane ($dane); 
   $punkt1->odleglosc();

/*
* Praca w domu
* #1 Napisz funkcję odczytującą punkty z pliku. Format zapisu punktu w pliku: x:y;
* #2 Napisz  klasę która będzie zawierała:
* właściwości: x, y, r (promień)
* Dopisz do nowej klasy metodę/metody które będą obliczać odległość punktów od punktu danej klasy.
* Jeżeli obliczona wartość będzie mniejsza lub równa promieniowi danej klasy zapis dany punkt w tablicy „ok”. 
* Jeżeli obliczona wartość będzie większa niż promień danej klasy zapisz punkt w tablicy „nok”.
* Napisz metodę/metody umożliwiające wyświetlenie wszystkich punktów z tablicy „ok” i „nok”
 * 
 * URL:
 * http://php.net/manual/pl/book.math.php // sqrt(), pow()
 * http://matematyka.pisz.pl/strona/1248.html
 * Pliki:
 * http://phpkurs.pl/operacje-na-plikach/
 * http://kursphp.com/rozdzial-5/odczytywanie-pliku/
 * http://www.php.rk.edu.pl/w/p/odczyt-i-zapis-do-plikw-tekstowych/
 * http://webmade.org/porady/zapis-pliku-odczyt-pliku-operacje-plikach-php.php
 * https://4programmers.net/PHP/FAQ/Jak_pobra%C4%87_np._trzeci%C4%85_lini%C4%99_z_pliku_
 * http://www.kess.snug.pl/?sid=10&pid=19
*/
?>
</body>
</html>