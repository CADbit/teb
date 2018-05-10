<?php


//include_once 'klasy/osoba.php';
class emeryt extends osoba{
    public $emerytura;

    public function getEmerytura() {
        return 'emerytura_wyp';
    }


        public function getDochody() {
        	parent::getDochody();
        return 'emeryt_dochody';
    }
}

?>

