<?php

require_once "animal.php";
require_once "frog.php";
require_once "ape.php";

$sheep = new Animal();

echo "<br>";
echo $sheep->get_name("shaun") . "<br>"; // "shaun"
echo $sheep->get_legs(2) . "<br>"; // 2
echo $sheep->get_cold_blooded("false") . "<br>"; // false

//class ape dan frog
$sungokong = new Ape("kera sakti");
echo "<br>";
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
echo "<br>";
$kodok->jump(); // "hop hop"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
