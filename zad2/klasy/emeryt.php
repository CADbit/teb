<?php

include_once 'osoba.php';
class emeryt extends osoba {
    public $emerytura;
  
    public function getDochody() {
        parent::getDochody();
    }
    public function getEmerytura($emerytura) {
      return $this->emerytura = $emerytura;
    }

    
}

?>
