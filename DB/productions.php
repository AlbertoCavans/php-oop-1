<?php

require_once __DIR__ ."/../Models/Production.php";
require_once __DIR__ ."/../Models/Genre.php";
require_once __DIR__ ."/../Models/Movie.php";
require_once __DIR__ ."/../Models/TVSerie.php";



$film = new Production("Film", "EN", 7, new Genre("Action", "First WW film"), new Movie("2.1mln", "2.1h"), new TVSerie("/"));
$serie_TV = new Production("Serie TV", "FR", 8, new Genre("Romantic", "A couple story"), new Movie("/", "/"), new TVSerie("4"));

/* var_dump($serie_TV);
var_dump($film); */

$productions = [
    $film,
    $serie_TV
];

