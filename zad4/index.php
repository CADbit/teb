<?php
    include_once 'klasy/Samochod.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Klasa samochod</title>
</head>
<body>
<?php
    $samochod1 = new samochod;
    $dane = array (
        'kolor' => 'szary',
        'masa' => '614kg',
        'pozycja' => ' ',
        'predkosc' => ' '
    );
    var_dump($samochod1);
    echo '<br/><br/>';
    echo $samochod1->przyspiesz(); echo '<br/><br/>';
    echo $samochod1->hamuj(); echo '<br/><br/>';
    echo $samochod1->skrec(); echo '<br/><br>';
?>
</body>
</html>