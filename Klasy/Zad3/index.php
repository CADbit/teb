<?php
    include_once 'klasy/punkt.php';
    include_once 'klasy/punktB.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Klasa punkt</title>
</head>
<body>
<?php

    $punkt = new punktB;
    echo $punkt->init(); echo '<br/><br/>';
    echo $punkt->pokaz(); echo '<br/><br/>';
    echo $punkt->wsX(); echo '<br/><br/>';
    echo $punkt->wsY(); echo '<br/><br/>';
    echo $punkt->promien(); echo '<br/><br/>';
?>
</body>
</html>