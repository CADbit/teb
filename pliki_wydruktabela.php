<?php
$tmp = file('rivers.txt');
$tmp_c = count ($tmp); 
for ($i = 0; $i <$tmp_c; $i++) {
    $linia = explode('*', trim($tmp[$i]));
    echo "<TR><TD>{$linia[0]}</TD>" . 
         "<TD>{$linia[1]}</TD>" .
         "<TD>{$linia[2]}</TD></TR>\n";
}
?>