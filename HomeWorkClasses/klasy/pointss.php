<?php

/*      #2 Napisz  klas� kt�ra b�dzie zawiera�a:
  - w�a�ciwo�ci: x, y, r (promie�)
  - Dopisz do nowej klasy metod�/metody kt�re b�d� oblicza� odleg�o�� punkt�w od punktu danej klasy.
  - Je�eli obliczona warto�� b�dzie mniejsza lub r�wna promieniowi danej klasy zapis dany punkt w tablicy �ok�.
  - Je�eli obliczona warto�� b�dzie wi�ksza ni� promie� danej klasy zapisz punkt w tablicy �nok�.
  - Napisz metod�/metody umo�liwiaj�ce wy�wietlenie wszystkich punkt�w z tablicy �ok� i �nok�
 */

class Pointss {

    public $x, $y, $r;

    public function __construct($x = null, $y = null, $r = 15) {
        $this->x = (int) $x;
        $this->y = (int) $y;
        $this->r = (int) $r;
    } 
    //odleg�o�� mi�dzy punktami
    // A(x1, y1) i B(x2, y2)
    // d = pierwiastek (x1 -x2)do kwadratu + (y2-y1) do kwadratu
    // d = sqrt(pow((x1-x2),2) + pow((y2 - y1),2))
    // number pow ( number $podstawa , number $wyk�adnik )
    //float sqrt ( float $argument )

    public function distance() {

       // $d = sqrt(pow(($x1-$x2),2) + pow(($y2 - $y1),2));
            
        
    }
}