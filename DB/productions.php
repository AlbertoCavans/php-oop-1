<?php

require_once __DIR__ ."/../Models/Production.php";


$film = new Production("Film", "EN", 7);
$serie_TV = new Production("Serie TV", "FR", 8);

/* var_dump($serie_TV);
var_dump($film); */

$productions = [
    $film,
    $serie_TV
];