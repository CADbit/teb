<?php

$tab_alpha = ["A","B","C","D","E"];
$tab_num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$tab_spec = ["!","@","#","$","%","^","*"];

function genCode ($chars = ["A","B","C"], $qty = 4){
    $count_chars = count($chars);
    $code = "";
    
    for ($i = 0; $i < $qty; $i++){
         $code .= $chars[rand(0, $count_chars -1)];       
    }
    return $code;
}
echo genCode ($tab_alpha, 4);
?>