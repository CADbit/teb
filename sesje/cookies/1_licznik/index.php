<?php

global $counter;
$name = 'counter';
$expire = time() + 20;//+ 3600; // 1h

if (isset($_COOKIE[$name])) {
    $counter = $_COOKIE[$name];
    setcookie($name, ++$counter, $expire);
} else {
    $counter = 1;
    setcookie($name, $counter, $expire);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie - licznik</title>
</head>
<body>
<?php
    echo $counter;
?>
</body>
</html>

