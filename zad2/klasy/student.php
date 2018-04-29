<?php

include_once 'osoba.php';
class student extends osoba {
    public $numer_indeksu, $stypendium;
  
    public function getDochody() {
        parent::getDochody();
    }
    public function getStypendium($stypendium) {
      return $this->stypendium = $stypendium;
    }

    
}

?>
