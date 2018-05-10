<?php

include_once 'klasy/osoba.php';

class pracownik extends osoba{

    public $pensja, $badania_lekarskie ;

    public function getPensja() {
        return 'pensja_wyp';
    }

    public function getDochody() {
    parent::getDochody();
    return 'pracownik_dochody';
    }
}

?>

