<?php

include_once 'ssak.php';

class pies_domowy extends ssak {
    public $rasa, $kolor_siersci;

    public function szczekaj() {
        return 'Szczeka';
    }

    public function aportuj() {
        return 'Aportuje';
    }
}

?>

