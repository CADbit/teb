<?php

$hd = fopen ('rivers.txt', 'rt') ;
while (!feof ($hd)) {
    $linia = fgetcsv ($hd, 1024, '*');
    echo "<TR><TD>{$linia[0]}</TD>" .
         "<TD>{$linia[1]}</TD>" .
         "<TD>{$linia[0]}</TD></TR>\n";
}
fclose($hd);
?>