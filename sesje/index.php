<?php

include_once 'klasy/Session.php';

echo "Witaj na stronie<br/>";

Session::start();

echo "ID sesji to: ".Session::getSessionId()."<br/>";

Session::setData("zmienna1", "Damian");
Session::setData("zmienna2", "Teb");

echo "Zmienna1 to: ".Session::getData("zmienna1")."<br>";
echo "Zmienna2 to: ".Session::getData("zmienna2")."<br>";

Session::data("zmienna3", "Lublin")."<br>";
echo "Zmienna3 to:".Session::data("zmienna3")."<br>";

//Funkcja która konczy sesje
// Session::stop();

?>