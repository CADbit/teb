<?php

include_once 'osoba.php';
class pracownik extends osoba {
    public $badania_lekarskie, $pensja;
  
    public function getDochody() {
        parent::getDochody();
    }
    public function getPensja($pensja) {
      return $this->pensja = $pensja;
    }

    
}

?>
