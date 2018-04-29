<?php

/**
 * Description of PrimeNumbers
 *
 * @author cronix
 */
class PrimeNumbers {

    public $n, $wynik;

    public function isPrime($n) {
        $wynik = 0;
        $g = floor($n / 2);
        for ($i = 2; $i <= $g; $i++) {
            if ($wynik == 0 & $i <= $g) {
                if ($n % $i == 0) {
                    ++$wynik;
                } else {
                    ++$i;
                }
            }
        }
        echo $wynik;
        echo '<br/>';
        if ($n % $i == 0) {
            //return 0;
            echo 'podana liczba jest liczbą pierwszą';
        } else {
            // return 1;
            echo 'podana liczba nie jest liczbą pierwszą';
        }
    }

}

?>