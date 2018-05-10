<?php
include_once 'klasy/osoba.php';

class student extends osoba{
    public $numer_indeksu, $stypendium;

    public function getStypendium() {
        return 'Stypendium_wyp';
    }

    public function getDochody() {
    parent::getDochody();
    return 'student_dochody';
    }
}

?>

