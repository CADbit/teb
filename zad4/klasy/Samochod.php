<?php

class samochod {
    public $kolor, $masa, $pozycja, $predkosc;
    
    public function __construct() {
        $this->kolor = 'kolor';
        $this->masa = 'masa';
        $this->pozycja = 'pozycja';
        $this->predkosc = 'predkosc';
    }
    public function ustawdane ($dane = array ()) {
        $this->kolor = $dane['kolor'];
        $this->masa = $dane['masa'];
        $this->pozycja = $dane['pozycja'];
        $this->predkosc = $dane['predkosc'];
    }
    public function przyspiesz (){
        return 'Przyspiesza';
    } 
    public function hamuj () {
        return 'Hamuje';
    }
    public function skrec () {
        return 'Skręca';
    }
}
?>
