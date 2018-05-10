<?php

class Pozycja {

    public $x, $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

}

class Predkosc {

    public $x, $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

}

class Samochody {

    public $kolor, $masa, $pozycja, $predkosc;

    public function __construct($kolor, $masa, $pozycja, $predkosc) {
        $this->kolor = $kolor;
        $this->masa = $masa;
        $this->pozycja = $pozycja;
        $this->predkosc = $predkosc;
    }

    public function przyspiesz() {
        return 'Przyspieszam';
    }

    public function hamuj() {
        return 'Hamuje';
    }

    public function skrec() {
        return 'Skręcam';
    }

    public function getKolor() {
        return kolor;
    }

}
?>
