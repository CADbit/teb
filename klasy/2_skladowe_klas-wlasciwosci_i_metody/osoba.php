<?php

/*
 
 class nazwa_klasy {
    // ciało klasy, właściwości i metody
 }
 
 */

class osoba {
    // class body
    // Właściwości
    public $imie;
    public $nazwisko;
    public $wiek;
    public $wzrost;
    public $data_urodzenia; // 'YYYY-MMM-DD'

    // Metody - funkcje
    // #1
    public function przedstaw_sie() {
        echo '<br/>';
        echo 'Witaj,<br/>Nazywam się '.$this->imie.' '.$this->nazwisko.', mam '.$this->wiek.' lat , mierzę '.$this->wzrost.' cm wzrostu.';
        echo '<br/>';
    }

    // #2
    public function ustawImie($imie) {
        $this->imie = $imie; // Przygotuj metody: ustawNazwisko, ustawWiek, ustawWzrost
    }

    public function piszImie() {
        return $this->imie; // Przygotuj metody: piszNazwisko, piszWiek, piszWzrost
    }

    // #3
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
    // #4
    public function piszWiek() {
        // #1
//        $dzis = time();
//        $data_urodzenia = strtotime($this->data_urodzenia);
//        $wiek = $dzis - $data_urodzenia;
//        return ($wiek / (60*60*24*365)); // Błąd wynikający z lat przestępnych
        // #2
        $rok_urodzenia = date('Y', strtotime($this->data_urodzenia));
        $dzis = date('Y');
        return $dzis - $rok_urodzenia;
    }
}

?>

