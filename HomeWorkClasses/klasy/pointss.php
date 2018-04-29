<?php

/*      #2 Napisz  klasê która bêdzie zawiera³a:
  - w³aœciwoœci: x, y, r (promieñ)
  - Dopisz do nowej klasy metodê/metody które bêd¹ obliczaæ odleg³oœæ punktów od punktu danej klasy.
  - Je¿eli obliczona wartoœæ bêdzie mniejsza lub równa promieniowi danej klasy zapis dany punkt w tablicy „ok”.
  - Je¿eli obliczona wartoœæ bêdzie wiêksza ni¿ promieñ danej klasy zapisz punkt w tablicy „nok”.
  - Napisz metodê/metody umo¿liwiaj¹ce wyœwietlenie wszystkich punktów z tablicy „ok” i „nok”
 */

class Pointss {

    public $x, $y, $r;

    public function __construct($x = null, $y = null, $r = 15) {
        $this->x = (int) $x;
        $this->y = (int) $y;
        $this->r = (int) $r;
    } 
    //odleg³oœæ miêdzy punktami
    // A(x1, y1) i B(x2, y2)
    // d = pierwiastek (x1 -x2)do kwadratu + (y2-y1) do kwadratu
    // d = sqrt(pow((x1-x2),2) + pow((y2 - y1),2))
    // number pow ( number $podstawa , number $wyk³adnik )
    //float sqrt ( float $argument )

    public function distance() {

       // $d = sqrt(pow(($x1-$x2),2) + pow(($y2 - $y1),2));
            
        
    }
}
