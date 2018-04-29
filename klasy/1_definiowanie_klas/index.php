<?php
    include_once 'osoba.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Klasa osoba</title>
</head>
<body>
<?php
    $osoba1 = new osoba;
    $osoba2 = new osoba;

    echo "Osoba 1<br/>";
    var_dump($osoba1);

    echo '<br/><br/>Osoba 2<br/>';
    var_dump($osoba2);
?>
</body>
</html>