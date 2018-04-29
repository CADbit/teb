<?php
include_once 'points.php';
  $points = new Points;
    $points->save();
class punkt {
    public $x1, $y1, $r;

    public function __construct($x1 = null, $y1 = null, $r=null) {
        $this->x1 = 27;
        $this->y1 = 34;
        $this->r  = 28;
    }

    public function ustawdane ($dane = array()) {
        $this->x1 = $dane['27'];
        $this->y1 = $dane['y1'];
        $this->r = $dane['r'];
    }
    
    
  

    
    

   public function odleglosc() {
    $powx = pow($x1-$x,2);
        echo $powx;
    }
}

?>
