<?php
include_once 'point.php';

class Points {
    public $size, $min, $max, $delta;
    private $x, $y;
    protected $points; // array(new Point)

    public function __construct() {
        $this->size = 10;
        $this->delta = 10;
        $this->max = 100;
        $this->min = -100;
    }

    public function setData($data = array()) {
        $this->size = (int) $data['size'];
        $this->delta = (int) $data['delta'];
        $this->max = (int) $data['max'];
        $this->min = (int) $data['min'];
    }

    public function getPoints() {
        for($i = 1; $i <= $this->size; $i++) {
            $this->x = rand($this->min, $this->max);
            $this->y = rand($this->x - $this->delta, $this->x + $this->delta);
            //$this->points[] = [new Point($this->x, $this->y)];
            $this->points[] = new Point($this->x, $this->y);
        }
        return $this->points;
    }

    public function save($fileName = 'punkty') {
        $file = $fileName.".txt";
        // uchwyt pliku, otwarcie do dopisania
        $fp = fopen($file, "w");
        // blokada pliku do zapisu
        flock($fp, 2);
        // zapisanie danych do pliku
        //foreach ($this->getPoints() as $value) {
        foreach ($this->getPoints() as $point) {
            //$point = reset($value); // new Point
            $data =  $point->x.':'.$point->y.";\r\n";
            fwrite($fp, $data);
            echo 'x: '.$point->x.' y: '.$point->y.'<br/>';
        }
        // odblokowanie pliku
        flock($fp, 3);
        // zamknięcie pliku
        fclose($fp);
    }
}

