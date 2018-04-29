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
            'x' => $this->x,
            'y' => $this->y);
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }
// odt¹d moje wypociny 
    
    public function read($fileName = "punkty_10") {

        $file = $fileName . '.txt';
        if (file_exists($file)) {
            $fp = fopen($file, 'r');
            $read = fread($fp, filesize($file));
            //print_r($read);
            //echo '<br/><br/>';
            $firstCut = explode(";", $read);
            //print_r($firstCut);
            //echo '<br/> ciecie drugie <br/>';
            echo '<br/>';
        } else {
            echo 'nieprawid³owa nazwa pliku';
            echo'<br/>';
        }
//        foreach ($firstCut as $key => $value) {
//            $secondCut = explode(":", $firstCut[$key]);
//            print_r($secondCut);
//            echo '<br/>';
//        }

        for ($i = 0; $i < count($firstCut) - 1; $i++) {
            $secondCut[] = explode(":", $firstCut[$i]);
            print_r($secondCut);
            echo '<br/>';
        }

        fclose($fp);
        return $secondCut;
    }

    function set_values($data = array()) {
            $this->x = $data['0'];
            $this->y = $data['1'];
            print_r($data);

    }

}
?>

