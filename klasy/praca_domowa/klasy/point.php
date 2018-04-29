<?php

class Point {
    public $x, $y;

    public function __construct($x = null, $y = null) {
        $this->x = (int) $x;
        $this->y = (int) $y;
    }

    public function setData($data = array()) {
        $this->x = $data['x'];
        $this->y = $data['y'];
    }

    public function getXY() {
        return array(
            'x'=> $this->x,
            'y' => $this->y);
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->x;
    }
}

?>

