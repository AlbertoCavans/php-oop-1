<?php

require_once __DIR__ ."/../Models/Production.php";
require_once __DIR__ ."/../Models/Genre.php";



$film = new Production("Film", "EN", 7, new Genre("Action", "First WW film"));
$serie_TV = new Production("Serie TV", "FR", 8, new Genre("Romantic", "A couple story"));

/* var_dump($serie_TV);
var_dump($film); */

$productions = [
    $film,
    $serie_TV
];

