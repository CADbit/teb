<?php

$tab_alpha = ["A","B","C","D","E"];
$tab_num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$tab_spec = ["!","@","#","$","%","^","*"];

function genCode ($chars = [[],[],[]],$qty = 4){
    $code = "";
    for ($i = 0; $i < $qty; $i++){
        $tab = $chars[rand(0,count($chars)-1)];
        $count_chars = count($tab);
        $code = $tab[rand(0, count ($chars) -1)];
              
    }
    return $code;
}
echo genCode ([$tab_alpha],[$tab_num],[$tab_spec]);
?>