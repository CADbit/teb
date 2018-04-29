<?php
    include_once 'klasy/zwierze.php';
    include_once 'klasy/ryba.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Klasa osoba</title>
</head>
<body>
<?php
    $zwierze = new zwierze;
    echo $zwierze->oddychaj(); echo '<br/><br/>';
    $ryba = new ryba;
    echo $ryba->plyn(); echo '<br/><br/>';
?>
</body>
</html>