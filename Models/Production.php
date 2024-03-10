<?php
require_once __DIR__ ."/Genre.php";
require_once __DIR__ ."/Movie.php";
require_once __DIR__ ."/TVSerie.php";

class Production {

    public $title;
    public $language;
    public $rating;
    public $genre;
    public $desc;
    public $movie;
    public $tvserie;

    function __construct(
        string $title, 
        string $language, 
        int $rating,
        Genre $genre,
        Movie $movie,
        TVSerie $tvserie
        ) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
        $this->genre = $genre;
        $this->movie = $movie;
        $this->tvserie = $tvserie;
    }

    public function set_title($title) {
        if (empty($title))
        return;
    $this->title = ucfirst($title);
    }
    public function get_title($title) { 
        return $this->title;
}

}