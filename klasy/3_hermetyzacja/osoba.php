<?php

/*
 
 class nazwa_klasy {
    // ciało klasy, właściwości i metody
 }
 
 */

class osoba {
    // class body
    // Właściwości
    public $imie, $nazwisko, $wiek, $wzrost;
    private $id;
    protected $PESEL, $nrTel;

    /*
     * public -> właściwości i metody publiczne są dostępne zarówno wewnątrz klasy, jak i na zewnątrz.
     * private -> właściwości i metody prywatne są WŁASNOŚCIĄ danej klasy i NIE są widoczne na zewnątrz.
     * Mogą być wykorzystywane tylko wewnątrz tej klasy.
     * protected -> właściwości i metody chronione działają jak prywatne, jednak mogą być dziedziczone przez klasy pochodne.
     * W klasach pochodnych również nie są widoczne na zewnątrz.
     */

    // Metody - funkcje
    public function przedstaw_sie() {
        echo '<br/>';
        echo 'Witaj,<br/>Nazywam się '.$this->imie.' '.$this->nazwisko.', mam '.$this->wiek.' lat , mierzę '.$this->wzrost.' cm wzrostu.';
        echo '<br/>';
    }

    /*
     * $dane = array(
     *  'imie' => str,
     *  'nazwisko' => str,
     *  'wiek' => int,
     *  'wzrost' => int
     * )
     */
    public function ustawDane($dane = array()) {
        $this->imie = $dane['imie'];
        $this->nazwisko = $dane['nazwisko'];
        $this->wiek = $dane['wiek'];
        $this->wzrost = $dane['wzrost'];
    }

    public function ustawId($id) {
        $this->id = $id;
    }

    public function piszId() {
        return $this->id;
    }
}

?>

