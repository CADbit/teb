<?php
include_once 'Samochody.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Klasy_Samochody</title>
    </head>
    <body>
        <?php
        $pozycja = new Pozycja(-20, 20);
        $predkosc = new Predkosc(0, 50);
        $samochodA = new Samochody('czerwony', '120', $pozycja, $predkosc);
        echo $samochodA->skrec(); echo '<br/>';
        echo $samochodA->hamuj(); echo '<br/>';
        echo $samochodA->przyspiesz(); echo '<br/>';
        echo $samochodA->kolor; echo '<br/>';
        echo $samochodA->masa; echo '<br/>';
        print_r($samochodA->predkosc); echo '<br/>';
        print_r($samochodA->pozycja); echo '<br/>';
        ?>
    </body>
</html>
