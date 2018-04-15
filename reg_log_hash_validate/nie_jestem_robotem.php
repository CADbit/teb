<?php


$liczba1 = rand(0, 100);
$liczba2 = rand(0, 100);
$liczba3 = $liczba1 + $liczba2;


echo $liczba1." + ".$liczba2;


?>


<input type="hidden" name="bot_wynik" value="<?php echo $liczba3 ?>" requiured><br><br>
<input type="text" name="bot"><br><br>


