<?php
include_once 'klasy/points.php';
include_once 'klasy/point.php';
include_once 'klasy/pointss.php';
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
        $points->size = 10;
        $points->save('punkty_10');
//        $points->size = 100;
//        $points->save('punkty_100');
//        $points->size = 1000;
//        $points->save('punkty_1000');
//        $points->size = 10000;
//        $points->save('punkty_10000');
     
        // chronix
        $read = new Point();
        $tab = $read->read('punkty_10');

        echo'<br/>';
        foreach ($tab as $key => $value) {
            print_r($read->set_values($tab));
        }

        echo'<br/>';


//



        /*
         * Praca w domu
         * #1 Napisz funkcjê odczytuj¹c¹ punkty z pliku. Format zapisu punktu w pliku: x:y;
         * #2 Napisz  klasê która bêdzie zawiera³a:
         * w³aœciwoœci: x, y, r (promieñ)
         * Dopisz do nowej klasy metodê/metody które bêd¹ obliczaæ odleg³oœæ punktów od punktu danej klasy.
         * Je¿eli obliczona wartoœæ bêdzie mniejsza lub równa promieniowi danej klasy zapis dany punkt w tablicy „ok”. 
         * Je¿eli obliczona wartoœæ bêdzie wiêksza ni¿ promieñ danej klasy zapisz punkt w tablicy „nok”.
         * Napisz metodê/metody umo¿liwiaj¹ce wyœwietlenie wszystkich punktów z tablicy „ok” i „nok”
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