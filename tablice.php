<?php

$tab = array("e1","e2","e3","e4");

echo count($tab)."<br/>";
echo sizeof($tab)."<br/>";


$tab_1 = array(3,2,5,7,9,0,1,4);
echo "Zawartość tablicy przed sorotowaniem:<br/>";
foreach ($tab_1 as $value) {
    echo $value." ";
}
sort ($tab_1);
echo "<br/>Zawartość tablicy po sortowaniu rosnąco:<br/>";
foreach($tab_1 as $value){
    echo $value. " ";
}
rsort ($tab_1);
echo "<br/>Zawartość tablicy po sortowaniu malejąco:<br/>";
foreach($tab_1 as $value){
    echo $value. " ";
}
$tab_a = array (
    "k1"=>"b",
    "k4"=>"d",
    "k2"=>"a",
    "k3"=>"c"
);
echo "<br/>Zawartość tablicy przed sorotowaniem:<br/>";
foreach ($tab_a as $value) {
    echo $value." ";
}
asort ($tab_a);
echo "<br/>Zawartość tablicy po sortowaniu rosnąco:<br/>";
foreach($tab_a as $value){
    echo $value. " ";
}
arsort ($tab_a);
echo "<br/>Zawartość tablicy po sortowaniu malejąco:<br/>";
foreach($tab_a as $value){
    echo $value. " ";
}
ksort ($tab_a);
echo "<br/>Zawartość tablicy po sortowaniu według klucza:<br/>";
foreach($tab_a as $key=>$value){
    echo $key."-".$value. "<br/>";
}
krsort ($tab_a);
echo "<br/>Zawartość tablicy po sortowaniu według klucza:<br/>";
foreach($tab_a as $key=>$value){
    echo $key."-".$value. "<br/>";
}
echo"<hr/>";
echo array_search(7,$tab_1)."<br/>";
echo array_search("a",$tab_a)."<br/>";
?>