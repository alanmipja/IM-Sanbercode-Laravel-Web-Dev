<?php
require_once "Animal.php";
require_once "Frog.php";
require_once "Ape.php";

// Animal
$sheep = new Animal("shaun");
echo $sheep->name . "<br>";
echo $sheep->legs . "<br>";
echo $sheep->cold_blooded . "<br><br>";

// Ape
$sungokong = new Ape("kera sakti");
echo $sungokong->name . "<br>";
echo $sungokong->legs . "<br>";
$sungokong->yell();
echo "<br><br>";

// Frog
$kodok = new Frog("buduk");
echo $kodok->name . "<br>";
echo $kodok->legs . "<br>";
$kodok->jump();
