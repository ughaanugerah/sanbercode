<?php

require_once('Frog.php');
require_once('Ape.php');


$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded;   // false
echo "<br>";


// index.php
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
?>