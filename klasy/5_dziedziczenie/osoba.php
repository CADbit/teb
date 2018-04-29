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

    // Metody - funkcje
    public function __construct() {
        $this->imie = 'Adolf';
        $this->nazwisko = 'Hapke';
        $this->wiek = 0;
        $this->wzrost = 0;
    }

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

    public function __destruct() {
        echo 'Właśnie usunołem osobę'.'<br/><br/>';
    }
}

class student extends osoba {
    private $nrIndeksu;

    public function __construct() {
        parent:: __construct();
        $this->nrIndeksu = 123456789;
        $this->ustawId(34);
    }

    public function przedstaw_sie() {
        parent:: przedstaw_sie();
        echo 'Jestem studentem.';
    }
    public function piszNrIndeksu() {
        return $this->nrIndeksu;
    }

    public function __destruct() {
        echo 'Właśnie usunołem studenta'.'<br/><br/>';
    }
}
?>

